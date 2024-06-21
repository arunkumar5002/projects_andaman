<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package_model extends CI_Model
{
	
	public function create_package($Category_name,$status){
		$package_data = array(
			'category_name' => $Category_name,
			'status' => $status
		);

		$this->db->insert('pa_create_package', $package_data);
	}
	
	 public function update_category($id, $Category_name) {
    $sql = "update pa_create_package SET category_name = '$Category_name' where id = '$id'";
		$result = $this->db->query($sql);
  }
  
  public function get_category_by_id($id) {
    $query = $this->db->get_where('pa_create_package', array('id' => $id));
    return $query->row();
  }


	public function delete_category($id){
		$this->db->query("UPDATE  pa_create_package SET status = 0 Where id='$id'");
	}
	
 public function type_package($package_title,$Category_type, $status) {
        $package_data = array(
		    'package_title' => $package_title,
            'category_type' => $Category_type,
            'status' => $status
        );

        $this->db->insert('pa_type_package', $package_data);
    }

    public function update_type($id, $Category_type) {
        $data = array(
            'category_type' => $Category_type
        );
        $this->db->where('id', $id);
        $this->db->update('pa_type_package', $data);
    }

    public function get_type_by_id($id) {
        $query = $this->db->get_where('pa_type_package', array('id' => $id));
        return $query->row_array();
    }


	public function delete_type($id){
		$this->db->query("UPDATE  pa_type_package SET status = 0 Where id='$id'");
	}

	public function save_package($package_title,$package_type,$package_content,$package_cost,$package_price,$adult,$child,$day_plans,$package_heading,$place,$package_inclusion,$package_exclusions,$source,$image_bundle,$status)
	{

		$package_data = array(
			'package_title' => $package_title,
			'package_type' => $package_type,
			'package_content' => $package_content,
			'package_cost' => $package_cost,
			'package_price' => $package_price,
			'adult' => $adult,
			'child' => $child,
			'day_plans' => $day_plans,
			'package_heading' => $package_heading,
			'place' => $place,
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
	
	public function create_list(){
		$query = $this->db->query("SELECT * FROM pa_create_package WHERE status = 1");
		return $query->result();
	}
	
	public function type_list(){
		$query = $this->db->query("SELECT * FROM pa_type_package WHERE status = 1");
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
	
public function update_package($package_content,$package_cost,$package_price,$adult,
    $child,$day_plans,$package_heading,$place,$package_inclusion,$package_exclusions,$source,$image_bundle,$id) {
    $data = array(
        'package_content' => $package_content,
        'package_cost' => $package_cost,
        'package_price' => $package_price,
        'adult' => $adult,
        'child' => $child,
        'day_plans' => $day_plans,
        'package_heading' => $package_heading,
        'place' => $place,
        'package_inclusion' => $package_inclusion,
        'package_exclusions' => $package_exclusions
    );

    if (!empty($source)) {
        $data['image'] = $source;
    }

    if (!empty($image_bundle)) {
        $data['image_bundle'] = $image_bundle;
    }

    $this->db->where('id', $id);
    $this->db->update('pa_package', $data);
}

	public function delete_package($id){
		
		$this->db->query("UPDATE  pa_package SET status = 0 Where id='$id'");
	}
	
	/* public function package_list(){
		$query = $this->db->query("SELECT DISTINCT package_title FROM pa_package WHERE status = 1");
		return $query->result();
	} */
	
	public function get_packages() {
    $query = $this->db->get('pa_create_package'); // Make sure 'packages' table has 'id' column
    return $query->result();
    }
	
	public function plan_edit($id) {
		 $this->db->select('*');
         $this->db->from('pa_package_plans');
	     $this->db->where('package_id', $id);
	     $this->db->where('status', 1);
	     $query = $this->db->get();
       return $query->result();
    }
	
public function update_plan($package_id, $plan_title, $plan_description) {
    if (empty($package_id)) {
        $package_plans_data = array(
            'package_id' => $package_id,
            'plan_title' => $plan_title,
            'plan_description' => $plan_description,
            'status' => 1
        );

        $this->db->insert('pa_package_plans', $package_plans_data);
    } else {
        $data = array(
            'plan_title' => $plan_title,
            'plan_description' => $plan_description
        );

        $this->db->where('id', $package_id);
        $this->db->update('pa_package_plans', $data);
    }
}

public function delete_plan($plan_id) {
    $this->db->set('status', 0);
    $this->db->where('id', $plan_id);
    return $this->db->update('pa_package_plans');
}

	
}	