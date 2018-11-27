<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function index(){
		
	}

	public function getUser($where){

		$query = $this->db->get_where('users',$where);
		if($query->num_rows()){
			$result = $query->result()[0];
			return $result;
		}
	}

	public function updateLastLogin($where){

		$this->db->where($where);
		$data = array("last_login"=>date("Y-m-d H:i:s"));
		$this->db->update("users",$data);
		return $this->db->affected_rows();
	}

	public function get_org_info($where){

		$this->db->select("epi.*,(select count(*) from applicant_subscription asub where asub.employer_id_fk=epi.user_id_fk) as followers,(select count(*) from jobs as j where j.emp_id_fk=epi.user_id_fk) as jobsPosted,(select count(*) from jobs as j where j.emp_id_fk=epi.user_id_fk and j.featured=1) as featuredJobs,(select count(*) from messages as m where m.msg_to=epi.user_id_fk and m.date>=u.last_login) as newMsg");
		$this->db->from("employer_personal_info as epi");
		$this->db->join("users as u","epi.user_id_fk=u.id");
		$this->db->where("epi.user_id_fk",$where['user_id_fk']);
		$res = $this->db->get();
		//$res = $this->db->get_where("employer_personal_info",$where);
		$query = $this->db->last_query();
		file_put_contents(dirname(__FILE__)."/query.log", $query);
		if($res->num_rows()){
			$result = $res->result()[0];
			return $result;
		}
	}

	public function get_prnsl_info($where){

		$uid = $where['user_id_fk'];
		$this->db->select("*,(select count(*) from jobs_applied where applicant_id_fk=$uid) as jobsApplied,(select count(*) from applicant_subscription where applicant_id_fk=$uid) as followings");
		$this->db->from("applicant_personal_info");
		$this->db->where($where);
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result()[0];
			return $result;
		}
	}
}
