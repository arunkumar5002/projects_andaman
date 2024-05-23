<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package extends CI_Controller{
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('package_model');

    }
	
	public function index(){
		
		$data['content'] = 'admin/package/package_create';
		$this->load->view('admin/template',$data);
	}
	
	public function package_save(){
		
		$package_title = $this->input->post('package_title');
		$package_content = $this->input->post('package_content');
		$package_cost = $this->input->post('package_cost');
		$adult = $this->input->post('adult');
		$child = $this->input->post('child');
		$status = 1;
		
		$source = '';
	    if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
				            $config['upload_path']     = 'site/package';
				            $config['allowed_types']   = 'jpg|png|jpeg|webp';
				            $config['file_name']       = rand().time();     


				            $this->load->library('upload', $config);
							
							
				         if ( ! $this->upload->do_upload('image')){
                            } else{
				  
				             $data = array('upload_data' =>$this->upload->data());
				           $source = $data['upload_data']['file_name'];
				        }
	   }
	   
	  $image_bundle = array();
    if (isset($_FILES['image_bundle']['name']) && !empty($_FILES['image_bundle']['name'])) {
        $filesCount = count($_FILES['image_bundle']['name']);
        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['file']['name'] = $_FILES['image_bundle']['name'][$i];
            $_FILES['file']['type'] = $_FILES['image_bundle']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['image_bundle']['tmp_name'][$i];
            $_FILES['file']['error'] = $_FILES['image_bundle']['error'][$i];
            $_FILES['file']['size'] = $_FILES['image_bundle']['size'][$i];
			
            $config['upload_path']     = 'site/package';
			$config['allowed_types']   = 'jpg|png|jpeg';
            $config['file_name'] = rand().time();

            $this->upload->initialize($config);

            if ($this->upload->do_upload('file')) {
                $data = $this->upload->data();
                $image_bundle[] = $data['file_name'];
            }
        }
    }

    $image_bundle = implode(',', $image_bundle);
	   
	  //print_r($source);
	  // exit();
	   
	   $this->load->model('package_model');
	   $this->package_model->save_package($package_title,$package_content,$package_cost,$adult,$child,$source,$image_bundle,$status);
	   redirect('package/package_list');
	}
	
	public function package_active($id){
		
		$data['package'] = $this->package_model->get_package_by_id($id);
		$data['content'] = 'admin/package/package_details';
		$this->load->view('admin/template',$data);
	}
	
	public function package_list(){
		$data['package'] = $this->package_model->get_list();
        $data['content'] = "admin/package/package_list";
        $this->load->view('admin/template', $data);
	}
	
	public function package_active_save(){
		$package_id = $this->input->post('package_id');
		$day_plans = $this->input->post('day_plans');
		$package_inclusion = $this->input->post('package_inclusion');
		$package_exclusions = $this->input->post('package_exclusions');
		$status = 1;
		
		$this->package_model->save__active_package($package_id,$day_plans,$package_inclusion,$package_exclusions,$status);
	    redirect('package/package_list');
	}
	
}	