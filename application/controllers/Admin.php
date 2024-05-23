<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller{
	
	public function index(){
		
		$this->load->view('auth/login');
	}
	
	public function dashboard(){
		$this->load->view('admin/dashboard');
	}
	
	    public function logincheck()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        $this->load->model('admin_model');

        $result = $this->admin_model->sign_in($user, $pass);

        if ($result) {
            redirect('dashboard');
        } else {

            $this->session->set_flashdata('error', 'Invalid username or password.');
            redirect('admin');
        }
    }
}
