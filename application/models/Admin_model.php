<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

	public function sign_in($user, $pass)
	{

		$user = $this->db->escape_str($user);
		$pass = $this->db->escape_str($pass);

		$sql = "SELECT id FROM login WHERE username = ? AND password = ?";

		$query = $this->db->query($sql, array($user, $pass));

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}
}	