<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	
	    public function index()
    {

        $data['content'] = "admin/dashboard";
        $this->load->view('admin/template', $data);

    }
}
