<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller{
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');

    }
	
	    public function index()
    {

        $data['content'] = "admin/blog/blog_create";
        $this->load->view('admin/template', $data);

    }
	
	public function blog_save(){
		
		$name = $this->input->post('name');
		$content = $this->input->post('content');
		$status = 1;
		
		$source = '';
	    if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
				            $config['upload_path']     = 'site/blog';
				            $config['allowed_types']   = 'jpg|png|jpeg|webp';
				            $config['file_name']       = rand().time();     


				            $this->load->library('upload', $config);
							
							
				         if ( ! $this->upload->do_upload('image')){
                            } else{
				  
				             $data = array('upload_data' =>$this->upload->data());
				           $source = $data['upload_data']['file_name'];
				        }
	   }
	   
	  //print_r($source);
	  // exit();
	   
	   $this->load->model('blog_model');
	   $this->blog_model->save_blog($name,$content,$source,$status);
	   redirect('blog/blog_list');
	}
	
	public function blog_list(){
		$data['blog'] = $this->blog_model->get_list();
        $data['content'] = "admin/blog/blog_list";
        $this->load->view('admin/template', $data);
	}
	
	public function blog_edit($id){
		
		$data['blog'] = $this->blog_model->edit_blog($id);
        $data['content'] = "admin/blog/blog_edit";
        $this->load->view('admin/template', $data);
	}
	
	public function blog_update(){
		$id = $this->input->post('id');
        $name = $this->input->post('name');
        $content = $this->input->post('content');
		$source = '';
	    if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
				            $config['upload_path']     = 'site/blog';
				            $config['allowed_types']   = 'jpg|png|jpeg|webp';
				            $config['file_name']       = rand().time();     


				            $this->load->library('upload', $config);
							
							
				         if ( ! $this->upload->do_upload('image')){
                            } else{
				  
				             $data = array('upload_data' =>$this->upload->data());
				           $source = $data['upload_data']['file_name'];
				        }
	   }


        $this->blog_model->update_blog($name,$content,$source,$status, $id);

        redirect('blog/blog_list');
	}
	
	public function blog_delete($id){
		
		$result = $this->blog_model->delete_blog($id);
        redirect('blog/blog_list');
	}
}
