<?php
defined("BASEPATH") or exit("No direct script access allowed");
class Authorization extends CI_Controller
{
    var $projectTitle = "Sangam Initiative";
    private function mainEmailConfig($to, $subject, $message, $cc = "", $attach = "")
    {
        try {
            $query = $this->BaseModel->getData('email_config', ['is_active' => 1])->row();
            if ($query) {
                $this->load->library("email");
                $config = [
                    "protocol" => $query->protocol,
                    "smtp_host" => $query->smtp_host,
                    "smtp_port" => $query->smtp_port,
                    "smtp_user" => $query->smtp_user,
                    "smtp_pass" => $query->smtp_pass,
                    "smtp_crypto" => $query->smtp_crypto,
                    "mailtype" => $query->mailtype,
                    "crlf" => $query->crlf,
                    "newline" => $query->newline,
                    "charset" => $query->charset,
                    "wordwrap" => $query->wordwrap,
                ];
                $this->email->initialize($config);
                $this->email->set_crlf($query->crlf);
                $this->email->set_newline($query->newline);

                $this->email->from($query->smtp_user);

                $this->email->to($to);

                if ($cc !== "") {
                    $this->email->cc($cc);
                }

                $this->email->subject($subject);
                $this->email->message($message);

                if ($attach !== "") {
                    $this->email->attach($attach);
                }

                if ($this->email->send()) {
                    return true;
                } else {
                    // echo $this->email->print_debugger();
                    return false;
                }
            } else {
                // echo "No active email configuration found.";
                return false;
            }
        } catch (Exception $e) {
            // echo "Email sending error: " . $e->getMessage();
            return false;
        }
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->Model("BaseModel");
        $this->load->helper("common_helper");
        date_default_timezone_set("Asia/kolkata");
    }
    public function signUp()
    {
        $data["title"] = $this->projectTitle . " : Sign Up";
        $this->load->view("authorization/sign-up", $data);
    }
    public function signIn()
    {
        $data["title"] = $this->projectTitle . " : Sign In";
        $this->load->view("authorization/sign-in", $data);
    }
    public function serverDown()
    {
        $data["title"] = $this->projectTitle . " : Server Down";
        $this->load->view("authorization/server-down", $data);
    }
    public function postSignUp()
    {
        if ($this->input->method() === "post") {
            $this->form_validation->set_rules("register_as", "register as", 'trim|required|min_length[3]|max_length[50]');
            $this->form_validation->set_rules("datOfBirth", "date of birth", 'trim|required');
            $this->form_validation->set_rules("fullName", "Full Name", 'trim|required|min_length[3]|max_length[50]');
            // $this->form_validation->set_rules("contactNo", "Contact No.", "trim|max_length[10]|min_length[10]|is_unique[login.contact_no]");
            // $this->form_validation->set_rules("email", "Email", "trim|required|valid_email|max_length[100]|is_unique[login.email]");
            $this->form_validation->set_rules("password", "password", "trim|required|min_length[8]|max_length[16]");
            $this->form_validation->set_rules("coreCompetencies", "core competency", 'trim');
            if ($this->input->post('register_as') === 'Individual') {
                $this->form_validation->set_rules("experience", "experience", 'trim|required|min_length[1]');
            }
            if ($this->input->post('register_as') === 'Organization') {
                $this->form_validation->set_rules("OrganizationName", "Organization Name", 'trim|required|min_length[3]');
                $this->form_validation->set_rules("potentialInterestAreas[]", "Potential Interest Areas", 'trim|required');
                $this->form_validation->set_rules("officeAddress", "office address", 'trim|required|min_length[3]|max_length[50]');
                $this->form_validation->set_rules("organisationHQAddress", "organisation HQ address", 'trim|min_length[3]|max_length[50]');
                $this->form_validation->set_rules("websiteURL", "Website URL", 'trim|valid_url|min_length[3]|max_length[50]');
            }
            if ($this->form_validation->run() === false) {
                $response = ["status" => "validation_errors", "message" => validation_errors()];
            } else {
                $user_name = $this->input->post("fullName");
                $email = $this->input->post("email");
                $contactNo = $this->input->post("contactNo");
                $password = hash("SHA512", $this->input->post("password"));
                $set = "1234567890";
                $activation_code = substr(str_shuffle($set), 0, 6);
                $cond = ["email" => $email, "user_level" => 2];
                $checkEmailDuplicate = $this->BaseModel->getData("login", $cond);
                if ($checkEmailDuplicate->num_rows() > 0) {
                    $response = ["status" => "error", "message" => "Email address is already in use."];
                } else {
                    $postData = [
                        'register_as' => $this->input->post('register_as'),
                        'date_of_birth' => $this->input->post('datOfBirth'),
                        'user_name' => $this->input->post('fullName'),
                        'full_name' => $this->input->post('fullName'),
                        'contact_no' => $this->input->post('contactNo'),
                        'email' => $this->input->post('email'),
                        'password' => $password,
                        'core_competency' => $this->input->post('coreCompetencies'),
                        'user_level' => 2,
                        'created_at' => date('Y-m-d H:i:s'),
                    ];
                    if ($this->input->post('register_as') === 'Individual') {
                        $postData['experience'] = $this->input->post('experience');
                    } elseif ($this->input->post('register_as') === 'Organization') {
                        $postData['organization_name'] = $this->input->post('OrganizationName');
                        $postData['potential_interest_areas'] = json_encode($this->input->post('potentialInterestAreas'));
                        $postData['office_address'] = $this->input->post('officeAddress');
                        $postData['organisation_hq_address'] = $this->input->post('organisationHQAddress');
                        $postData['website_url'] = $this->input->post('websiteURL');
                    }
                    $insertResult = $this->BaseModel->insertData("login", $postData);
                    $inserted_Id = $this->db->insert_id();
                    $user_id = "USR" . date("Y") . str_pad($inserted_Id, 4, "0", STR_PAD_LEFT);
                    $updateData = ["user_id" => $user_id];
                    $updateCondition = ["login_id" => $inserted_Id];
                    $updateQuery = $this->BaseModel->updateData("login", $updateData, $updateCondition);
                    if ($updateQuery) {
                        $response = ["status" => "success", "email" => $email, 'user_id' => $user_id, "message" => "Registered successful! A verification code has been sent to the email address you provided."];
                    } else {
                        $response = ["status" => "error", "message" => "Signup failed. Please try again later."];
                    }
                }
            }
            $this->output->set_content_type("application/json");
            echo json_encode($response);
        } else {
            $response = ["status" => "error", "message" => "Invalid request method."];
            $this->output->set_content_type("application/json");
            echo json_encode($response);
        }
    }
    public function checkEmail()
    {
        try {
            $email = $this->input->post('email');
            $record = $this->BaseModel->getData("login", ["email" => $email])->num_rows();
            if ($record>0) {
                echo "exists";
            } else {
  
                echo "not_exists";
            }
        } catch (Exception $e) {
            log_message('error', 'Error while checking email: ' . $e->getMessage());
            echo "error";
        }
    }

