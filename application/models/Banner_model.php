<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner_model extends CI_Model
{

	public function save_banner($name,$content,$source,$status)
	{

		$banner_data = array(
			'name' => $name,
			'content' => $content,
			'image' => $source,
			'status' => $status
		);

		$this->db->insert('pa_banner', $banner_data);


	}
	
	public function get_list(){
		
		$query = $this->db->query("SELECT * FROM pa_banner WHERE status = 1");
		return $query->result();
	}
	
	public function edit_banner($id){
		
		$sql = "select * from pa_banner where id = '$id'";
		$result = $this->db->query($sql);
		return $result->row();
	}
	
	public function update_banner($name,$content,$source,$status, $id){
		if(!empty($source)){
			$sql = "update pa_banner SET name = '$name', content = '$content',image = '$source' where id = '$id'";
		    $result = $this->db->query($sql);		
		}else{
			$sql = "update pa_banner SET name = '$name', content = '$content' where id = '$id'";
		    $result = $this->db->query($sql);
		}
	}
	
	public function delete_banner($id){
		
		$this->db->query("UPDATE  pa_banner SET status = 0 Where id='$id'");
	}
}	