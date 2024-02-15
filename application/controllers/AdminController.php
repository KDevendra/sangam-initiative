<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AdminController extends CI_Controller
{
    var $projectTitle = "Project Title";
    public function __construct()
    {
        parent::__construct();
        if (!isset($this->session->login['user_level']) || empty($this->session->login['login_id'])) {
            redirect('login');
        }
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('BaseModel');
        $this->load->helper('common_helper');
    }
    private function handleFileUpload($inputName, $uploadPath, $allowedTypes, $maxSize)
    {
        if (!empty($_FILES[$inputName]["name"])) {
            $config["upload_path"] = $uploadPath;
            $config["max_size"] = $maxSize;
            $config["allowed_types"] = $allowedTypes;
            $CI = &get_instance();
            $CI->load->library("upload", $config);
            $CI->upload->initialize($config);
            if ($CI->upload->do_upload($inputName)) {
                $uploadData = $CI->upload->data();
                $fileExtension = pathinfo($uploadData["file_name"], PATHINFO_EXTENSION);
                $uniqueFilename = uniqid($inputName . "_") . "." . $fileExtension;
                $oldFilePath = $config["upload_path"] . $uploadData["file_name"];
                $newFilePath = $config["upload_path"] . $uniqueFilename;
                if (rename($oldFilePath, $newFilePath)) {
                    return $uniqueFilename;
                } else {
                    return "Error: Unable to rename the uploaded file.";
                }
            } else {
                return "Error: " . $CI->upload->display_errors();
            }
        } else {
            return "Error: No file selected for upload.";
        }
    }
    private function checkUserLevel($allowedLevels)
    {
        $userLevel = $this->session->login["user_level"];
        if (!in_array($userLevel, $allowedLevels)) {
            $this->load->driver("cache");
            $this->session->sess_destroy();
            $this->cache->clean();
            return redirect("sign-in");
        }
    }
    public function adminDashboard()
    {
        $data['title'] = "Dashboard : " . $this->projectTitle;
        $data["page_name"] = "pages/dashboard";
        $this->load->view("component/index", $data);
    }

    public function logout()
    {
        $this->load->driver("cache");
        $this->session->sess_destroy();
        $this->cache->clean();
        return redirect("login");
    }
    public function profile()
    {
        $user_id = $this->session->login['login_id'];
        $data['profileData'] = $this->BaseModel->getData('login', ['login_id' => $user_id])->row();
        if ($data['profileData']) {
            $data['title'] = $this->projectTitle . ": Profile";
            $data["page_name"] = "pages/profile";
            $this->load->view("component/index", $data);
        } else {
            echo "No data found for user with ID: $user_id";
        }
    }
    public function editProfile($user_id)
    {
        $user_id = customDecrypt($user_id);
        $data['profileData'] = $this->BaseModel->getData('login', ['user_id' => $user_id])->row();
        if ($data['profileData']) {
            $data['title'] = $this->projectTitle . ": Profile";
            $data["page_name"] = "pages/edit-profile";
            $this->load->view("component/index", $data);
        } else {
            echo $this->db->last_query();
            echo "No data found for user with ID: $user_id";
        }
    }
    public function projectSettings()
    {
        $data['title'] = $this->projectTitle . ": Dashboard";
        $data["page_name"] = "theme/project-settings";
        $this->load->view("component/index", $data);
    }
    public function themeCustomizerOptions()
    {
        $response = [];
        try {
            if ($this->input->post()) {
                $postData = ['layout' => $this->input->post('layout'), 'sidebar_user_profile_avatar' => $this->input->post('avatar')];
                $query = $this->BaseModel->updateData('theme_customizer_options', $postData, ['id' => 1]);
                if ($query) {
                    $response['status'] = true;
                    $response['message'] = 'Customizer options updated successfully.';
                } else {
                    $response['status'] = false;
                    $response['message'] = 'Failed to update customizer options.';
                }
            } else {
                $response['status'] = false;
                $response['message'] = 'Invalid request data.';
            }
        } catch (Exception $e) {
            $response['status'] = false;
            $response['message'] = 'An error occurred: ' . $e->getMessage();
        }
        return $response;
    }
    public function users($action = null, $user_id = null)
    {
        $this->checkUserLevel([1]);
        $data["title"] = $action . "users : " . $this->projectTitle;
        switch ($action) {
            case "add":
                $data["flag"] = "add";
                $data["page_name"] = "pages/user-detail";
                break;
            case "view":
                if ($user_id !== null) {
                    $data["flag"] = "view";
                    $data["userDetail"] = $this->BaseModel->getData("login", ["user_id" => $user_id])->row();
                    $data["page_name"] = "pages/user-detail";
                } else {
                }
                break;
            case "edit":
                if ($user_id !== null) {
                    $data["flag"] = "edit";
                    $data["userDetail"] = $this->BaseModel->getData("login", ["user_id" => $user_id])->row();
                    $data["page_name"] = "pages/user-detail";
                } else {
                }
                break;
            case "delete":
                if ($user_id !== null) {
                    $query = $this->BaseModel->deleteData("login", ["user_id" => $user_id,]);
                    if ($query) {
                        $response = ["status" => "success", "message" => "The user has been successfully deleted.",];
                    } else {
                        $response = ["status" => "error", "message" => "Unable to delete the user. Please try again later.",];
                    }
                    if ($this->input->is_ajax_request()) {
                        $this->output->set_content_type("application/json");
                        echo json_encode($response);
                        exit();
                    } else {
                    }
                } else {
                    $response = ["status" => "error", "message" => "Invalid user ID. Please provide a valid user ID.",];
                    if ($this->input->is_ajax_request()) {
                        $this->output->set_content_type("application/json");
                        echo json_encode($response);
                        exit();
                    } else {
                    }
                }
                break;
            default:
                $data["page_name"] = "pages/users";
                break;
        }
        $this->load->view("component/index", $data);
    }
    public function eoiRegistration()
    {
        $this->checkUserLevel([2]);
        $data['title'] = "EoI Form : " . $this->projectTitle;
        $data["page_name"] = "pages/eoi-registration";
        $existingData = $this->BaseModel->getData('eoi_registration', ['user_id' => $this->session->login['user_id']]);
        if ($existingData->num_rows() > 0) {
            $data['userDetail'] = $this->BaseModel->getData('eoi_registration', ['user_id' => $this->session->login['user_id']])->row();
        } else {
            $data['userDetail'] = $this->BaseModel->getData('login', ['user_id' => $this->session->login['user_id']])->row();
        }

        $this->load->view("component/index", $data);
    }
    public function eoiStatus()
    {
        $this->checkUserLevel([2]);
        $data['title'] = "EoI Status : " . $this->projectTitle;
        $data["page_name"] = "pages/eoi-status";
        $data['userDetail'] = $this->BaseModel->getData('login', ['user_id' => $this->session->login['user_id']])->row();
        $this->load->view("component/index", $data);
    }
    public function userList()
    {
        $this->checkUserLevel([1]);
        $data['title'] = "User List : " . $this->projectTitle;
        $data["page_name"] = "pages/user-list";
        $this->load->view("component/index", $data);
    }
    public function verifedUsers()
    {
        $this->checkUserLevel([1]);
        $data['title'] = "Verifed Users : " . $this->projectTitle;
        $data["page_name"] = "pages/verifed-users";
        $this->load->view("component/index", $data);
    }
    public function unverifiedUsers()
    {
        $this->checkUserLevel([1]);
        $data['title'] = "Unverified Users : " . $this->projectTitle;
        $data["page_name"] = "pages/unverified-users";
        $this->load->view("component/index", $data);
    }
    public function getUserList()
    {
        $this->checkUserLevel([1]);
        try {
            $userList = $this->BaseModel->getData("login", ['user_level' => 2], ["user_id"], "DESC")->result_array();
            if ($userList !== null) {
                $responseData = ["status" => "success", "data" => $userList];
            } else {
                $responseData = ["status" => "error", "message" => "Error fetching user data."];
            }
            echo json_encode($responseData);
        } catch (Exception $e) {
            log_message("error", $e->getMessage());
            echo json_encode(["status" => "error", "message" => "Internal server error."]);
        }
    }
    public function getUnverifiedUserList()
    {
        $this->checkUserLevel([1]);
        try {
            $userList = $this->BaseModel->getData("login", ['user_level' => 2, 'is_verified' => 0], ["user_id"], "DESC")->result_array();
            if ($userList !== null) {
                $responseData = ["status" => "success", "data" => $userList];
            } else {
                $responseData = ["status" => "error", "message" => "Error fetching user data."];
            }
            echo json_encode($responseData);
        } catch (Exception $e) {
            log_message("error", $e->getMessage());
            echo json_encode(["status" => "error", "message" => "Internal server error."]);
        }
    }
    public function getVerifiedUserList()
    {
        $this->checkUserLevel([1]);
        try {
            $userList = $this->BaseModel->getData("login", ['user_level' => 2, 'is_verified' => 1], ["user_id"], "DESC")->result_array();
            if ($userList !== null) {
                $responseData = ["status" => "success", "data" => $userList];
            } else {
                $responseData = ["status" => "error", "message" => "Error fetching user data."];
            }
            echo json_encode($responseData);
        } catch (Exception $e) {
            log_message("error", $e->getMessage());
            echo json_encode(["status" => "error", "message" => "Internal server error."]);
        }
    }
    public function updateProfileImage()
    {
        if ($this->input->post()) {
            $user_id = $this->input->post('user_id');
            if (!empty($_FILES['profile_document']["name"])) {
                $profile_document = $this->handleFileUpload("profile_document", "./uploads/profile_document/", "jpg|png|jpeg", 50000);
            } else {
                $profile_document = "Null";
            }
            if ($profile_document !== false) {
                $postData = ['profile_image' => $profile_document];
                $query = $this->BaseModel->updateData('login', $postData, ['user_id' => $user_id]);
                if ($query) {
                    $this->session->set_flashdata("response", "Profile image updated successfully.");
                } else {
                    $this->session->set_flashdata("response", "Failed to update profile image in the database.");
                }
            } else {
                $this->session->set_flashdata("response", "Failed to upload profile image. Please check the file format and size.");
            }
        } else {
            $this->session->set_flashdata("response", "Invalid request data.");
        }
    }
    public function postEoIRegistration()
    {
        if ($this->input->method() === "post") {
            $this->form_validation->set_rules('full_name', 'Full Name', 'trim');
            $this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
            $this->form_validation->set_rules('contact_no', 'Contact Number', 'trim');
            $this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'trim');
            $this->form_validation->set_rules('experience', 'Experience', 'trim');
            $this->form_validation->set_rules('previous_experience', 'Previous Experience', 'trim');
            $this->form_validation->set_rules('achievements_recognitions', 'Achievements and Recognitions', 'trim');
            $this->form_validation->set_rules('title', 'Title', 'trim');
            $this->form_validation->set_rules('category', 'Category', 'trim');
            $this->form_validation->set_rules('strategic_vision', 'Strategic Vision', 'trim');
            $this->form_validation->set_rules('objectives', 'Objectives', 'trim');
            $this->form_validation->set_rules('project_goals', 'Project Goals', 'trim');
            $this->form_validation->set_rules('contribution_to_project_goals', 'Contribution to Project Goals', 'trim');
            $this->form_validation->set_rules('technological_category', 'Technological Category', 'trim');
            $this->form_validation->set_rules('technological_type_of_resource', 'Technological Type of Resource', 'trim');
            $this->form_validation->set_rules('technological_details[]', 'Technological Details', 'trim');
            $this->form_validation->set_rules('specification[]', 'Specification', 'trim');
            $this->form_validation->set_rules('purpose[]', 'Purpose', 'trim');
            $this->form_validation->set_rules('alignment[]', 'Alignment', 'trim');
            $this->form_validation->set_rules('human_category', 'Human Category', 'trim');
            $this->form_validation->set_rules('human_type_of_resource', 'Human Type of Resource', 'trim');
            $this->form_validation->set_rules('human_details[]', 'Human Details', 'trim');
            $this->form_validation->set_rules('human_experience[]', 'human experience', 'trim');
            $this->form_validation->set_rules('role[]', 'Role', 'trim');
            $this->form_validation->set_rules('extent_of_involvement[]', 'Extent of Involvement', 'trim');
            $this->form_validation->set_rules('human_alignment[]', 'Human Alignment', 'trim');
            $this->form_validation->set_rules('other_pertinent_facts', 'Other Pertinent Facts', 'trim');
            $this->form_validation->set_rules('certification', 'Certification', 'trim');
            if ($this->form_validation->run() === false) {
            } else {
                $postData = [
                    'full_name' => $this->input->post('full_name'),
                    'email' => $this->input->post('email'),
                    'contact_no' => $this->input->post('contact_no'),
                    'date_of_birth' => $this->input->post('date_of_birth'),
                    'experience' => $this->input->post('experience'),
                    'previous_experience' => $this->input->post('previous_experience'),
                    'achievements_recognitions' => $this->input->post('achievements_recognitions'),
                    'title' => $this->input->post('title'),
                    'category' => $this->input->post('category'),
                    'strategic_vision' => $this->input->post('strategic_vision'),
                    'objectives' => $this->input->post('objectives'),
                    'project_goals' => $this->input->post('project_goals'),
                    'contribution_to_project_goals' => $this->input->post('contribution_to_project_goals'),
                    'technological_category' => $this->input->post('technological_category'),
                    'technological_type_of_resource' => $this->input->post('technological_type_of_resource'),
                    'technological_details' => json_encode($this->input->post('technological_details')),
                    'specification' => json_encode($this->input->post('specification')),
                    'purpose' => json_encode($this->input->post('purpose')),
                    'alignment' => json_encode($this->input->post('alignment')),
                    'human_category' => $this->input->post('human_category'),
                    'human_type_of_resource' => $this->input->post('human_type_of_resource'),
                    'human_details' => json_encode($this->input->post('human_details')),
                    'role' => json_encode($this->input->post('role')),
                    'extent_of_involvement' => json_encode($this->input->post('extent_of_involvement')),
                    'human_alignment' => json_encode($this->input->post('human_alignment')),
                    'other_pertinent_facts' => $this->input->post('other_pertinent_facts'),
                    'certification' => $this->input->post('certification'),
                ];
                $existingData = $this->BaseModel->getData('eoi_registration', ['user_id' => $this->session->login['user_id']]);
                if ($existingData->num_rows() > 0) {
                    $success = $this->BaseModel->updateData('eoi_registration', $postData, ['user_id' => $this->session->login['user_id']]);
                    if ($success) {
                        $this->session->set_flashdata('success', 'Data updated successfully.');
                    } else {
                        $this->session->set_flashdata('error', 'Failed to update data.');
                    }
                } else {
                    $postData['user_id'] = $this->session->login['user_id']; // Add user_id to $postData
                    $success = $this->BaseModel->insertData('eoi_registration', $postData);
                    if ($success) {
                        $this->session->set_flashdata('success', 'Data inserted successfully.');
                    } else {
                        $this->session->set_flashdata('error', 'Failed to insert data.');
                    }
                }
                return redirect('eoi-registration');
            }
        } else {
            $this->session->set_flashdata('error', 'Post Error.');
        }
    }
}
