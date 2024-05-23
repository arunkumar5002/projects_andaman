<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller{
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('banner_model');

    }
	
	    public function index()
    {

        $data['content'] = "admin/banner/banner_create";
        $this->load->view('admin/template', $data);

    }
	
	public function banner_save(){
		
		$name = $this->input->post('name');
		$content = $this->input->post('content');
		$status = 1;
		
		$source = '';
	    if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
				            $config['upload_path']     = 'site/banner';
				            $config['allowed_types']   = 'jpg|png|jpeg|webp';

				            $config['file_name']       = rand().time();     


				            $this->load->library('upload', $config);
							
							
				         if ( ! $this->upload->do_upload('image')){
                            $this->session->set_flashdata('error',"please upload 1568 * 789");
                            redirect('banner'); 
                            return;
                            } else{
				  
				             $data = array('upload_data' =>$this->upload->data());
				           $source = $data['upload_data']['file_name'];
				        }
	   }
	   
	  //print_r($source);
	  // exit();
	   
	   $this->load->model('banner_model');
	   $this->banner_model->save_banner($name,$content,$source,$status);
	   redirect('banner/banner_list');
	}
	
	public function banner_list(){
		$data['banner'] = $this->banner_model->get_list();
        $data['content'] = "admin/banner/banner_list";
        $this->load->view('admin/template', $data);
	}
	
	public function banner_edit($id){
		
		$data['banner'] = $this->banner_model->edit_banner($id);
        $data['content'] = "admin/banner/banner_edit";
        $this->load->view('admin/template', $data);
	}
	
	public function banner_update(){
		$id = $this->input->post('id');
        $name = $this->input->post('name');
        $content = $this->input->post('content');


        $this->banner_model->update_banner($name,$content,$source,$status, $id);
        $this->session->set_flashdata("message", "updated successfully.");
        redirect('banner/banner_list');
	}
	
	public function banner_delete($id){
		
		$result = $this->banner_model->delete_banner($id);
        redirect('banner/banner_list');
	}
}
