<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller{
	
	 public function __construct()
    {
        parent::__construct();
        $this->load->model('web_model');
		$this->load->model('gallery_model');
		$this->load->model('blog_model');
		$this->load->model('banner_model');
		$this->load->model('package_model');

    } 
	
	public function index() {
		
    $data['banner'] = $this->banner_model->get_list();
	$data['blog'] = $this->web_model->blog_list();
	/* echo"<pre>";
	print_r($data['banner']);
	exit(); */
    $data['content'] = "web/index";
    $this->load->view('web/template', $data);
    }

	
	public function about_us(){

        $data['content'] = "web/about_us";
        $this->load->view('web/template', $data);
    }
	
	public function destinations(){
        $data['package'] = $this->package_model->get_list();
        $data['content'] = "web/destinations";
        $this->load->view('web/template', $data);
    }
	
	public function blog(){
        $data['blog'] = $this->blog_model->get_list();
        $data['content'] = "web/blog";
        $this->load->view('web/template', $data);
    }
	
	public function gallery(){
        $data['gallery'] = $this->gallery_model->get_list();
        $data['content'] = "web/gallery";
        $this->load->view('web/template', $data);
    }
	
	public function contact_us(){

        $data['content'] = "web/contact_us";
        $this->load->view('web/template', $data);
    }
	
	public function explore($id){

        $data['package'] = $this->web_model->get_package_by_id($id);
        $data['plans'] = $this->web_model->get_plans_by_package_id($id);


        // Load the view with the fetched data
        $data['content'] = 'web/explore';
        $this->load->view('web/template', $data);
    }
	
	public function adventure_package(){

        $data['package'] = $this->web_model->package_adventure();

        $data['content'] = "web/destinations";
        $this->load->view('web/template', $data);
    }
	
	public function family_package(){

        $data['package'] = $this->web_model->package_family();

        $data['content'] = "web/destinations";
        $this->load->view('web/template', $data);
    }
	
	public function romance_package(){

        $data['package'] = $this->web_model->package_romance();

        $data['content'] = "web/destinations";
        $this->load->view('web/template', $data);
    }
	
	public function holiday_package(){

        $data['package'] = $this->web_model->package_holiday();

        $data['content'] = "web/destinations";
        $this->load->view('web/template', $data);
    }
	
	public function enquiry_save(){
		
		$fullname = $this->input->post('fullname');
		$mobile_no = $this->input->post('mobile_no');
		$email = $this->input->post('email');
		$location = $this->input->post('location');
		$status = 1;
		

	   
	  //print_r($source);
	  // exit();
	   
	   $this->load->model('web_model');
	   $this->web_model->save_enquiry($fullname,$mobile_no,$email,$location,$status);
	   $this->session->set_flashdata("message", "Enquiry Submitted successfully.");
	   redirect('web');
	}
	
	public function enquiry_list(){
		$data['enquiry'] = $this->web_model->get_list();
        $data['content'] = "admin/enquiry/enquiry_list";
        $this->load->view('admin/template', $data);
	}
	
	public function enquiry_delete($id){
		
		$result = $this->web_model->delete_enquiry($id);
        redirect('web/enquiry_list');
	}
	
	public function contact_save(){
		
		$name = $this->input->post('name');
		$mobile_no = $this->input->post('mobile_no');
		$email = $this->input->post('email');
		$message = $this->input->post('message');
		$status = 1;
		

	   
	  //print_r($source);
	  // exit();
	   
	   $this->load->model('web_model');
	   $this->web_model->save_contact($name,$mobile_no,$email,$message,$status);
	   $this->session->set_flashdata("message", "Contact Submitted successfully.");
	   redirect('web/contact_us');
	}
	
	public function contacts_list(){
		$data['contacts'] = $this->web_model->get_contact_list();
        $data['content'] = "admin/enquiry/contacts_list";
        $this->load->view('admin/template', $data);
	}
	
	public function contact_delete($id){
		
		$result = $this->web_model->delete_contact($id);
        redirect('web/contacts_list');
	}
}	