<?php
defined('BASEPATH') or exit('No direct script access allowed');
class TeamManagementController extends CI_Controller
{
    var $projectTitle = "Sangam Initiative";
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
    private function checkUserLevel($allowedLevels)
    {
        $userLevel = $this->session->login["user_level"];
        if (!in_array($userLevel, $allowedLevels)) {
            $this->load->driver("cache");
            $this->session->sess_destroy();
            $this->cache->clean();
            return redirect("login");
        }
    }
    public function team($action = null, $user_id = null)
    {
        $this->checkUserLevel([2]);
        $data["title"] = $action . " Team : " . $this->projectTitle;
        $data['checkTeamCreated'] = $this->BaseModel->getData('teams',['team_owner_id'=>$this->session->login['user_id']])->row();
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
                    $query = $this->BaseModel->deleteData("login", ["user_id" => $user_id]);
                    if ($query) {
                        $response = ["status" => "success", "message" => "The user has been successfully deleted."];
                    } else {
                        $response = ["status" => "error", "message" => "Unable to delete the user. Please try again later."];
                    }
                    if ($this->input->is_ajax_request()) {
                        $this->output->set_content_type("application/json");
                        echo json_encode($response);
                        exit();
                    } else {
                    }
                } else {
                    $response = ["status" => "error", "message" => "Invalid user ID. Please provide a valid user ID."];
                    if ($this->input->is_ajax_request()) {
                        $this->output->set_content_type("application/json");
                        echo json_encode($response);
                        exit();
                    } else {
                    }
                }
                break;
            default:
                $data["page_name"] = "pages/team";
                break;
        }
        $this->load->view("component/index", $data);
    }
    public function postCreateTeam()
    {
      if ($this->input->method() === "post") {
          $this->form_validation->set_rules("team_name", "team name", 'trim|required');
          $this->form_validation->set_rules("team_description", "team description", 'trim|required');
          if ($this->form_validation->run() === false) {
              $response = ["status" => "error", "message" => validation_errors()];
          } else {
              $cond = ["team_name" => $this->input->post("team_name"), "status" => 1];
              $checkEmailDuplicate = $this->BaseModel->getData("teams", $cond);
              if ($checkEmailDuplicate->num_rows() > 0) {
                  $response = ["status" => "error", "message" => "team name is already in use."];
              } else {
                  $postData = [
                      'team_name' => $this->input->post('team_name'),
                      'team_description' => $this->input->post('team_description'),
                      'status'=>1,
                      'team_owner_id'=>$this->session->login['user_id'],
                      'creation_date' => date('Y-m-d H:i:s'),
                  ];
                  $insertResult = $this->BaseModel->insertData("teams", $postData);
                  $inserted_Id = $this->db->insert_id();
                  $team_id = "TM" . date("Y") . str_pad($inserted_Id, 4, "0", STR_PAD_LEFT);
                  $updateData = ["team_custom_id" => $team_id];
                  $updateCondition = ["team_id" => $inserted_Id];
                  $updateQuery = $this->BaseModel->updateData("teams", $updateData, $updateCondition);
                  if ($updateQuery) {
                      $response = ["status" => "success", "message" => "Your team created successfully."];
                  } else {
                      $response = ["status" => "error", "message" => "Faild to create a team. Try again"];
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
    public function postUpdateTeam()
    {
      if ($this->input->method() === "post") {
          $this->form_validation->set_rules("team_custom_id", "team_custom_id", 'trim|required');
          if ($this->form_validation->run() === false) {
              $response = ["status" => "error", "message" => validation_errors()];
          } else {
            $team_description = $this->input->post('team_description');
            $other_can_join = $this->input->post('other_can_join');
            $team_custom_id = $this->input->post('team_custom_id');
            $updateData = ["team_description" => $team_description,'other_can_join'=>$other_can_join,];
            $updateCondition = ["team_custom_id" => $team_custom_id];
            $updateQuery = $this->BaseModel->updateData("teams", $updateData, $updateCondition);
            if ($updateQuery) {
                $response = ["status" => "success", "message" => "Your team details updated successfully."];
            } else {
                $response = ["status" => "error", "message" => "Faild to updated a team details. Try again"];
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
}
?>
