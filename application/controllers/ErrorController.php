<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ErrorController extends CI_Controller
{
    public function index()
    {
        $this->output->set_status_header('404'); 
        $this->load->view('base/error-404',);
    }
}

?>