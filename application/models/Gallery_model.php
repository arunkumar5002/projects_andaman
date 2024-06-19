<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery_model extends CI_Model
{

	public function save_gallery($name,$content,$source,$status)
	{

		$gallery_data = array(
			'name' => $name,
			'content' => $content,
			'image' => $source,
			'status' => $status
		);

		$this->db->insert('pa_gallery', $gallery_data);


	}
	
	public function get_list(){
		
		$query = $this->db->query("SELECT * FROM pa_gallery WHERE status = 1");
		return $query->result();
	}
	
	public function edit_gallery($id){
		
		$sql = "select * from pa_gallery where id = '$id'";
		$result = $this->db->query($sql);
		return $result->row();
	}
	
	public function update_gallery($name,$content,$source,$status, $id){
		if(!empty($source)){
		$sql = "update pa_gallery SET name = '$name', content = '$content',image = '$source' where id = '$id'";
		$result = $this->db->query($sql);
		}else{		
		$sql = "update pa_gallery SET name = '$name', content = '$content' where id = '$id'";
		$result = $this->db->query($sql);
		}
	}
	
	public function delete_gallery($id){
		
		$this->db->query("UPDATE  pa_gallery SET status = 0 Where id='$id'");
	}
}	