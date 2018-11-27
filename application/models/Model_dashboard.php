<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_Model {

	public function index(){
		
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

	public function update_org_info($data,$where){

		$res = $this->db->update("employer_personal_info",$data,$where);
		return $this->db->affected_rows();
	}

	public function insertJob($data){

		$this->db->insert("jobs",$data);
		return $this->db->insert_id();
	}

	public function updateJob($data,$where){

		$this->db->update("jobs",$data,$where);
		return $this->db->affected_rows();
	}

	public function getJobList($empId){

		$this->db->select("j.*,(select count(*) from jobs_applied as ja where ja.job_id_fk=j.id) as applications,jt.job_type,st.salary_type");
		$this->db->from("jobs as j");
		$this->db->join("job_type as jt","j.type_fk=jt.id");
		$this->db->join("salary_type as st","j.salary_type_fk=st.id");
		$this->db->where("j.deleted<>",1);
		$this->db->where("j.emp_id_fk",$empId);
		$this->db->order_by("j.id","desc");
		$query = $this->db->get();
		if($query->num_rows()){
			$result = $query->result();
			return $result;
		}else{
			return false;
		}

	}

	public function getSingleJob($id){

		$this->db->select("j.*,jt.job_type,st.salary_type,je.job_experience,jc.job_category");
		$this->db->from("jobs as j");
		$this->db->join("job_type as jt","j.type_fk=jt.id");
		$this->db->join("salary_type as st","j.salary_type_fk=st.id");
		$this->db->join("job_experience as je","j.experience_fk=je.id");
		$this->db->join("job_categories as jc","j.category_fk=jc.id");
		$this->db->where("j.id",$id,FALSE);
		$query = $this->db->get();
		if($query->num_rows()){
			$result = $query->result()[0];
			return $result;
		}else{
			return false;
		}
	}

	public function getJobType(){

		$res = $this->db->get("job_type");
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}
	}

	public function getJobExperience(){

		$res = $this->db->get("job_experience");
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}
	}

	public function getJobSalary(){

		$res = $this->db->get("expected_salary");
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}
	}

	public function getSalaryType(){

		$res = $this->db->get("salary_type");
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}
	}

	public function deleteJob($where){

		$data = array("deleted"=>1);
		$this->db->update("jobs",$data,$where);
		return $this->db->affected_rows();
	}

	public function get_followers($id){

		$this->db->select("api.*");
		$this->db->from("applicant_subscription as asub");
		$this->db->join("applicant_personal_info as api","asub.applicant_id_fk=api.user_id_fk");
		$this->db->where("asub.employer_id_fk",$id);
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}
	}

	public function InsertShortlist($data){
		
		$res = $this->db->get_where("shortlisted_candidate",$data);
		if($res->num_rows()){
			return false;
		}else{
			$this->db->insert("shortlisted_candidate",$data);
			return $this->db->insert_id();	
		}
	}

	public function getShortlisted($id){

		$this->db->select("*");
		$this->db->from("shortlisted_candidate as sc");
		$this->db->join("applicant_personal_info as api","api.user_id_fk=sc.applicant_id_fk");
		$this->db->where("sc.employer_id_fk",$id);
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}
	}

	public function deleteShortlist($where){

		$this->db->where($where);
		$this->db->delete("shortlisted_candidate");
		return $this->db->affected_rows();
	}

	public function insertMessage($data){

		$this->db->insert("messages",$data);
		return $this->db->insert_id();
	}

	public function getUnreadMsg($where){

		$this->db->select("count(*) as msgCount");
		$this->db->from('messages');
		$this->db->where($where);
		$this->db->where("seen",0);
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}
	}

	public function update_msg_seen($to,$from){

		$where = array("msg_to"=>$to,"msg_from"=>$from);

		$this->db->where($where);
		$this->db->update("messages",array("seen"=>1));
		return $this->db->affected_rows();
	}

	public function getMessages($id){

		$this->db->select("m.*,SUM(CASE WHEN m.seen = 0 THEN 1 ELSE 0 END) as msgCount,api.first_name,api.last_name");
		$this->db->from("messages as m");
		$this->db->join("applicant_personal_info as api","api.user_id_fk=m.msg_from");
		$this->db->where("m.msg_to",$id);
		$this->db->where("m.deleted",0);
		$this->db->group_by("m.msg_from");
		$this->db->order_by("m.id","desc");
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}
	}

	public function load_messages($to,$from){

		$res = $this->db->query("select m.*,DATE_FORMAT(m.date,'%r %c %b %y') as time,api.first_name,api.last_name,api.profile_image,(select logo from employer_personal_info where user_id_fk=$to) as logo from messages as m join applicant_personal_info as api on api.user_id_fk=$from where m.deleted = 0 and (m.msg_to=$to and m.msg_from=$from) or (m.msg_from=$to and m.msg_to=$from) order by m.id asc");
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}
	}

	public function deleteMsg($where){

		$data = array("deleted"=>1);
		$this->db->update("messages",$data,$where);
		return $this->db->affected_rows();
	}

	public function getJobApplicants($where){

		$this->db->select("api.*,GROUP_CONCAT(name SEPARATOR ',') as skills,jc.job_category as trade");
		$this->db->from("jobs_applied as ja");
		$this->db->join("applicant_personal_info as api","ja.applicant_id_fk=api.user_id_fk");
		$this->db->join("job_categories as jc","jc.id=api.trade_fk");	
		$this->db->join("applicant_skills as askill","askill.applicant_id_fk=ja.applicant_id_fk","left");
		$this->db->where("ja.job_id_fk",$where['job_id']);
		$this->db->group_by("ja.id");
		if(array_key_exists("keyword", $where)){
			$this->db->having('trade REGEXP ',$where["keyword"]);
			$this->db->or_having('skills REGEXP ',$where["keyword"]);
		}
		$this->db->limit($where["limit"],$where["page"]);
		$query = $this->db->get();
		if($query->num_rows()){
			$result = $query->result();
			return $result;
		}else{
			return false;
		}

		/*$this->db->select("api.*");
		$this->db->from("jobs_applied as ja");
		$this->db->join("applicant_personal_info as api","ja.applicant_id_fk=api.user_id_fk");
		$this->db->where("ja.job_id_fk",$where['job_id']);
		$res = $this->db->get();

		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}*/
	}

	public function totalJobApplicants($where){

		$this->db->select("api.*,GROUP_CONCAT(name SEPARATOR ',') as skills,jc.job_category as trade");
		$this->db->from("jobs_applied as ja");
		$this->db->join("applicant_personal_info as api","ja.applicant_id_fk=api.user_id_fk");
		$this->db->join("job_categories as jc","jc.id=api.trade_fk");	
		$this->db->join("applicant_skills as askill","askill.applicant_id_fk=ja.applicant_id_fk","left");
		$this->db->where("ja.job_id_fk",$where['job_id']);
		$this->db->group_by("ja.id");
		if(array_key_exists("keyword", $where)){
			$this->db->having('trade REGEXP ',$where["keyword"]);
			$this->db->or_having('skills REGEXP ',$where["keyword"]);
		}
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function check_password($where){

		$query = $this->db->get_where("users",$where);
		return $query->num_rows();
	}

	public function update_password($data,$where){

		$this->db->where($where);
		$this->db->update("users",$data);
		return $this->db->affected_rows();
	}

	public function get_course_type(){

		$res = $this->db->get("course_type");
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}
	}

	public function get_price_type(){

		$res = $this->db->get("price_type");
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}
	}

	public function get_course_categories(){

		$res = $this->db->get("course_categories");
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}
	}

	public function insertCourse($data){

		$this->db->insert("courses",$data);
		return $this->db->insert_id();
	}

	public function getCourses($where){

		$this->db->select("epi.company_name,epi.logo,c.*,cc.course_category,ct.course_type,pt.price_type");
		$this->db->from("courses as c");
		$this->db->join("course_categories as cc","c.category_fk=cc.id");
		$this->db->join("course_type as ct","c.course_type_fk=ct.id");
		$this->db->join("price_type as pt","c.price_type_fk=pt.id");
		$this->db->join("employer_personal_info as epi","c.emp_id_fk=epi.user_id_fk");
		$this->db->where("c.emp_id_fk",$where["emp_id_fk"]);
		$this->db->where("c.deleted",0);
		$this->db->order_by("c.id","desc");
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}
	}

	public function get_course($where){

		$res = $this->db->get_where("courses",$where);
		if($res->num_rows()){
			$result = $res->result()[0];
			return $result;
		}else{
			return false;
		}
	}

	public function deleteCourse($where){

		$this->db->where($where);
		$this->db->update("courses",array("deleted"=>1));
		return $this->db->affected_rows();
	}

	public function updateCourse($data,$where){

		$this->db->where($where);
		$this->db->update("courses",$data);
		return $this->db->affected_rows();
	}

	public function get_applicant_info($where){

		$res = $this->db->get_where("applicant_personal_info",$where);
		if($res->num_rows()){
			$result = $res->result()[0];
			return $result;
		}else{
			return false;
		}
	}
}
