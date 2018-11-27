<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public function get_user_info($where){

		$res = $this->db->get_where("users",$where);
		if($res->num_rows()){
			$result = $res->result()[0];
			return $result;
		}else{
			return false;
		}
	}

	public function pending_jobs(){

		$where = array(
			"j.approved"	=>	0,
			"j.deleted<>"	=>	1,
			"j.featured<>"	=>	1
		);
		$this->db->select("j.*,epi.company_name,epi.email");
		$this->db->from("jobs as j");
		$this->db->join("employer_personal_info as epi","j.emp_id_fk=epi.user_id_fk");
		$this->db->where($where);
		$this->db->order_by("j.id","DESC");
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}
	}

	public function pending_courses(){

		$where = array(
			"c.approved"	=>	0,
			"c.deleted<>"	=>	1,
			"c.featured<>"	=>	1
		);
		$this->db->select("c.*,epi.company_name,epi.email");
		$this->db->from("courses as c");
		$this->db->join("employer_personal_info as epi","c.emp_id_fk=epi.user_id_fk");
		$this->db->where($where);
		$this->db->order_by("c.id","DESC");
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}
	}

	public function setApproveJob($data,$where){

		$this->db->where($where);
		$this->db->update("jobs",$data);
		return $this->db->affected_rows();
	}

	public function getJobDetails($id){

		$this->db->select("j.*,CONCAT(epi.first_name,' ',epi.last_name) as username,epi.email,epi.company_name,epi.website_url,epi.address,epi.logo,jt.job_type,je.job_experience");
		$this->db->from("jobs as j");
		$this->db->join("employer_personal_info as epi","j.emp_id_fk=epi.user_id_fk");
		$this->db->join("job_type as jt","jt.id=j.type_fk");
		$this->db->join("job_experience as je","je.id=experience_fk");
		$this->db->where("j.id",$id);
		$res = $this->db->get();
		$result = $res->result()[0];
		return $result;
	}

	public function setApproveCourse($data,$where){

		$this->db->where($where);
		$this->db->update("courses",$data);
		return $this->db->affected_rows();
	}

	public function getCourseDetails($id){

		$this->db->select("c.*,CONCAT(epi.first_name,' ',epi.last_name) as username,epi.email,epi.company_name,epi.website_url,epi.address,epi.logo");
		$this->db->from("courses as c");
		$this->db->join("employer_personal_info as epi","c.emp_id_fk=epi.user_id_fk");
		$this->db->where("c.id",$id);
		$res = $this->db->get();
		$result = $res->result()[0];
		return $result;
	}

	public function getCandidates(){

		$res = $this->db->get("applicant_personal_info");
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}
	}

	public function getEmployers(){

		$this->db->select("epi.*,u.email_verify as verify");
		$this->db->from("employer_personal_info as epi");
		$this->db->join("users as u","u.id=epi.user_id_fk");
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}
	}

	public function verify_user($where){

		$this->db->where($where);
		$this->db->update("users",array("email_verify"=>1));
		return $this->db->affected_rows();
	}
}
