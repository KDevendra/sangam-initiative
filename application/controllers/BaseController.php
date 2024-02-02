<?php
defined('BASEPATH') or exit('No direct script access allowed');
class BaseController extends CI_Controller {
    var $projectTitle = "Project Title";
    public function __construct() {
        parent::__construct();
        $this->load->Model('BaseModel');
        $this->load->helper('common_helper');
        date_default_timezone_set('Asia/kolkata');
    }
    public function index() {
        $ipAddress = $this->input->ip_address();
        $userAgent = $this->input->user_agent();
        if ($this->BaseModel->isUniqueVisitor($ipAddress, $userAgent)) {
            $this->BaseModel->insertVisitor($ipAddress, $userAgent); }
        $data['title'] = $this->projectTitle . " : Home";
        $this->load->view('base/index', $data);
    }

}
