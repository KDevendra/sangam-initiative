<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ReportExcelController extends CI_Controller
{
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
            return redirect("sign-in");
        }
    }
    public function downloadEventRegistration($action = null, $status = null)
    {
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
            fputcsv($handle, [
                "S.No.",
                "Registration ID",
                "User ID",
                "Organization Name",
                "Contact Person Name",
                "Email ID",
                "Contact Number",
                "Event",
                "Venue",
                "Event Date",
                "Submit response to EoI",
                "Wish to attend",
                "Ask questions to the speaker's?",
                "Question",
                "Datetime",
                "Status",
            ]);
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
                fputcsv($handle, [
                    $i++,
                    $list->registration_id,
                    $list->user_id,
                    $organization_name,
                    $list->full_name,
                    $list->email,
                    $list->phone_number,
                    $list->event_name,
                    $list->location,
                    $list->event_date,
                    $list->plan_to_submit_response,
                    $list->reason_to_attend,
                    $list->ask_questions,
                    $list->questions_to_speaker,
                    $list->created_at,
                    $status_text,
                ]);
            }
            fclose($handle);
            exit();
        } else {
            $this->session->set_flashdata('error', 'No data found for event registrations.');
            redirect('event-registration');
            exit();
        }
    }
    public function downloadUserList($action = null, $status = null)
    {
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
            fputcsv($handle, [
                "S.No.",
                "User ID",
                "Full Name",
                "Email ID",
                "Contact Number",
                "Register As",
                "Date of Birth",
                "Core Competency",
                "Other Core Competency",
                "Experience",
                "Organization Name",
                "Alternate Email",
                "Potential Interest Areas",
                "Office Address",
                "Organisation HQ Address",
                "Website URL",
                "Datetime",
                "Status"
            ]);
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
                fputcsv($handle, [
                    $i++,
                    $list->user_id,
                    $list->full_name,
                    $list->email,
                    $list->contact_no,
                    $list->register_as,
                    $list->date_of_birth,
                    $list->core_competency,
                    $list->other_core_competencie,
                    $list->experience,
                    $list->organization_name,
                    $list->alternate_email,
                    $list->potential_interest_areas,
                    $list->office_address,
                    $list->organisation_hq_address,
                    $list->website_url,
                    $list->created_at,
                    $status_text,
                ]);
            }
            fclose($handle);
            exit();
        } else {
            $this->session->set_flashdata('error', 'No data found for user list.');
            redirect('user-list');
            exit();
        }
    }
    public function downloadSubmittedSpeakerRequest($action = null, $status = null)
    {
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
                fputcsv($handle, [
                    $i++,
                    $list['ap_req'],
                    $list['full_name'],
                    $list['email'],
                    $list['phone_number'],
                    $list['previous_speaking_experience'],
                    $list['additional_information'],
                    $list['topic_title'],
                    $list['topic_details'],
                    $list['photo_upload'],
                    $list['submission_date'],
                ]);
            }
            fclose($handle);
            exit();
        } else {
            $this->session->set_flashdata('error', 'No data found for speaker applications.');
            redirect('submitted-speaker-request');
            exit();
        }
    }
}
?>
