<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{

	public function save_blog($name,$content,$source,$status)
	{

		$blog_data = array(
			'name' => $name,
			'content' => $content,
			'image' => $source,
			'status' => $status
		);

		$this->db->insert('pa_blog', $blog_data);


	}
	
	public function get_list(){
		
		$query = $this->db->query("SELECT * FROM pa_blog WHERE status = 1");
		return $query->result();
	}
	
	public function edit_blog($id){
		
		$sql = "select * from pa_blog where id = '$id'";
		$result = $this->db->query($sql);
		return $result->row();
	}
	
	public function update_blog($name,$content,$source,$status, $id){
		
		$sql = "update pa_blog SET name = '$name', content = '$content' where id = '$id'";
		$result = $this->db->query($sql);
	}
	
	public function delete_blog($id){
		
		$this->db->query("UPDATE  pa_blog SET status = 0 Where id='$id'");
	}
}	