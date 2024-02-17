<?php
defined('BASEPATH') or exit('No direct script access allowed');
class BaseController extends CI_Controller
{
    var $projectTitle = "Sangam Initiative";
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BaseModel');
        $this->load->helper('common_helper');
        date_default_timezone_set('Asia/Kolkata');
        $ipAddress = $this->input->ip_address();
        $userAgent = $this->input->user_agent();
        if ($this->BaseModel->isUniqueVisitor($ipAddress, $userAgent)) {
            $this->BaseModel->insertVisitor($ipAddress, $userAgent);
        }
    }
    public function index()
    {
        $data['title'] = "Home: " . $this->projectTitle;
        $this->load->view('base/index', $data);
    }
    public function about()
    {
        $data['title'] = "About: " . $this->projectTitle;
        $this->load->view('base/about', $data);
    }
    public function livingList()
    {
        $data['title'] = "Living List: " . $this->projectTitle;
        $this->load->view('base/living-list', $data);
    }
    public function whySangam()
    {
        $data['title'] = "Why Sangam: " . $this->projectTitle;
        $this->load->view('base/why-does-it-matter-now', $data);
    }
    public function whyNow()
    {
        $data['title'] = "why-now: " . $this->projectTitle;
        $this->load->view('base/why-now', $data);
    }
    public function whyJoin()
    {
        $data['title'] = "Why Join: " . $this->projectTitle;
        $this->load->view('base/why-join', $data);
    }
    public function participate()
    {
        $data['title'] = "Participate: " . $this->projectTitle;
        $this->load->view('base/participate', $data);
    }
    public function process()
    {
        $data['title'] = "Process: " . $this->projectTitle;
        $this->load->view('base/process', $data);
    }
    public function faqs()
    {
        $data['title'] = "FAQ's: " . $this->projectTitle;
        $this->load->view('base/faqs', $data);
    }
    public function curatedContent()
    {
        $data['title'] = "Curated Content: " . $this->projectTitle;
        $this->load->view('base/curated-content', $data);
    }
    public function preRegistration()
    {
        $data['title'] = "Pre Registration: " . $this->projectTitle;
        $this->load->view('base/pre-registration', $data);
    }
    public function events()
    {
        $data['title'] = "Upcoming Events: " . $this->projectTitle;
        $this->load->view('base/events', $data);
    }
    public function upcomingEvents()
    {
        $data['title'] = "Upcoming Events: " . $this->projectTitle;
        $this->load->view('base/upcoming-events', $data);
    }
    public function dashboard()
    {
        $data['title'] = "Dashboard: " . $this->projectTitle;
        $this->load->view('base/dashboard', $data);
    }
    public function whyAttend()
    {
        $data['title'] = "Why Attend: " . $this->projectTitle;
        $this->load->view('base/why-attend', $data);
    }
    public function speakers()
    {
        $data['title'] = "Speakers: " . $this->projectTitle;
        $this->load->view('base/speakers', $data);
    }
    public function schedule()
    {
        $data['title'] = "Schedule: " . $this->projectTitle;
        $this->load->view('base/schedule', $data);
    }
    public function registerEvent()
    {
        $data['title'] = "Register Event: " . $this->projectTitle;
        $this->load->view('base/register-event', $data);
    }
    public function expressionOfInterest()
    {
        $data['title'] = "Expression of Interest: " . $this->projectTitle;
        $this->load->view('base/expression-of-interest', $data);
    }
    public function aboutEoi()
    {
        $data['title'] = "About EoI: " . $this->projectTitle;
        $this->load->view('base/about-eoi', $data);
    }
    public function purposeEoi()
    {
        $data['title'] = "Purpose EoI: " . $this->projectTitle;
        $this->load->view('base/purpose-eoi', $data);
    }
    public function stagesEoi()
    {
        $data['title'] = "Stages EoI: " . $this->projectTitle;
        $this->load->view('base/stages-eoi', $data);
    }
    public function whyParticipate()
    {
        $data['title'] = "Why Participate: " . $this->projectTitle;
        $this->load->view('base/why-participate', $data);
    }
    public function participationDetails()
    {
        $data['title'] = "Participation Details: " . $this->projectTitle;
        $this->load->view('base/participation-details', $data);
    }
    public function submitResponse()
    {
        $data['title'] = "Submit Response: " . $this->projectTitle;
        $this->load->view('base/submit-response', $data);
    }
    public function registration()
    {
        $data['title'] = "Registration :: " . $this->projectTitle;
        $this->load->view('base/sign-up', $data);
    }
    public function getInvolved()
    {
        $data['title'] = "Get Involved : " . $this->projectTitle;
        $this->load->view('base/get-involved', $data);
    }
    public function suggestUseCases()
    {
        $data['title'] = "Suggest Use Cases : " . $this->projectTitle;
        $this->load->view('base/submit-use-cases', $data);
    }
    public function getCoreCompetency()
    {
        try {
            $core_competenciesList = $this->BaseModel->getData("core_competencies")->result_array();
            if ($core_competenciesList !== null) {
                $responseData = ["status" => "success", "data" => $core_competenciesList];
            } else {
                $responseData = ["status" => "error", "message" => "Error fetching core_competencies data."];
            }
            echo json_encode($responseData);
        } catch (Exception $e) {
            log_message("error", $e->getMessage());
            echo json_encode(["status" => "error", "message" => "Internal server error."]);
        }
    }
    public function postCaseSubmissionForm()
    {
        $this->form_validation->set_rules('fullName', 'Full Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('abstract', 'Abstract', 'trim|required');
        $this->form_validation->set_rules('objective', 'Objective', 'trim|required');
        $this->form_validation->set_rules('target_areas', 'Target Area', 'trim|required');
        $this->form_validation->set_rules('technologies_used', 'Technologies Utilized', 'trim|required');
        $this->form_validation->set_rules('data_sources', 'Data Sources and Requirements', 'trim|required');
        $this->form_validation->set_rules('expected_outcomes', 'Expected Outcomes and Impact', 'trim|required');
        $this->form_validation->set_rules('innovative_aspects', 'Innovative Aspects', 'trim|required');
        $this->form_validation->set_rules('feasibility_and_challenges', 'Feasibility and Implementation Challenges', 'trim|required');

        if ($this->form_validation->run() === false) {
            $response = ["status" => "validation_errors", "message" => validation_errors()];
        } else {
            $fullName = $this->input->post('fullName');
            $email = $this->input->post('email');
            $title = $this->input->post('title');
            $abstract = $this->input->post('abstract');
            $objective = $this->input->post('objective');
            $targetArea = $this->input->post('target_areas');
            $technologies = $this->input->post('technologies_used');
            $dataSources = $this->input->post('dataSources');
            $outcomesImpact = $this->input->post('expected_outcomes');
            $innovativeAspects = $this->input->post('innovative_aspects');
            $feasibilityChallenges = $this->input->post('feasibility_and_challenges');
            $relevance = $this->input->post('relevance');
            $postData = [
                'full_name' => $fullName,
                'email' => $email,
                'title' => $title,
                'abstract' => $abstract,
                'objective' => $objective,
                'target_areas' => $targetArea,
                'technologies_used' => $technologies,
                'data_sources' => $dataSources,
                'expected_outcomes' => $outcomesImpact,
                'innovative_aspects' => $innovativeAspects,
                'feasibility_and_challenges' => $feasibilityChallenges,
                'relevance'=> $relevance,
                'created_at' => date('Y-m-d H:i:s'),
            ];
            $insertResult = $this->BaseModel->insertData("suggest_use_cases", $postData);
            if ($insertResult) {
                $inserted_Id = $this->db->insert_id();
                $case_id = "CASE" . date("Y") . str_pad($inserted_Id, 4, "0", STR_PAD_LEFT);
                $updateData = ["case_id" => $case_id];
                $updateCondition = ["id" => $inserted_Id];
                $updateQuery = $this->BaseModel->updateData("suggest_use_cases", $updateData, $updateCondition);
                if ($updateQuery) {
                    $response = ["status" => "success", "message" => "Form data submitted successfully."];
                } else {
                    $response = ["status" => "error", "message" => "Error updating user ID."];
                }
            } else {
                $response = ["status" => "error", "message" => "Error inserting form data."];
            }
        }
        $this->output->set_content_type("application/json");
        echo json_encode($response);
    }
}
