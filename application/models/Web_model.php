<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web_model extends CI_Model
{

	public function save_enquiry($fullname,$mobile_no,$email,$location,$status)
	{

		$enquiry_data = array(
			'fullname' => $fullname,
			'mobile_no' => $mobile_no,
			'email' => $email,
			'location' => $location,
			'status' => $status
		);

		$this->db->insert('pa_enquiry', $enquiry_data);


	}
	
	public function get_list(){
		
		$query = $this->db->query("SELECT * FROM pa_enquiry WHERE status = 1");
		return $query->result();
	}
	
	public function delete_enquiry($id){
		
		$this->db->query("UPDATE  pa_enquiry SET status = 0 Where id='$id'");
	}
	
	public function save_contact($name,$mobile_no,$email,$message,$status)
	{

		$contact_data = array(
			'name' => $name,
			'mobile_no' => $mobile_no,
			'email' => $email,
			'message' => $message,
			'status' => $status
		);

		$this->db->insert('pa_contact', $contact_data);


	}
	
	public function get_contact_list(){
		
		$query = $this->db->query("SELECT * FROM pa_contact WHERE status = 1");
		return $query->result();
	}
	
	public function delete_contact($id){
		
		$this->db->query("UPDATE  pa_contact SET status = 0 Where id='$id'");
	}
	
	public function blog_list(){
		$query = $this->db->query("SELECT * FROM pa_blog where status = 1 ORDER BY id DESC LIMIT 3;");
		return $query->result();
	}
	
	 public function get_package_by_id($id) {
        $query = $this->db->query("SELECT * FROM pa_package WHERE id = $id AND status = 1");
      return $query->result();
    }
	
	public function get_plans_by_package_id($package_id) {
    $query = $this->db->query("SELECT * FROM pa_package_plans WHERE package_id = $package_id");
    return $query->result();
   }

    public function get_package_by_title($package_title) {
        $this->db->select('*');
        $this->db->from('pa_package');
        $this->db->where('package_title', $package_title);
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query->result();
    }
	
	public function package_list(){
    $query = $this->db->query("SELECT package_title, COUNT(id) as package_count, image FROM pa_package WHERE status = 1 GROUP BY package_title LIMIT 4");
    return $query->result();
   }



}	