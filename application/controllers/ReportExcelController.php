<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ReportExcelController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($this->session->login['user_level']) || empty($this->session->login['login_id'])) {
            redirect('login');
        }
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('BaseModel');
        $this->load->helper('common_helper');
    }
    private function checkUserLevel($allowedLevels) {
        $userLevel = $this->session->login["user_level"];
        if (!in_array($userLevel, $allowedLevels)) {
            $this->load->driver("cache");
            $this->session->sess_destroy();
            $this->cache->clean();
            return redirect("sign-in");
        }
    }
    public function downloadEventRegistration($action = null, $status = null) {
        $this->checkUserLevel([1]);
        $application_list = $this->BaseModel->getEventApplicationList($status);
        if (!empty($application_list)) {
            $filename = $action . date("_YmdH_i_s") . ".csv";
            header("Content-type: text/csv");
            header("Content-Disposition: attachment;filename=" . $filename);
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0,pre-check=0");
            header("Pragma: no-cache");
            header("Expires: 0");
            $handle = fopen("php://output", "w");
            fputcsv($handle, ['"Event Registration Data"'], ',');
            fputcsv($handle, ["S.No.", "Registration ID", "User ID", "Full Name", "Email ID", "Contact Number", "Event", "Venue", "Event Date", "Submit response to EoI", "Wish to attend", "Ask questions to the speaker's?", "Question", "Register As", "Date of Birth", "Core Competency", "Other Core Competency", "Experience", "Organization Name", "Alternate Email", "Potential Interest Areas", "Office Address", "Organisation HQ Address", "Website URL", "Datetime", "Status", ]);
            $i = 1;
            foreach ($application_list as $list) {
                switch ($list->status) {
                    case '1':
                        $status_text = 'Pending';
                    break;
                    case '2':
                        $status_text = 'Approved';
                    break;
                    case '3':
                        $status_text = 'Rejected';
                    break;
                    case '4':
                        $status_text = 'Winner';
                    break;
                    default:
                        $status_text = 'Unknown';
                }
                if ($list->register_as === 'Organization') {
                    $organization_name = $list->organization_name;
                } else {
                    $organization_name = '';
                }
                fputcsv($handle, [$i++, $list->registration_id, $list->user_id, $list->full_name, $list->email, $list->contact_no, $list->event_name, $list->location, $list->event_date, $list->plan_to_submit_response, $list->reason_to_attend, $list->ask_questions, $list->questions_to_speaker, $list->register_as, $list->date_of_birth, $list->core_competency, $list->other_core_competencie, $list->experience, $list->organization_name, $list->alternate_email, $list->potential_interest_areas, $list->office_address, $list->organisation_hq_address, $list->website_url, $list->created_at, $status_text, ]);
            }
            fclose($handle);
            exit();
        } else {
            $this->session->set_flashdata('error', 'No data found for event registrations.');
            redirect('event-registration');
            exit();
        }
    }
    public function downloadUserList($action = null, $status = null) {
        $this->checkUserLevel([1]);
        $user_list = $this->BaseModel->getUserList($status);
        if (!empty($user_list)) {
            $filename = $action . date("_YmdH_i_s") . ".csv";
            header("Content-type: text/csv");
            header("Content-Disposition: attachment;filename=" . $filename);
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0,pre-check=0");
            header("Pragma: no-cache");
            header("Expires: 0");
            $handle = fopen("php://output", "w");
            fputcsv($handle, ['"Registered User List"'], ',');
            fputcsv($handle, ["S.No.", "User ID", "Full Name", "Email ID", "Contact Number", "Register As", "Date of Birth", "Core Competency", "Other Core Competency", "Experience", "Organization Name", "Alternate Email", "Potential Interest Areas", "Office Address", "Organisation HQ Address", "Website URL", "Datetime", "Status", ]);
            $i = 1;
            foreach ($user_list as $list) {
                switch ($list->is_verified) {
                    case '0':
                        $status_text = 'Unverified';
                    break;
                    case '1':
                        $status_text = 'Verifed';
                    break;
                    default:
                        $status_text = 'Unknown';
                }
                fputcsv($handle, [$i++, $list->user_id, $list->full_name, $list->email, $list->contact_no, $list->register_as, $list->date_of_birth, $list->core_competency, $list->other_core_competencie, $list->experience, $list->organization_name, $list->alternate_email, $list->potential_interest_areas, $list->office_address, $list->organisation_hq_address, $list->website_url, $list->created_at, $status_text, ]);
            }
            fclose($handle);
            exit();
        } else {
            $this->session->set_flashdata('error', 'No data found for user list.');
            redirect('user-list');
            exit();
        }
    }
    public function downloadSubmittedSpeakerRequest($action = null, $status = null) {
        $this->checkUserLevel([1]);
        $application_list = $this->BaseModel->getData('speaker_applications')->result_array();
        if (!empty($application_list)) {
            $filename = $action . date("_YmdH_i_s") . ".csv";
            header("Content-type: text/csv");
            header("Content-Disposition: attachment;filename=" . $filename);
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0,pre-check=0");
            header("Pragma: no-cache");
            header("Expires: 0");
            $handle = fopen("php://output", "w");
            fputcsv($handle, ['Submited Speaker Request List'], ',');
            fputcsv($handle, ["S.No.", "Applications ID", "Full Name", "Email ID", "Contact Number", "Previous Speaking Experience", "Additional Information", "Title of the Topic", "Topic Details", "Upload Photo", "Datetime"]);
            $i = 1;
            foreach ($application_list as $list) {
                fputcsv($handle, [$i++, $list['ap_req'], $list['full_name'], $list['email'], $list['contact_no'], $list['previous_speaking_experience'], $list['additional_information'], $list['topic_title'], $list['topic_details'], $list['photo_upload'], $list['submission_date'], ]);
            }
            fclose($handle);
            exit();
        } else {
            $this->session->set_flashdata('error', 'No data found for speaker applications.');
            redirect('submitted-speaker-request');
            exit();
        }
    }
    public function downloadEoIApplication($action = null, $status = null) {
        $this->checkUserLevel([1]);
        $application_list = $this->BaseModel->getEoIApplicationList($status);
        if (!empty($application_list)) {
            $filename = $action . date("_YmdH_i_s") . ".csv";
            header("Content-type: text/csv");
            header("Content-Disposition: attachment;filename=" . $filename);
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0,pre-check=0");
            header("Pragma: no-cache");
            header("Expires: 0");
            $handle = fopen("php://output", "w");
            fputcsv($handle, ['"EoI Registration Data"'], ',');
            fputcsv($handle, ["S.No.", "Registration ID", "User ID", "Full Name", "Email ID", "Contact Number", "Register As", "Date of Birth", "Core Competency", "Other Core Competency", "Experience", "Organization Name", "Alternate Email", "Potential Interest Areas", "Office Address", "Organisation HQ Address", "Website URL", "Previous Experience", "Achievements or Recognitions", "Title", "Category", "Strategic Vision", "Objectives", "Alignment with Project Goals", "Contribution to Project Goals", "Technological Resources Category", "Technological Resources Type of resource", "Technological Resources Details of Resource", "Technological Resources Specification", "Technological Resources Purpose of Resource", "Technological Resources Alignment", "Human Resources Category", "Human Resources Type of resource", "Human Resources Name and contact details", "Human Resources Role", "Human Resources Experience", "Human Resources Extent of involvement in PoC", "Human Resources Alignment", "Other Information", "Upload Document", "Datetime", "Status","Application Detail (PDF)" ]);
            $i = 1;
            foreach ($application_list as $list) {
                switch ($list->status) {
                    case '1':
                        $status_text = 'Pending';
                    break;
                    case '2':
                        $status_text = 'Approved';
                    break;
                    case '3':
                        $status_text = 'Rejected';
                    break;
                    case '4':
                        $status_text = 'Winner';
                    break;
                    default:
                        $status_text = 'Incomplete';
                }
                if ($list->register_as === 'Organization') {
                    $organization_name = $list->organization_name;
                } else {
                    $organization_name = '';
                }
                if (isset($list->upload_document) && strpos($list->upload_document, "Error") !== false) {
                    $upload_document = "No file uploaded";
                } else {
                    $upload_document = '=HYPERLINK("' . base_url("uploads/upload_document/") . $list->upload_document . '", "View Upload Document")';
                }
                $excelFormula = '=HYPERLINK("' . base_url() . "download-eoi-application/" . $list->application_id . '", "PDF Link")';
                fputcsv($handle, [$i++, isset($list->application_id) ? $list->application_id : '', isset($list->user_id) ? $list->user_id : '', isset($list->full_name) ? $list->full_name : '', isset($list->email) ? $list->email : '', isset($list->contact_no) ? $list->contact_no : '', isset($list->register_as) ? $list->register_as : '', isset($list->date_of_birth) ? $list->date_of_birth : '', isset($list->core_competency) ? $list->core_competency : '', isset($list->other_core_competencie) ? $list->other_core_competencie : '', isset($list->experience) ? $list->experience : '', isset($list->organization_name) ? $list->organization_name : '', isset($list->alternate_email) ? $list->alternate_email : '', isset($list->potential_interest_areas) ? $list->potential_interest_areas : '', isset($list->office_address) ? $list->office_address : '', isset($list->organisation_hq_address) ? $list->organisation_hq_address : '', isset($list->website_url) ? $list->website_url : '', isset($list->previous_experience) ? $list->previous_experience : '', isset($list->achievements_recognitions) ? $list->achievements_recognitions : '', isset($list->title) ? $list->title : '', isset($list->category) ? $list->category : '', isset($list->strategic_vision) ? $list->strategic_vision : '', isset($list->objectives) ? $list->objectives : '', isset($list->project_goals) ? $list->project_goals : '', isset($list->contribution_to_project_goals) ? $list->contribution_to_project_goals : '', isset($list->technological_category) ? $list->technological_category : '', isset($list->technological_type_of_resource) ? $list->technological_type_of_resource : '', isset($list->technological_details) ? $list->technological_details : '', isset($list->specification) ? $list->specification : '', isset($list->purpose) ? $list->purpose : '', isset($list->alignment) ? $list->alignment : '', isset($list->human_category) ? $list->human_category : '', isset($list->human_type_of_resource) ? $list->human_type_of_resource : '', isset($list->human_details) ? $list->human_details : '', isset($list->human_experience) ? $list->human_experience : '', isset($list->role) ? $list->role : '', isset($list->role) ? $list->extent_of_involvement : '', isset($list->human_alignment) ? $list->human_alignment : '', isset($list->other_pertinent_facts) ? $list->other_pertinent_facts : '', isset($upload_document) ? $upload_document : '', isset($list->created_at) ? $list->created_at : '', isset($status_text) ? $status_text : '', $excelFormula ]);
            }
            fclose($handle);
            exit();
        } else {
            $this->session->set_flashdata('error', 'No data found for EoI Registration.');
            redirect('eoi-application');
            exit();
        }
    }
    public function downloadSubmitedUseCases($action = null, $status = null) {
        $this->checkUserLevel([1]);
        $application_list = $this->BaseModel->getSubmitedUseCasesList($status);
        if (!empty($application_list)) {
            $filename = $action . date("_YmdH_i_s") . ".csv";
            header("Content-type: text/csv");
            header("Content-Disposition: attachment;filename=" . $filename);
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0,pre-check=0");
            header("Pragma: no-cache");
            header("Expires: 0");
            $handle = fopen("php://output", "w");
            fputcsv($handle, ['"Submited Use Cases Data"'], ',');
            fputcsv($handle, ["S.No.", "Case ID", "User ID", "Full Name", "Email ID", "Contact Number", "Register As", "Date of Birth", "Core Competency", "Other Core Competency", "Experience", "Organization Name", "Alternate Email", "Potential Interest Areas", "Office Address", "Organisation HQ Address", "Website URL", "Title of the Use Case", "Abstract", "Objective", "Target Area", "Relevance to Sangam Initiative", "Technologies Utilized", "Data Sources", "Expected Outcomes", "Innovative Aspects", "Feasibility and Challenges", "Upload Relevant Document", "Datetime", ]);
            $i = 1;
            foreach ($application_list as $list) {
                switch ($list->status) {
                    case '1':
                        $status_text = 'Pending';
                    break;
                    case '2':
                        $status_text = 'Approved';
                    break;
                    case '3':
                        $status_text = 'Rejected';
                    break;
                    case '4':
                        $status_text = 'Winner';
                    break;
                    default:
                        $status_text = 'Unknown';
                }
                if ($list->register_as === 'Organization') {
                    $organization_name = $list->organization_name;
                } else {
                    $organization_name = '';
                }
                if (isset($list->upload_relevant_document) && strpos($list->upload_relevant_document, "Error") !== false) {
                    $upload_document = "No file uploaded";
                } elseif (strpos($list->upload_relevant_document, "Error") !== false) {
                    $upload_document = "Error: No file uploaded";
                } else {
                    $upload_document = '=HYPERLINK("' . base_url("uploads/upload_relevant_document/") . $list->upload_relevant_document . '", "View Upload Document")';
                }
                fputcsv($handle, [$i++, isset($list->case_id) ? $list->case_id : '', isset($list->user_id) ? $list->user_id : '', isset($list->full_name) ? $list->full_name : '', isset($list->email) ? $list->email : '', isset($list->contact_no) ? $list->contact_no : '', isset($list->register_as) ? $list->register_as : '', isset($list->date_of_birth) ? $list->date_of_birth : '', isset($list->core_competency) ? $list->core_competency : '', isset($list->other_core_competencie) ? $list->other_core_competencie : '', isset($list->experience) ? $list->experience : '', isset($list->organization_name) ? $list->organization_name : '', isset($list->alternate_email) ? $list->alternate_email : '', isset($list->potential_interest_areas) ? $list->potential_interest_areas : '', isset($list->office_address) ? $list->office_address : '', isset($list->organisation_hq_address) ? $list->organisation_hq_address : '', isset($list->website_url) ? $list->website_url : '', isset($list->title) ? $list->title : '', isset($list->objective) ? $list->objective : '', isset($list->target_areas) ? $list->target_areas : '', isset($list->relevance) ? $list->relevance : '', isset($list->technologies_used) ? $list->technologies_used : '', isset($list->data_sources) ? $list->data_sources : '', isset($list->expected_outcomes) ? $list->expected_outcomes : '', isset($list->innovative_aspects) ? $list->innovative_aspects : '', isset($list->feasibility_and_challenges) ? $list->feasibility_and_challenges : '', isset($upload_document) ? $upload_document : '', isset($list->created_at) ? $list->created_at : '', ]);
            }
            fclose($handle);
            exit();
        } else {
            $this->session->set_flashdata('error', 'No data found for submited use cases.');
            redirect('submited-use-cases');
            exit();
        }
    }
}
?>
