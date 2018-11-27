<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_register extends CI_Model {

	public function insertUser($data){

		$this->db->insert("users",$data);
		return $this->db->insert_id();
	}

	public function insertPersonalInfo($data){

		$this->db->insert("applicant_personal_info",$data);
		return $this->db->insert_id();
	}

	public function insertOrgInfo($data){

		$this->db->insert("employer_personal_info",$data);
		return $this->db->insert_id();
	}

	public function updateUser($data,$where){

		$this->db->where($where);
		$this->db->update("users",$data);
		return $this->db->affected_rows();
	}
}
