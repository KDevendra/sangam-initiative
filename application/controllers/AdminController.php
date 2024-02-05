<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AdminController extends CI_Controller {
    var $projectTitle = "Project Title";
    public function __construct() {
        parent::__construct();
        if (!isset($this->session->login['user_level']) || empty($this->session->login['login_id'])) {
            redirect('dashboard');
        }
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('BaseModel');
        $this->load->helper('common_helper');
    }
private function handleFileUpload($inputName, $uploadPath, $allowedTypes, $maxSize) {
    if (!empty($_FILES[$inputName]["name"])) {
        $config["upload_path"] = $uploadPath;
        $config["max_size"] = $maxSize;
        $config["allowed_types"] = $allowedTypes;
        $CI = & get_instance();
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
                // Error renaming the uploaded file
                return "Error: Unable to rename the uploaded file.";
            }
        } else {
            // File upload failed
            return "Error: " . $CI->upload->display_errors();
        }
    } else {
        // No file selected
        return "Error: No file selected for upload.";
    }
}

    public function adminDashboard() {
        $data['title'] = $this->projectTitle . ": Dashboard";
        $data["page_name"] = "pages/dashboard";
        $this->load->view("component/index", $data);
    }
    public function logout() {
        $this->load->driver("cache");
        $this->session->sess_destroy();
        $this->cache->clean();
        return redirect("login");
    }
    public function profile() {
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
    public function editProfile($user_id) {
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
    public function projectSettings() {
        $data['title'] = $this->projectTitle . ": Dashboard";
        $data["page_name"] = "theme/project-settings";
        $this->load->view("component/index", $data);
    }
    public function themeCustomizerOptions() {
        $response = [];
        try {
            if ($this->input->post()) {
                $postData = ['layout' => $this->input->post('layout'), 'sidebar_user_profile_avatar' => $this->input->post('avatar'), ];
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
        }
        catch(Exception $e) {
            $response['status'] = false;
            $response['message'] = 'An error occurred: ' . $e->getMessage();
        }
        return $response;
    }
public function updateProfileImage() {
    // Check if POST data is received
    if ($this->input->post()) {
        // Get user_id from POST data
        $user_id = $this->input->post('user_id');

        // Handle file upload and get the profile document
        if (!empty($_FILES['profile_document']["name"])) {
            $profile_document = $this->handleFileUpload("profile_document", "./uploads/profile_document/", "jpg|png|jpeg", 50000);
        } else {
            $profile_document = "Null";
        }

        // Check if file upload was successful
        if ($profile_document !== false) {
            // Prepare data for updating the database
            $postData = ['profile_image' => $profile_document];

            // Update the 'login' table with the new profile image
            $query = $this->BaseModel->updateData('login', $postData, ['user_id' => $user_id]);

            // Check if the database update was successful
            if ($query) {
                // Profile image updated successfully
                $this->session->set_flashdata("response", "Profile image updated successfully.");
            } else {
                // Failed to update profile image in the database
                $this->session->set_flashdata("response", "Failed to update profile image in the database.");
            }
        } else {
            // File upload failed
            $this->session->set_flashdata("response", "Failed to upload profile image. Please check the file format and size.");
        }
    } else {
        // Invalid request data
        $this->session->set_flashdata("response", "Invalid request data.");
    }

    // Redirect to the appropriate page
    redirect('profile');  // Replace 'your_redirect_url' with the actual URL you want to redirect to
}

}
