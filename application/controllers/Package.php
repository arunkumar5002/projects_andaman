<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package extends CI_Controller{
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('package_model');

    }
	
	public function index(){
		$data['package'] = $this->package_model->create_list();
		$data['content'] = 'admin/package/package_create';
		$this->load->view('admin/template',$data);
	}
	
	public function package_create(){			
		$data['content'] = 'admin/package/package_name';
		$this->load->view('admin/template',$data);
	}
	
	public function save_create_package(){
		$Category_name = $this->input->post('Category_name');
		$status = 1;
		
		$this->package_model->create_package($Category_name,$status);
	    redirect('package');
		
	}
	
	public function package_save(){
		
		$package_title = $this->input->post('package_title');
		$package_content = $this->input->post('package_content');
		$package_cost = $this->input->post('package_cost');
		$package_price = $this->input->post('package_price');
		$adult = $this->input->post('adult');
		$child = $this->input->post('child');
		$day_plans = $this->input->post('day_plans');
		$package_heading = $this->input->post('package_heading');
		$place = $this->input->post('place');
		$package_inclusion = $this->input->post('package_inclusion');
		$package_exclusions = $this->input->post('package_exclusions');
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
			$config['allowed_types']   = 'jpg|png|jpeg|webp';
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
	   $this->package_model->save_package($package_title,$package_content,$package_cost,$package_price,$adult,$child,$day_plans,$package_heading,$place,$package_inclusion,$package_exclusions,$source,$image_bundle,$status);
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
    $plan_titles = $this->input->post('plan_title');
    $plan_descriptions = $this->input->post('plan_description');
    $status = 1;

    if (!empty($plan_titles) && is_array($plan_titles)) {
        foreach ($plan_titles as $index => $title) {
            $description = isset($plan_descriptions[$index]) ? $plan_descriptions[$index] : '';
            $this->package_model->save_active_package($package_id, $title, $description, $status);
        }
    }

    redirect('package/package_list');
   }
   
   public function package_edit($id){
		$data['package'] = $this->package_model->create_list();
		$data['package'] = $this->package_model->edit_package($id);
        $data['content'] = "admin/package/package_edit";
        $this->load->view('admin/template', $data);
	}
	
	public function package_update(){
		$id = $this->input->post('id');
		$package_content = $this->input->post('package_content');
		$package_cost = $this->input->post('package_cost');
		$adult = $this->input->post('adult');
		$child = $this->input->post('child');
		$day_plans = $this->input->post('day_plans');
		$package_heading = $this->input->post('package_heading');
		$place = $this->input->post('place');
		$package_inclusion = $this->input->post('package_inclusion');
		$package_exclusions = $this->input->post('package_exclusions');


        $this->package_model->update_package($package_content,$package_cost,$adult,$child,$day_plans,$package_heading,$place,$package_inclusion,$package_exclusions, $id);

        redirect('package/package_list');
	}

   public function package_delete($id){
		
		$result = $this->package_model->delete_package($id);
        redirect('package/package_list');
	}

	
}	