    public function postSignIn()
    {
        $response = ["status" => "error", "message" => ""];
        if ($this->input->post()) {
            $this->form_validation->set_rules("login_id", "User Id", "trim|required");
            $this->form_validation->set_rules("password", "User password", "trim|required");
            if ($this->form_validation->run() == false) {
                $response = ["status" => "validation_errors", "message" => $this->form_validation->error_array()];
            } else {
                $user_id = $this->input->post("login_id");
                $password = hash("SHA512", $this->input->post("password"));

                if (filter_var($user_id, FILTER_VALIDATE_EMAIL)) {
                    $record = $this->BaseModel->getData("login", ["email" => $user_id]);
                } else {
                    $record = $this->BaseModel->getData("login", ["user_id" => $user_id]);
                }
                if ($record->num_rows() == 0) {
                    $response["message"] = "This email is not registered please register yourself";
                } else {
                    $details = $record->row();

                    if (filter_var($user_id, FILTER_VALIDATE_EMAIL)) {
                        $dbuser_id = $details->email;
                    } else {
                        $dbuser_id = $details->user_id;
                    }
                    $dbpassword = $details->password;
                    $userEnterpassword = hash("SHA512", $password);
                    $encapassword = hash("SHA512", $dbpassword);
                    $wrong_attempt = $details->wrong_attempt;
                    if ($encapassword != $userEnterpassword) {
                        $response["message"] = "Please enter correct password.";
                        if ($wrong_attempt >= 5) {
                            $response["message"] = "Your login attempts have exceeded the maximum limit. Please reset your password to regain access.";
                        } else {
                            $count = $wrong_attempt + 1;
                            $this->BaseModel->updateData("login", ["wrong_attempt" => $count], ["user_id" => $dbuser_id]);
                        }
                    } else {
                        if ($wrong_attempt >= 5) {
                            $response["message"] = "Your login attempts have exceeded the maximum limit. Please reset your password to regain access.";
                        } else {
                            if ($user_id != $dbuser_id) {
                                $response["message"] = "Please enter correct user name & password.";
                            } else {
                                $userStatus = $details->is_verified;
                                if ($userStatus === 0) {
                                    $response["data"] = $details->user_id;
                                    $response["status"] = "verify";
                                    $response["message"] = "User does not verified.";
                                } else {
                                    if ($userStatus != 1) {
                                        $response["message"] = "User does not active.";
                                    } else {
                                        $sessData = ["login_id" => $details->login_id, "user_name" => $details->user_name, "user_level" => $details->user_level, "user_id" => $details->user_id, "user_level" => $details->user_level];
                                        if ($details->user_level) {
                                            $this->session->set_userdata("login", $sessData);
                                            AntiFixationInit();
                                            $this->session->salt = generateSalt();
                                            $this->load->helper("cookie");
                                            $duration = 30 * 60;
                                            set_cookie("AuthoToken", $this->session->salt, $duration);
                                            $this->BaseModel->updateData("login", ["wrong_attempt" => 0, "current_login_time" => date("Y-m-d H:i:s")], ["user_id" => $dbuser_id]);
                                            $response["status"] = "success";
                                            $response["user_level"] = $details->user_level;
                                            $response["message"] = "";
                                        } else {
                                            $response["message"] = "User does not have the required privilege.";
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        header("Content-Type: application/json");
        echo json_encode($response);
    }

    public function forgotPassword()
    {
        $data["title"] = $this->projectTitle . " : Forgot Password";
        $this->load->view("authorization/forget-password", $data);
    }
    public function verifyResetPassword($id)
    {
        $data["title"] = $this->projectTitle . " : Verify Reset password";
        try {
            $record = $this->BaseModel->getData("login", ["user_id" => $id]);
            if ($record->num_rows() == 0) {
                $this->session->set_flashdata("verified", "Your account is already created. Please log in");
                return redirect('authorization/sign-in', $data);
            }
            $details = $record->row();
            $user_id = $details->user_id;
            $data['user_id'] = $details->user_id;
            $data['email'] = $details->email;
            $verification_code = $this->generateVerificationCode();
            $cond = ["user_id" => $user_id];
            $sendVerificationCode = $this->sendEmailVerificationCode($details->email, $details->user_name, $verification_code);
            if (!$sendVerificationCode) {
                return redirect('outgoing-server-down');
            }
            $updateActivationCode = $this->BaseModel->updateData("login", ["activation_code" => $verification_code], $cond);
            if (!$updateActivationCode) {
                throw new Exception("Failed to update activation code in the database");
            }
            $this->load->view("authorization/verify-reset-password", $data);
        } catch (Exception $e) {
            log_message("error", $e->getMessage());
            $this->session->set_flashdata("error", "An error occurred during password reset verification. Please try again later.");
            return redirect('outgoing-server-down');
        }
    }
    public function verifyAccount($user_id)
    {
        $data["title"] = "Verify Account :" . $this->projectTitle;
        try {
            $record = $this->BaseModel->getData("login", ["user_id" => $user_id]);
            if ($record->num_rows() === 0) {
                $this->session->set_flashdata("error", "It seems that your ID was not found. Please register correctly");
                return redirect('authorization/registration', $data);
            }
            $details = $record->row();
            $user_id = $details->user_id;
            $verification_code = $this->generateVerificationCode();
            $cond = ["user_id" => $user_id];
            $sendVerificationCode = $this->sendEmailVerificationCode($details->email, $details->user_name, $verification_code);
            if (!$sendVerificationCode) {
                return redirect('outgoing-server-down');
            }
            $updateActivationCode = $this->BaseModel->updateData("login", ["activation_code" => $verification_code], $cond);
            if (!$updateActivationCode) {
                throw new Exception("Failed to update activation code in the database");
            }
            $data["user_id"] = $user_id;
            $data["email"] = $details->email;
            $this->load->view("authorization/verify-account", $data);
        } catch (Exception $e) {
            log_message("error", $e->getMessage());
            $this->session->set_flashdata("error", "An error occurred during account verification. Please try again later.");
            return redirect('outgoing-server-down');
        }
    }
    public function postForgotVerifyAccount()
    {
        $response = ["status" => "error", "message" => ""];
        if ($this->input->post()) {
            $this->form_validation->set_rules("NewPassword", "New password", "trim|required");
            $this->form_validation->set_rules("ConfirmPassword", "Confirm password", "trim|required");

            if ($this->form_validation->run() == false) {
                $response["status"] = "error";
                $response["message"] = validation_errors();
            } elseif ($this->input->post("NewPassword") != $this->input->post("ConfirmPassword")) {
                $response["status"] = "error";
                $response["message"] = "New password and Confirm password do not match.";
            } else {
                $cond = ["activation_code" => $this->input->post("activationCode")];
                $checkVerificationCode = $this->BaseModel->getData("login", $cond);
                if ($checkVerificationCode->num_rows() > 0) {
                    if (!empty($this->input->post("ConfirmPassword"))) {
                        $password = hash("SHA512", $this->input->post("ConfirmPassword"));
                    } else {
                        $response["status"] = "error";
                        $response["message"] = "Confirm password is required.";
                    }
                    if (!empty($this->input->post("NewPassword"))) {
                        $NewPassword = hash("SHA512", $this->input->post("NewPassword"));
                    } else {
                        $response["status"] = "error";
                        $response["message"] = "New password is required.";
                    }
                    if (!empty($password) && !empty($NewPassword)) {
                        $cond = ["user_id" => $this->input->post("userId")];
                        $login_data = $this->BaseModel->getData("login", $cond);
                        if ($login_data->num_rows() > 0) {
                            $response_update = $this->BaseModel->updateData("login", ["password" => $NewPassword], $cond);
                            if ($response_update) {
                                $response["status"] = "success";
                                $response["message"] = "password has been changed.";
                            } else {
                                $response["status"] = "error";
                                $response["message"] = "Failed to change password.";
                            }
                        } else {
                            $response["status"] = "error";
                            $response["message"] = "Failed to change password, Current password does not match.";
                        }
                    }
                } else {
                    $response["status"] = "error";
                    $response["message"] = "Please enter correct verification code.";
                }
            }
        } else {
            $response["message"] = "No POST data received.";
        }
        header("Content-Type: application/json");
        echo json_encode($response);
    }
    public function postForgotpassword()
    {
        $response = ["status" => "error", "message" => ""];
        if ($this->input->post()) {
            $this->form_validation->set_rules("NewPassword", "New password", "required");
            $this->form_validation->set_rules("ConfirmPassword", "Confirm password", "required");
            if ($this->form_validation->run() == false) {
                $response["status"] = "error";
                $response["message"] = validation_errors();
            }
            if ($this->input->post("NewPassword") != $this->input->post("ConfirmPassword")) {
                $response["status"] = "error";
                $response["message"] = "New password And Retype New password does not matched.";
            } else {
                $cond = ["email" => $this->input->post("email")];
                $checkVerificationCode = $this->BaseModel->getData("login", $cond);
                if ($checkVerificationCode->num_rows() > 0) {
                    $response["status"] = "success";
                    $response["data"] = $checkVerificationCode->row()->user_id;
                    $response["message"] = ".";
                } else {
                    $response["status"] = "error";
                    $response["message"] = "Please enter correct email Id.";
                }
            }
        } else {
            $response["message"] = "No POST data received.";
        }
        header("Content-Type: application/json");
        echo json_encode($response);
    }
    public function postVerifyAccount()
    {
        if ($this->input->method() === "post") {
            $this->form_validation->set_rules("activation_code", "Activation Code", "trim|required|exact_length[6]");
            $this->form_validation->set_rules("user_id", "User ID", "trim|required");
            if ($this->form_validation->run() === false) {
                $response = ["status" => "validation_errors", "message" => validation_errors()];
            } else {
                $activation_code = $this->input->post("activation_code");
                $user_id = $this->input->post("user_id");
                $cond = ["user_id" => $user_id, "activation_code" => $activation_code];
                $checkVerificationCode = $this->BaseModel->getData("login", $cond);
                if ($checkVerificationCode->num_rows() > 0) {
                    $updateData = ["is_active" => 1, 'is_verified' => 1];
                    $updateCond = ["user_id" => $user_id];
                    $updateUserActivation = $this->BaseModel->updateData("login", $updateData, $updateCond);
                    if ($updateUserActivation) {
                        $response = ["status" => "success", "message" => "User verified successfully."];
                        $details = $checkVerificationCode->row();
                        $sessData = ["login_id" => $details->login_id, "user_name" => $details->user_name, "user_id" => $details->user_id, "user_level" => $details->user_level];
                        if ($details->user_level) {
                            $this->sendEmailVerified($details->email, $details->user_name, $details->user_id, $details->full_name, $details->contact_no, $details->register_as);
                            $this->session->set_userdata("login", $sessData);
                            AntiFixationInit();
                            $this->session->salt = generateSalt();
                            $this->load->helper("cookie");
                            $duration = 30 * 60;
                            set_cookie("AuthoToken", $this->session->salt, $duration);
                            $this->BaseModel->updateData("login", ["wrong_attempt" => 0, "current_login_time" => date("Y-m-d H:i:s")], $updateCond);
                            $response["user_level"] = $details->user_level;
                            $response["message"] = "";
                        } else {
                            $response["message"] = "User does not have the required privilege.";
                        }
                    } else {
                        $response = ["status" => "error", "message" => "Failed to update user activation status. Please try again later."];
                    }
                } else {
                    $response = ["status" => "error", "message" => "Invalid verification code."];
                }
            }
        } else {
            $response = ["status" => "error", "message" => "Invalid request method."];
        }
        $this->output->set_content_type("application/json");
        echo json_encode($response);
    }
    public function resendOTP()
    {
        if ($this->input->method() === "post") {
            try {
                if (!$this->input->post("user_id")) {
                    throw new Exception("User ID is required in the POST data");
                }

                $user_id = $this->input->post("user_id");
                $record = $this->BaseModel->getData("login", ["user_id" => $user_id]);

                // Check if user record exists
                if ($record->num_rows() == 0) {
                    $this->session->set_flashdata("verified", "Your account is already created. Please log in");
                    $this->load->view("authorization/sign-in", ["title" => $this->projectTitle . " : Verify Reset password"]);
                    return;
                }
                $details = $record->row();
                $user_id = $details->user_id;
                $verification_code = $this->generateVerificationCode();
                $cond = ["user_id" => $user_id];
                $sendVerificationCode = $this->sendEmailVerificationCode($details->email, $details->user_name, $verification_code);
                if ($sendVerificationCode) {
                    $updateVerificationCode = $this->BaseModel->updateData("login", ["activation_code" => $verification_code], $cond);
                    if ($updateVerificationCode) {
                        $response = ["status" => "success", "message" => "Verification code sent to registered Email ID."];
                        $this->output->set_content_type("application/json")->set_output(json_encode($response));
                        return;
                    } else {
                        throw new Exception("Failed to update activation code in the database");
                    }
                } else {
                    throw new Exception("Failed to send activation code. Please try again later.");
                }
            } catch (Exception $e) {
                $response = ["status" => "error", "message" => $e->getMessage()];
                $this->output->set_content_type("application/json")->set_output(json_encode($response));
            }
        }
    }
    private function generateVerificationCode()
    {
        $set = "1234567890";
        return substr(str_shuffle($set), 0, 6);
    }
    private function sendEmailVerificationCode($email, $user_name, $verification_code)
    {
        $templateFile = FCPATH . 'include/email/registration/temp_email_format.html';
        $subject = "Registration Verification Code for 'Digital Twin: Sangam' Initiative";
        $messageBody = file_get_contents($templateFile);
        $placeholders = ['{user_name}', '{verification_code}'];
        $values = [$user_name, $verification_code];
        $messageBody = str_replace($placeholders, $values, $messageBody);
        return $this->mainEmailConfig($email, $subject, $messageBody, "", "");
    }
    private function sendEmailVerified($email, $user_name, $registration_id, $full_name, $contact_number, $registered_as)
    {
        $templateFile = FCPATH . 'include/email/registration/temp_email_verified_format.html';
        $subject = "Welcome to 'Digital Twin: Sangam Initiative!'";
        $messageBody = file_get_contents($templateFile);
        $placeholders = ['{user_name}', '{registration_id}', '{full_name}', '{email_address}', '{contact_number}', '{registered_as}'];
        $values = [$user_name, $registration_id, $full_name, $email, $contact_number, $registered_as];
        $messageBody = str_replace($placeholders, $values, $messageBody);
        return $this->mainEmailConfig($email, $subject, $messageBody, "", "");
    }
}
