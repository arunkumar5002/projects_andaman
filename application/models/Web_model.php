<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web_model extends CI_Model
{

	public function save_enquiry($fullname, $mobile_no, $email, $location, $people, $date, $vacation_type, $status)
	{

		$enquiry_data = array(
			'fullname' => $fullname,
			'mobile_no' => $mobile_no,
			'email' => $email,
			'location' => $location,
			'people' => $people,
			'date' => $date,
			'vacation_type' => $vacation_type,
			'status' => $status
		);

		$this->db->insert('pa_enquiry', $enquiry_data);
	}

	public function get_list()
	{

		$query = $this->db->query("SELECT * FROM pa_enquiry WHERE status = 1");
		return $query->result();
	}

	public function delete_enquiry($id)
	{

		$this->db->query("UPDATE  pa_enquiry SET status = 0 Where id='$id'");
	}

	public function save_contact($name, $mobile_no, $email, $message, $status)
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

	public function get_contact_list()
	{

		$query = $this->db->query("SELECT * FROM pa_contact WHERE status = 1");
		return $query->result();
	}

	public function delete_contact($id)
	{

		$this->db->query("UPDATE  pa_contact SET status = 0 Where id='$id'");
	}

	public function blog_list()
	{
		$query = $this->db->query("SELECT * FROM pa_blog where status = 1 ORDER BY id DESC LIMIT 3;");
		return $query->result();
	}

	public function get_package_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM pa_package WHERE id = $id AND status = 1");
		return $query->result();
	}

	public function get_plans_by_package_id($package_id)
	{
		$query = $this->db->query("SELECT * FROM pa_package_plans WHERE package_id = $package_id AND status = 1");
		return $query->result();
	}

	public function get_package_by_title($package_title, $pack_id = null, $id = null)
	{
		$this->db->select('*');
		$this->db->from('pa_package');
		$this->db->where('package_title', $package_title);
		$this->db->where('status', 1);
		if ($pack_id !== null) {
			$this->db->where('package_type', $pack_id);
		}

		if ($id !== null) {
			$this->db->where('package_title', $id);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_package_by_title_and_type($package_title, $package_type)
	{
		$this->db->select('*');
		$this->db->from('pa_package');
		$this->db->where('package_type', $package_type);
		$this->db->where('package_title', $package_title);
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}



	public function package_list()
	{
		$query = $this->db->query("
        SELECT p.package_title, COUNT(p.id) as package_count, p.image, c.category_name 
        FROM pa_package p
        JOIN pa_create_package c ON p.package_title = c.id 
        WHERE p.status = 1
        GROUP BY p.package_title, c.category_name
        LIMIT 4
    ");
		return $query->result();
	}
}
