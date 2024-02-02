<?php
defined("BASEPATH") or exit("No direct script access allowed");
class Authorization extends CI_Controller
{
    var $projectTitle = "Project Title";
    private function mainEmailConfig($to, $subject, $message, $cc = "", $attach = "")
    {
        try {
            $this->load->library("email");
            $config = [
                "protocol" => "smtp",
                "smtp_host" => "smtp.hostinger.com",
                "smtp_port" => 465,
                "smtp_user" => "developers@keywordhike.com",
                "smtp_pass" => "DevelopersTeam@#2023",
                "smtp_crypto" => "ssl",
                "mailtype" => "html",
                "crlf" => "\r\n",
                "newline" => "\r\n",
                "charset" => "utf-8",
                "wordwrap" => true,
            ];
            $this->email->initialize($config);
            $this->email->set_crlf("\r\n");
            $this->email->set_newline("\r\n");
            $this->email->from($config["smtp_user"]);
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
                echo $this->email->print_debugger();
                return false;
            }
        } catch (Exception $e) {
            echo "Email sending error: " . $e->getMessage();
            return false;
        }
    }
    private function sendactivation_code($email, $activation_codeEmail)
    {
        $getuser_name = $this->BaseModel->getData("login", ["user_id" => $email])->row()->user_name;
        $subject = "Verification Code - " . $activation_codeEmail . " Project Title";
        $output = "";
        $output =
            '<!DOCTYPE html>
        <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Project Title</title>
            <style type="text/css">
            body {
                margin: 0;
                padding: 0;
                min-width: 100% !important;
                background-color: #000;
                color: #ffffff;
            }
            .content {
                width: 100%;
                max-width: 600px;
                margin: 0 auto;
                background-color: #ffffff;
                color: #000000;
            }
            .header {
                background-color: #000;
                text-align: center;
                color: #ffffff;
            }
            .header img {
              height: 80px;
              padding: 1rem;
            }
            .inner-content {
                min-height: 120px;
                margin-top: 40px;
                margin-bottom: 40px;
                padding: 40px;
                background-color: #ffffff;
            }
            .otp-code {
                text-align: center;
              margin-top: 1rem;
            }
            .otp-value {
                font-weight: bold;
            }
            .greeting {
                font-weight: bold;
            }
            .instructions {
                margin-top: 10px;
            }
            .regards {
                text-align: left;
            }
            .footer {
                background: linear-gradient(#000, #000);
                text-align: center;
                color: #ffffff;
                height: 40px;
                line-height: 40px;
            }

            </style>
        </head>
        <body>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="header">
                <tr>
                    <td><img src="" height="100px" ></td>
                </tr>
            </table>
            <table class="content inner-content" align="center" cellpadding="0" cellspacing="0" border="0">

                                        <tr>
                                            <td colspan="2" class="greeting">Dear Mr. / Mrs. ' .
            $getuser_name .
            ',</td>
                </tr>
                <tr>
                    <td colspan="2" class="instructions">Please enter the given code to verify your account.</td>
                </tr>
              <tr>
                  <td><br></td>
              </tr>
              <tr  class="otp-code">
                <td><b>Verification Code  <span class="otp-value">: ' .
            $activation_codeEmail .
            '</span></b> </td>

                                    </tr>
                <tr><td><br></td></tr>
                <tr><td><br></td></tr>

                <tr>
                    <th class="regards">Regards</th>
                </tr>
                <tr>
                    <th class="regards">Project Title</th>
                </tr>
            </table>
            <table width="100%" class="footer">
                <tr>
                     <td>&copy; ' .
            date("Y") .
            ' Project Title. All rights reserved.</td>
                </tr>
            </table>
        </body>
        </html>';
        if ($this->mainEmailConfig($email, $subject, $output, "", "")) {
            return true;
        } else {
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
            $this->form_validation->set_rules("fullName", "Full Name", 'trim|required|min_length[3]|max_length[50]|regex_match[/^[A-Za-z\s]+$/]');
            $this->form_validation->set_rules("contactNo", "Contact No.", "trim|max_length[10]|min_length[10]");
            $this->form_validation->set_rules("email", "Email", "trim|required|valid_email|max_length[100]");
            $this->form_validation->set_rules("password", "password", "trim|required|min_length[8]|max_length[16]");
            if ($this->form_validation->run() === false) {
                $response = ["status" => "validation_errors", "message" => validation_errors()];
            } else {
                $user_name = $this->input->post("fullName");
                $email = $this->input->post("email");
                $contactNo = $this->input->post("contactNo");
                $password = hash("SHA512", $this->input->post("password"));
                $set = "1234567890";
                $activation_code = substr(str_shuffle($set), 0, 6);
                $cond = ["user_level" => $email, "user_level" => 2];
                $checkEmailDuplicate = $this->BaseModel->getData("login", $cond);
                if ($checkEmailDuplicate->num_rows() > 0) {
                    $response = ["status" => "error", "message" => "Email address is already in use."];
                } else {
                    $userData = [
                        "user_name" => $user_name,
                        "is_active" => 0,
                        "user_id" => $email,
                        "password" => $password,
                        "activation_code" => $activation_code,
                        "contact_no" => $contactNo,
                        "user_level" => 2,
                        "created_at" => date("Y-m-d H:i:s"),
                    ];
                    $insertResult = $this->BaseModel->insertData("login", $userData);
                    $insert_id = $this->db->insert_id();
                    if ($insertResult && $insert_id !== null) {
                        $response = ["status" => "success", "data" => $insert_id, "message" => "Signup successful! Verification code sent on the registered email address."];
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
    public function postSignIn()
    {
        $response = ["status" => "error", "message" => ""];
        if ($this->input->post()) {
            $this->form_validation->set_rules("email", "User Id", "trim|required");
            $this->form_validation->set_rules("password", "User password", "trim|required");
            if ($this->form_validation->run() == false) {
                $response = ["status" => "validation_errors", "message" => $this->form_validation->error_array()];
            } else {
                $user_id = $this->input->post("email");
                $password = hash("SHA512", $this->input->post("password"));
                $record = $this->BaseModel->getData("login", ["user_id" => $user_id]);
                if ($record->num_rows() == 0) {
                    $response["message"] = "This email is not registered please register yourself";
                } else {
                    $details = $record->row();
                    $dbuser_id = $details->user_id;
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
                                $userStatus = $details->is_active;
                                if ($userStatus == 0) {
                                    $response["data"] = $details->login_id;
                                    $response["status"] = "verify";
                                    $response["message"] = "User does not verified.";
                                } else {
                                    if ($userStatus != 1) {
                                        $response["message"] = "User does not active.";
                                    } else {
                                        $sessData = ["login_id" => $details->login_id, "user_name" => $details->user_name, "user_level" => $details->user_level, "user_id" => $details->user_id, "user_level" => $details->user_level];
                                   
                                        if ($details->user_level === '0') {
            
                                            $this->session->set_userdata("login", $sessData);
                                            AntiFixationInit();
                                            $this->session->salt = generateSalt();
                                            $this->load->helper("cookie");
                                            $duration = 30 * 60;
                                            set_cookie("AuthoToken", $this->session->salt, $duration);
                                            $this->BaseModel->updateData("login", ["wrong_attempt" => 0, "current_login_time" => date("Y-m-d H:i:s")], ["user_id" => $dbuser_id]);
                                            $response["status"] = "success";
                                            $response["user_level"] = $details->user_level;
                                            $response["message"] = "Redirect to dashboard......";
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
    public function resetpassword()
    {
        $data["title"] = $this->projectTitle . " : Reset password";
        $this->load->view("authorization/reset-password", $data);
    }
    public function verifyResetpassword($id)
    {
        $data["title"] = $this->projectTitle . " : Verify Reset password";
        $record = $this->BaseModel->getData("login", ["login_id" => $id]);
        if ($record->num_rows() == 0) {
            $this->session->set_flashdata("verified", "Your account is already created. Please log in");
            $this->load->view("authorization/sign-in", $data);
        } else {
            $details = $record->row();
            $data["user_id"] = $details->user_id;
            $set = "1234567890";
            $activation_code = substr(str_shuffle($set), 0, 6);
            $cond = ["user_id" => $details->user_id];
            $subject = "Verification Code - " . $activation_code . " Project Title";
            $output = "";
            $output =
                '<!DOCTYPE html>
                        <html>
                        <head>
                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                            <title>Project Title</title>
                            <style type="text/css">
                            body {
                                margin: 0;
                                padding: 0;
                                min-width: 100% !important;
                                background-color: #000;
                                color: #ffffff;
                            }
                            .content {
                                width: 100%;
                                max-width: 600px;
                                margin: 0 auto;
                                background-color: #ffffff;
                                color: #000000;
                            }
                            .header {
                                background-color: #000;
                                text-align: center;
                                color: #ffffff;
                            }
                            .header img {
                              height: 80px;
                              padding: 1rem;
                            }
                            .inner-content {
                                min-height: 120px;
                                margin-top: 40px;
                                margin-bottom: 40px;
                                padding: 40px;
                                background-color: #ffffff;
                            }
                            .otp-code {
                                text-align: center;
                              margin-top: 1rem;
                            }
                            .otp-value {
                                font-weight: bold;
                            }
                            .greeting {
                                font-weight: bold;
                            }
                            .instructions {
                                margin-top: 10px;
                            }
                            .regards {
                                text-align: left;
                            }
                            .footer {
                                background: linear-gradient(#000, #000);
                                text-align: center;
                                color: #ffffff;
                                height: 40px;
                                line-height: 40px;
                            }

                            </style>
                        </head>
                        <body>
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="header">
                                <tr>
                                    <td><img src="https://kecss.keywordhike.com/include/web/custom/KECSS_Logo.png" height="100px" ></td>
                                </tr>
                            </table>
                            <table class="content inner-content" align="center" cellpadding="0" cellspacing="0" border="0">

                                <tr>
                                    <td colspan="2" class="greeting">Dear Mr. / Mrs. ' .
                $details->user_name .
                ',</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="instructions">Please enter the given code to verify your account.</td>
                                </tr>
                              <tr>
                                  <td><br></td>
                              </tr>
                              <tr  class="otp-code">
                                <td><b>Verification Code  <span class="otp-value">: ' .
                $activation_code .
                '</span></b> </td>

                              </tr>

                               <tr><td><br></td></tr>
                                <tr><th class="regards">Regards</th></tr>
                                <tr>
                                    <th class="regards">Project Title</th>
                                </tr>
                            </table>
                            <table width="100%" class="footer">
                                <tr>
                                    <td>&copy; ' .
                date("Y") .
                ' Project Title. All rights reserved.</td>
                                </tr>
                            </table>
                        </body>
                        </html>';
            $sendactivation_code = $this->mainEmailConfig($details->user_id, $subject, $output);
            if ($sendactivation_code) {
                $updateactivation_code = $this->BaseModel->updateData("login", ["activation_code" => $activation_code], $cond);
                if ($updateactivation_code) {
                    $this->load->view("authorization/verify-reset-password", $data);
                } else {
                    throw new Exception("Failed to update activation code in the database");
                }
            } else {
                echo "server down";
            }
        }
    }
    public function verifyAccount($id)
    {
        $data["title"] = $this->projectTitle . " : Verify Account";
        try {
            $record = $this->BaseModel->getData("login", ["login_id" => $id]);
            if ($record->num_rows() == 0) {
                $this->session->set_flashdata("verified", "Your account is already created. Please log in");
                $this->load->view("authorization/sign-in", $data);
            } else {
                $details = $record->row();
                $data["user_id"] = $details->user_id;
                $set = "1234567890";
                $activation_code = substr(str_shuffle($set), 0, 6);
                $cond = ["user_id" => $details->user_id];
                $subject = "Verification Code - " . $activation_code . " Project Title";
                $output = "";
                $output =
                    '<!DOCTYPE html>
                            <html>
                            <head>
                                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                <title>Project Title</title>
                                <style type="text/css">
                                body {
                                    margin: 0;
                                    padding: 0;
                                    min-width: 100% !important;
                                    background-color: #000;
                                    color: #ffffff;
                                }
                                .content {
                                    width: 100%;
                                    max-width: 600px;
                                    margin: 0 auto;
                                    background-color: #ffffff;
                                    color: #000000;
                                }
                                .header {
                                    background-color: #000;
                                    text-align: center;
                                    color: #ffffff;
                                }
                                .header img {
                                  height: 80px;
                                  padding: 1rem;
                                }
                                .inner-content {
                                    min-height: 120px;
                                    margin-top: 40px;
                                    margin-bottom: 40px;
                                    padding: 40px;
                                    background-color: #ffffff;
                                }
                                .otp-code {
                                    text-align: center;
                                  margin-top: 1rem;
                                }
                                .otp-value {
                                    font-weight: bold;
                                }
                                .greeting {
                                    font-weight: bold;
                                }
                                .instructions {
                                    margin-top: 10px;
                                }
                                .regards {
                                    text-align: left;
                                }
                                .footer {
                                    background: linear-gradient(#000, #000);
                                    text-align: center;
                                    color: #ffffff;
                                    height: 40px;
                                    line-height: 40px;
                                }

                                </style>
                            </head>
                            <body>
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="header">
                                    <tr>
                                        <td><img src="https://kecss.keywordhike.com/include/web/custom/KECSS_Logo.png" height="100px" ></td>
                                    </tr>
                                </table>
                                <table class="content inner-content" align="center" cellpadding="0" cellspacing="0" border="0">

                                                            <tr>
                                                                <td colspan="2" class="greeting">Dear Mr. / Mrs. ' .
                    $details->user_name .
                    ',</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="instructions">Please enter the given code to verify your account.</td>
                                    </tr>
                                  <tr>
                                      <td><br></td>
                                  </tr>
                                  <tr  class="otp-code">
                                    <td><b>Verification Code  <span class="otp-value">: ' .
                    $activation_code .
                    '</span></b> </td></tr>


                               <tr><td><br></td></tr>

                                    <tr>
                                        <th class="regards">Regards</th>
                                    </tr>
                                    <tr>
                                        <th class="regards">Project Title</th>
                                    </tr>
                                </table>
                                <table width="100%" class="footer">
                                    <tr>
                                         <td>&copy; ' .
                    date("Y") .
                    ' Project Title. All rights reserved.</td>
                                    </tr>
                                </table>
                            </body>
                            </html>';
                $sendactivation_code = $this->mainEmailConfig($details->user_id, $subject, $output);
                if ($sendactivation_code) {
                    $updateactivation_code = $this->BaseModel->updateData("login", ["activation_code" => $activation_code], $cond);
                    if ($updateactivation_code) {
                        $this->load->view("authorization/verify-account", $data);
                    } else {
                        throw new Exception("Failed to update activation code in the database");
                    }
                } else {
                    return redirect('server-down');
                }
            }
        } catch (Exception $e) {
            log_message("error", $e->getMessage());
        }
    }
    public function postResetVerifyAccount()
    {
        $response = ["status" => "error", "message" => ""];
        if ($this->input->post()) {
            $this->form_validation->set_rules("Newpassword", "New password", "required");
            $this->form_validation->set_rules("Confirmpassword", "Confirm password", "required");
            if ($this->form_validation->run() == false) {
                $response["status"] = "error";
                $response["message"] = validation_errors();
            } elseif ($this->input->post("Newpassword") != $this->input->post("Confirmpassword")) {
                $response["status"] = "error";
                $response["message"] = "New password and Confirm password do not match.";
            } else {
                $cond = ["activation_code" => $this->input->post("activation_code")];
                $checkVerificationCode = $this->BaseModel->getData("login", $cond);
                if ($checkVerificationCode->num_rows() > 0) {
                    if (!empty($this->input->post("Confirmpassword"))) {
                        $password = hash("SHA512", $this->input->post("Confirmpassword"));
                    } else {
                        $response["status"] = "error";
                        $response["message"] = "Confirm password is required.";
                    }
                    if (!empty($this->input->post("Newpassword"))) {
                        $newpassword = hash("SHA512", $this->input->post("Newpassword"));
                    } else {
                        $response["status"] = "error";
                        $response["message"] = "New password is required.";
                    }
                    if (!empty($password) && !empty($newpassword)) {
                        $cond = ["user_id" => $this->input->post("user_id")];
                        $login_data = $this->BaseModel->getData("login", $cond);
                        if ($login_data->num_rows() > 0) {
                            $response_update = $this->BaseModel->updateData("login", ["password" => $newpassword], $cond);
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
                    $response["message"] = "Please enter correct email ID.";
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
            $this->form_validation->set_rules("Newpassword", "New password", "required");
            $this->form_validation->set_rules("Confirmpassword", "Confirm password", "required");
            if ($this->form_validation->run() == false) {
                $response["status"] = "error";
                $response["message"] = validation_errors();
            }
            if ($this->input->post("Newpassword") != $this->input->post("Confirmpassword")) {
                $response["status"] = "error";
                $response["message"] = "New password And Retype New password does not matched.";
            } else {
                $cond = ["user_id" => $this->input->post("email")];
                $checkVerificationCode = $this->BaseModel->getData("login", $cond);
                if ($checkVerificationCode->num_rows() > 0) {
                    $response["status"] = "success";
                    $response["data"] = $checkVerificationCode->row()->login_id;
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
            $this->form_validation->set_rules("activation_code", "Activation Code", "trim|required|min_length[6]|max_length[6]");
            $this->form_validation->set_rules("user_id", "user_id", "trim|required");
            if ($this->form_validation->run() === false) {
                $response = ["status" => "validation_errors", "message" => validation_errors()];
            } else {
                $activation_code = $this->input->post("activation_code");
                $user_id = $this->input->post("user_id");
                $cond = ["user_id" => $this->input->post("user_id"), "activation_code" => $activation_code];
                $checkVerificationCode = $this->BaseModel->getData("login", $cond);
                if ($checkVerificationCode->num_rows() > 0) {
                    try {
                        $cond = ["user_id" => $user_id];
                        $updateData = ["is_active" => 1];
                        $updateUserActivation = $this->BaseModel->updateData("login", $updateData, $cond);
                        if ($updateUserActivation) {
                            $response = ["status" => "success", "message" => "User verified successfully."];
                            $details = $checkVerificationCode->row();
                            $sessData = ["login_id" => $details->login_id, "user_name" => $details->user_name, "user_level" => $details->user_level, "user_id" => $details->user_id, "user_level" => $details->user_level];
                            if ($details->user_level) {
                                $this->session->set_userdata("login", $sessData);
                                AntiFixationInit();
                                $this->session->salt = generateSalt();
                                $this->load->helper("cookie");
                                $duration = 30 * 60;
                                set_cookie("AuthoToken", $this->session->salt, $duration);
                                $this->BaseModel->updateData("login", ["wrong_attempt" => 0, "current_login_time" => date("Y-m-d H:i:s")], $cond);
                                $response["status"] = "success";
                                $response["user_level"] = $details->user_level;
                                $response["message"] = "Redirect to dashboard......";
                            } else {
                                $response["message"] = "User does not have the required privilege.";
                            }
                        } else {
                            $response = ["status" => "error", "message" => "Failed. Please try again later."];
                        }
                    } catch (Exception $e) {
                        $response = ["status" => "error", "message" => "Failed. Please try again later."];
                    }
                } else {
                    $response = ["status" => "error", "message" => "Invalid Verification code."];
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
        $data["title"] = $this->projectTitle . " : Verify Reset password";
        $record = $this->BaseModel->getData("login", ["user_id" => $this->input->post("user_id")]);
        if ($record->num_rows() == 0) {
            $this->session->set_flashdata("verified", "Your account is already created. Please log in");
            $this->load->view("authorization/sign-in", $data);
        } else {
            $details = $record->row();
            $data["user_id"] = $details->user_id;
            $set = "1234567890";
            $activation_code = substr(str_shuffle($set), 0, 6);
            $cond = ["user_id" => $details->user_id];
            $subject = "Verification Code - " . $activation_code . " Project Title";
            $output = "";
            $output =
                '<!DOCTYPE html>
                        <html>
                        <head>
                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                            <title>Project Title</title>
                            <style type="text/css">
                            body {

                                margin: 0;

                                padding: 0;

                                min-width: 100% !important;

                                background-color: #eaedf7;

                                color: #ffffff;

                                }

                                .content {

                                width: 100%;

                                max-width: 600px;

                                margin: 0 auto;

                                background-color: #351C42;

                                color: #000000;

                                }

                                .header {

                                background-color: #351C42;

                                text-align: center;

                                color: #ffffff;

                                }

                                .header img {

                                height: 80px;

                                padding: 1rem;

                                }

                                .inner-content {

                                min-height: 120px;

                                margin-top: 40px;

                                margin-bottom: 40px;

                                padding: 40px;

                                background-color: #ffffff;

                                  border-radius: 0.2rem;

                                  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

                                }

                                .otp-code {

                                text-align: center;

                                margin-top: 1rem;

                                }

                                .otp-value {

                                font-weight: bold;

                                }

                                .greeting {

                                font-weight: bold;

                                }

                                .instructions {

                                margin-top: 10px;

                                }

                                .regards {

                                text-align: left;

                                }

                                .footer {

                                background: linear-gradient(#351C42, #351C42);

                                text-align: center;

                                color: #ffffff;

                                height: 40px;

                                line-height: 40px;

                                }


                            </style>
                        </head>
                        <body>
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="header">
                                <tr>
                                    <td><img src="https://kecss.keywordhike.com/include/web/custom/KECSS_Logo.png" height="100px" ></td>
                                </tr>
                            </table>
                            <table class="content inner-content" align="center" cellpadding="0" cellspacing="0" border="0">

                                                        <tr>
                                                            <td colspan="2" class="greeting">Dear Mr. / Mrs. ' .
                $details->user_name .
                ',</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="instructions">Please enter the given code to verify your account.</td>
                                </tr>
                              <tr>
                                  <td><br></td>
                              </tr>
                              <tr  class="otp-code">
                                <td><b>Verification Code  <span class="otp-value">: ' .
                $activation_code .
                '</span></b> </td>

                                                    </tr>
                               <tr><td><br></td></tr>

                                <tr>
                                    <th class="regards">Regards</th>
                                </tr>
                                <tr>
                                    <th class="regards">Project Title</th>
                                </tr>
                            </table>
                            <table width="100%" class="footer">
                                <tr>
                                     <td>&copy; ' .
                date("Y") .
                ' Project Title. All rights reserved.</td>
                                </tr>
                            </table>
                        </body>
                        </html>';
            $sendactivation_code = $this->mainEmailConfig($details->user_id, $subject, $output);
            if ($sendactivation_code) {
                $updateactivation_code = $this->BaseModel->updateData("login", ["activation_code" => $activation_code], $cond);
                if ($updateactivation_code) {
                    $response = ["status" => "success", "message" => "Verification code send to registered Email ID."];
                    $this->output->set_content_type("application/json");
                    echo json_encode($response);
                } else {
                    throw new Exception("Failed to update activation code in the database");
                }
            } else {
                echo "server down";
            }
        }
    }
}
