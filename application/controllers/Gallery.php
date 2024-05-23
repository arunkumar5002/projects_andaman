<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller{
	
	public function __construct()
    {
    parent::__construct();
        $this->load->model('gallery_model');

    }
	
	public function index()
    {

        $data['content'] = "admin/gallery/gallery_create";
        $this->load->view('admin/template', $data);

    }
	
	public function gallery_save(){
    $name = $this->input->post('name');
    $content = $this->input->post('content');
    $status = 1;
    $source = '';

    if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
        $config['upload_path']   = 'site/gallery';
        $config['allowed_types'] = 'jpg|png|jpeg|webp';
        $config['max_size']      = 2048; // 2MB
		$config['width']          = 5000;
        $config['height']         = 5000;
        $config['file_name']     = rand().time();

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image')){
         
            $this->session->set_flashdata('error','Please upload image 365*365');
            redirect('gallery');
            return;
        } else {
            $data = $this->upload->data();
            $source = $data['file_name'];

        }
    }

    $this->load->model('gallery_model');
    $this->gallery_model->save_gallery($name, $content, $source, $status);
    redirect('gallery/gallery_list');
}

	
	public function gallery_list(){
		$data['gallery'] = $this->gallery_model->get_list();
        $data['content'] = "admin/gallery/gallery_list";
        $this->load->view('admin/template', $data);
	}
	
	public function gallery_edit($id){
		
		$data['gallery'] = $this->gallery_model->edit_gallery($id);
        $data['content'] = "admin/gallery/gallery_edit";
        $this->load->view('admin/template', $data);
	}
	
	public function gallery_update(){
		$id = $this->input->post('id');
        $name = $this->input->post('name');
        $content = $this->input->post('content');


        $this->gallery_model->update_gallery($name,$content,$source,$status, $id);

        redirect('gallery/gallery_list');
	}
	
	public function gallery_delete($id){
		
		$result = $this->gallery_model->delete_gallery($id);
        redirect('gallery/gallery_list');
	}
}
