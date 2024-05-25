<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package_model extends CI_Model
{

	public function save_package($package_title,$package_content,$package_cost,$adult,$child,$day_plans,$package_inclusion,$package_exclusions,$source,$image_bundle,$status)
	{

		$package_data = array(
			'package_title' => $package_title,
			'package_content' => $package_content,
			'package_cost' => $package_cost,
			'adult' => $adult,
			'child' => $child,
			'day_plans' => $day_plans,
			'package_inclusion' => $package_inclusion,
			'package_exclusions' => $package_exclusions,
			'image' => $source,
			'image_bundle' => $image_bundle,
			'status' => $status
		);

		$this->db->insert('pa_package', $package_data);


	}
	
	public function get_list(){
		
		$query = $this->db->query("SELECT * FROM pa_package WHERE status = 1");
		return $query->result();
	}
	
	public function get_package_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('pa_package');
        return $query->row();
    }
	
	public function save_active_package($package_id, $title, $description, $status){
    $package_plans_data = array(
        'package_id' => $package_id,
        'plan_title' => $title,
        'plan_description' => $description,
        'status' => $status
    );

    $this->db->insert('pa_package_plans', $package_plans_data);
    }
	
	public function edit_package($id){
		
		$sql = "select * from pa_package where id = '$id'";
		$result = $this->db->query($sql);
		return $result->row();
	}
	
	public function update_package( $package_content, $package_cost, $adult, $child, $day_plans, $package_inclusion, $package_exclusions, $id) {
    $sql = "UPDATE pa_package SET package_content = ?,package_cost = ?, adult = ?,child = ?,day_plans = ?,package_inclusion = ?,package_exclusions = ? WHERE id = ?";
    
    $this->db->query($sql, array($package_content, $package_cost, $adult, $child, $day_plans, $package_inclusion, $package_exclusions, $id));
}

	public function delete_package($id){
		
		$this->db->query("UPDATE  pa_package SET status = 0 Where id='$id'");
	}

	
}	