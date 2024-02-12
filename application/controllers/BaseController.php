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
        $this->load->view('base/why-sangam', $data);
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
    public function getCoreCompetency()
    {
        try {
            $core_competenciesList = $this->BaseModel->getData("core_competencies")->result_array();
            if ($core_competenciesList !== null) {
                $responseData = ["status" => "success", "data" => $core_competenciesList];
            } else {
                $responseData = ["status" => "error", "message" => "Error fetching core_competencies data.",];
            }
            echo json_encode($responseData);
        } catch (Exception $e) {
            log_message("error", $e->getMessage());
            echo json_encode(["status" => "error", "message" => "Internal server error.",]);
        }    
    }
}
