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
    public function eoiRegistration()
    {
        $this->checkUserLevel([2]);
        $data['title'] = "EoI Form : " . $this->projectTitle;
        $data["page_name"] = "pages/eoi-registration";
        $data['userDetail'] = $this->BaseModel->getData('login', ['user_id' => $this->session->login['user_id']])->row();
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
}
