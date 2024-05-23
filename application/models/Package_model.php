<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package_model extends CI_Model
{

	public function save_package($package_title,$package_content,$package_cost,$adult,$child,$source,$image_bundle,$status)
	{

		$package_data = array(
			'package_title' => $package_title,
			'package_content' => $package_content,
			'package_cost' => $package_cost,
			'adult' => $adult,
			'child' => $child,
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
	
	public function save__active_package($package_id,$day_plans,$package_inclusion,$package_exclusions,$status){
		$package_active_data = array(
			'package_id' => $package_id,
			'day_plans' => $day_plans,
			'package_inclusion' => $package_inclusion,
			'package_exclusions' => $package_exclusions,
			'status' => $status
		);

		$this->db->insert('pa_package_active', $package_active_data);
		
	}
	
}	