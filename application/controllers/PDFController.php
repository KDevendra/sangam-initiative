<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PDFController extends CI_Controller {
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
    public function index() {
        require "vendor/autoload.php";
        $user_id = $this->BaseModel->getData('eoi_registration', ['application_id' => 'APL20240001'])->row()->user_id;
        $getApplicationDetail = $this->BaseModel->getEoIApplicationData($user_id);
        $logoImageUrl = base_url("include/web/custom/Department_Of_Telecommunications.png");
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, "UTF-8", false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor("Sangam Initiative");
        $pdf->SetTitle("Sangam Initiative");
        $pdf->SetSubject("Expression of Interest (EoI) Registration Preview");
        $pdf->SetKeywords("Sangam Initiative");
        $pdf->SetHeaderData($logoImageUrl,0, 'Department of Telecommunication', 'Expression of Interest (EoI) Registration');
        $pdf->setHeaderFont([PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN]);
        $pdf->setFooterFont([PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA]);
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        if (@file_exists(dirname(__FILE__) . "/lang/eng.php")) {
            require_once dirname(__FILE__) . "/lang/eng.php";
            $pdf->setLanguageArray($l);
        }
        $pdf->SetFont("helvetica", "B", 20);
        $pdf->AddPage();
        $pdf->SetFont("helvetica", "", 10);
        $applicationStatus = !empty($getApplicationDetail->status) ? $getApplicationDetail->status : "";
        $statusLabel = "";
        switch ($applicationStatus) {
            case "1":
                $statusLabel = "Pending";
            break;
            case "2":
                $statusLabel = "Approved";
            break;
            case "3":
                $statusLabel = "Rejected";
            break;
            case "4":
                $statusLabel = "Winner";
            break;
            default:
                $statusLabel = "Unknown";
        }
        $applicationId = !empty($getApplicationDetail->application_id) ? $getApplicationDetail->application_id : "";
        $ApplicationStatus = $statusLabel;
        $full_name = !empty($getApplicationDetail->full_name) ? $getApplicationDetail->full_name : "";
        $email = !empty($getApplicationDetail->email) ? $getApplicationDetail->email : "";
        $user_id = !empty($getApplicationDetail->user_id) ? $getApplicationDetail->user_id : "";
        $contact_no = !empty($getApplicationDetail->contact_no) ? $getApplicationDetail->contact_no : "";
        $date_of_birth = !empty($getApplicationDetail->date_of_birth) ? $getApplicationDetail->date_of_birth : "";
        $experience = !empty($getApplicationDetail->experience) ? $getApplicationDetail->experience : "";
        $core_competency = !empty($getApplicationDetail->core_competency) ? $getApplicationDetail->core_competency : "";
        $previous_experience = !empty($getApplicationDetail->previous_experience) ? $getApplicationDetail->previous_experience : "";
        $achievements_recognitions = !empty($getApplicationDetail->achievements_recognitions) ? $getApplicationDetail->achievements_recognitions : "";
        $title = !empty($getApplicationDetail->title) ? $getApplicationDetail->title : "";
        $category = !empty($getApplicationDetail->category) ? $getApplicationDetail->category : "";
        $strategic_vision = !empty($getApplicationDetail->strategic_vision) ? $getApplicationDetail->strategic_vision : "";
        $objectives = !empty($getApplicationDetail->objectives) ? $getApplicationDetail->objectives : "";
        $project_goals = !empty($getApplicationDetail->project_goals) ? $getApplicationDetail->project_goals : "";
        $contribution_to_project_goals = !empty($getApplicationDetail->contribution_to_project_goals) ? $getApplicationDetail->contribution_to_project_goals : "";
        $other_core_competencie = !empty($getApplicationDetail->other_core_competencie) ? $getApplicationDetail->other_core_competencie : "";
        $organization_name = !empty($getApplicationDetail->organization_name) ? $getApplicationDetail->organization_name : "";
        $alternate_email = !empty($getApplicationDetail->alternate_email) ? $getApplicationDetail->alternate_email : "";
        $potential_interest_areas = !empty($getApplicationDetail->potential_interest_areas) ? $getApplicationDetail->potential_interest_areas : "";
        $office_address = !empty($getApplicationDetail->office_address) ? $getApplicationDetail->office_address : "";
        $organisation_hq_address = !empty($getApplicationDetail->organisation_hq_address) ? $getApplicationDetail->organisation_hq_address : "";
        $website_url = !empty($getApplicationDetail->website_url) ? $getApplicationDetail->website_url : "";
        $register_as = !empty($getApplicationDetail->register_as) ? $getApplicationDetail->register_as : "";
        $getApplicationDetail->technological_category = isset($getApplicationDetail->technological_category) && !empty($getApplicationDetail->technological_category) ? json_decode($getApplicationDetail->technological_category, true) : [];
        $getApplicationDetail->technological_type_of_resource = isset($getApplicationDetail->technological_type_of_resource) && !empty($getApplicationDetail->technological_type_of_resource) ? json_decode($getApplicationDetail->technological_type_of_resource, true) : [];
        $getApplicationDetail->technological_details = isset($getApplicationDetail->technological_details) && !empty($getApplicationDetail->technological_details) ? json_decode($getApplicationDetail->technological_details, true) : [];
        $getApplicationDetail->specification = isset($getApplicationDetail->specification) && !empty($getApplicationDetail->specification) ? json_decode($getApplicationDetail->specification, true) : [];
        $getApplicationDetail->purpose = isset($getApplicationDetail->purpose) && !empty($getApplicationDetail->purpose) ? json_decode($getApplicationDetail->purpose, true) : [];
        $getApplicationDetail->alignment = isset($getApplicationDetail->alignment) && !empty($getApplicationDetail->alignment) ? json_decode($getApplicationDetail->alignment, true) : [];
        // Grouping technical details
        $data["technical_details"] = [];
        if (!empty($getApplicationDetail->technological_category)) {
            foreach ($getApplicationDetail->technological_category as $key => $category) {
                // Check if category is not empty
                if (!empty($category)) {
                    $type_of_resource = isset($getApplicationDetail->technological_type_of_resource[$key]) ? $getApplicationDetail->technological_type_of_resource[$key] : "";
                    $details = isset($getApplicationDetail->technological_details[$key]) ? $getApplicationDetail->technological_details[$key] : "";
                    $specification = isset($getApplicationDetail->specification[$key]) ? $getApplicationDetail->specification[$key] : "";
                    $purpose = isset($getApplicationDetail->purpose[$key]) ? $getApplicationDetail->purpose[$key] : "";
                    $alignment = isset($getApplicationDetail->alignment[$key]) ? $getApplicationDetail->alignment[$key] : "";
                    $data["technical_details"][] = ["category" => $category, "type_of_resource" => $type_of_resource, "details" => $details, "specification" => $specification, "purpose" => $purpose, "alignment" => $alignment, ];
                }
            }
        }

        $tbl = <<<EOD
 <table cellspacing="0" cellpadding="8" style="border: 1px solid #0000002b;">
     <tr style="background-color: #405189; font-size: 18px; color: #fff;">
         <th colspan="2" align="center">Personal Information</th>
     </tr>
     <tr>
         <td style="border: 1px solid #0000002b;"><b>Application No.</b><br>$applicationId</td>
         <td style="border: 1px solid #0000002b;"><b>Application Status</b><br>$statusLabel</td>
     </tr>
     <tr>
         <td style="border: 1px solid #0000002b;"><b>Full Name</b><br>$full_name</td>
         <td style="border: 1px solid #0000002b;"><b>Email</b><br><a href="mailto:$email">$email</a></td>
     </tr>
     <tr>
         <td style="border: 1px solid #0000002b;"><b>Phone Number</b><br>$contact_no</td>
         <td style="border: 1px solid #0000002b;"><b>Date of Birth</b><br>$date_of_birth</td>
     </tr>
     <tr>
         <td style="border: 1px solid #0000002b;"><b>Experience</b><br>$experience</td>
         <td style="border: 1px solid #0000002b;"><b>Core Competencies</b><br>$core_competency</td>
     </tr>


EOD;
        if ($core_competency === 'Others') {
            $tbl.= <<<EOD
            <tr>
                <td colspan="2" style="border: 1px solid #0000002b;"><b>Other Core Competencies</b><br>$other_core_competencie</td>
            </tr>
            EOD;
        }
        if ($register_as === "Organization") {
            $tbl.= <<<EOD
 <tr>
     <td style="border: 1px solid #0000002b;"><b>Organization Name</b><br>$organization_name</td>
     <td style="border: 1px solid #0000002b;"><b>Website URL of the Organization</b><br><a href="$website_url" target="_blank">$website_url</a></td>
 </tr>
 <tr>
     <td style="border: 1px solid #0000002b;"><b>Alternate Email</b><br><a href="mailto:$alternate_email">$alternate_email</a></td>
     <td style="border: 1px solid #0000002b;"><b>Potential Interest Areas</b><br>$potential_interest_areas</td>
 </tr>
 <tr>
     <td style="border: 1px solid #0000002b;"><b>Office Address</b><br>$office_address</td>
     <td style="border: 1px solid #0000002b;"><b>Organization HQ address</b><br>$organisation_hq_address</td>
 </tr>
 EOD;
}
$tbl .= <<<EOD
 <tr style="background-color: #405189; font-size: 18px; color: #fff;">
     <th colspan="2" align="center">Additional Information</th>
 </tr>
 <tr>
     <td  colspan="2" style="border: 1px solid #0000002b;"><b>Previous Experience in Related Projects</b><br>$previous_experience</td>
 </tr>
 <tr>
     <td  colspan="2" style="border: 1px solid #0000002b;"><b>Achievements or Recognitions</b><br>$achievements_recognitions</td>
 </tr>
 <tr style="background-color: #405189; font-size: 18px; color: #fff;">
     <th colspan="2" align="center">Details of Submission</th>
 </tr>
 <tr>
     <td style="border: 1px solid #0000002b;"><b>Title</b><br>$title</td>
     <td style="border: 1px solid #0000002b;"><b>Category</b><br>$category</td>
 </tr>

 <tr>
     <td colspan="2" style="border: 1px solid #0000002b;"><b>Strategic Vision</b><br>$strategic_vision</td>

 </tr>
 <tr>

     <td colspan="2" style="border: 1px solid #0000002b;"><b>Objectives</b><br>$objectives</td>
 </tr>
 <tr>
     <td  colspan="2"  style="border: 1px solid #0000002b;"><b>Alignment with Project Goals</b><br>$project_goals</td>
 </tr>
 <tr>
     <td  colspan="2" style="border: 1px solid #0000002b;"><b>Contribution to Project Goals</b><br>$contribution_to_project_goals</td>
 </tr>
 <tr style="background-color: #405189; font-size: 18px; color: #fff;">
     <th colspan="2" align="center">Technological Resources</th>
 </tr>

 <tr style="background-color: #405189; font-size: 18px; color: #fff;">
     <th colspan="2" align="center">Human Resources Commitment</th>
 </tr>
 <tr style="background-color: #405189; font-size: 18px; color: #fff;">
     <th colspan="2" align="center">Other Information</th>
 </tr>
 <tr>
     <td colspan="2" style="border: 1px solid #0000002b;"><b>Objectives</b><br>$objectives</td>
 </tr>
 <tr style="background-color: #405189; font-size: 18px; color: #fff;">
     <th colspan="2" align="center">Certification</th>
 </tr>
</table>
<p>I declare that all the information given by me in this application and documents attached hereto are true
to the best of my knowledge and that I have not willfully suppressed any material fact. I accept that if
any of the information given by me in this application is in any way false or incorrect, my application
may be rejected, any offer of the grant may be withdrawn or my candidature may be rejected at any
time.</p>
EOD;
            $pdf->writeHTML($tbl, true, false, false, false, "");
            $timestamp = date("His");
            $filename = (!empty($getApplicationDetail->application_id) ? $getApplicationDetail->application_id : "default_application") . "_{$timestamp}.pdf";
            $pdfFilePath = FCPATH . "uploads/temporary/" . $filename;
            $pdf->Output($pdfFilePath, "F");
            header('Content-Type: application/pdf');
            header('Content-Disposition: inline; filename="' . $filename . '"');
            header('Content-Length: ' . filesize($pdfFilePath));
            @readfile($pdfFilePath);
        }
    }
?>
