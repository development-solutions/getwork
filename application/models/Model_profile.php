<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_profile extends CI_Model {

	public function index(){
		
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

	public function update_prsnl_info($data,$where){

		$res = $this->db->update("applicant_personal_info",$data,$where);
		return $this->db->affected_rows();
	}

	public function insertJob($data){

		$res = $this->db->get_where("jobs_applied",$data);
		if($res->num_rows()){
			return false;
		}else{
			$this->db->insert("jobs_applied",$data);
			return $this->db->insert_id();	
		}		
	}

	public function bookmark_job($data){

		$res = $this->db->get_where("bookmarked_jobs",$data);
		if($res->num_rows()){
			return false;
		}else{
			$this->db->insert("bookmarked_jobs",$data);
			return $this->db->insert_id();	
		}		
	}

	public function removeBookmark($where){

		$this->db->where($where);
		$this->db->delete("bookmarked_jobs");
		return $this->db->affected_rows();
	}

	public function insertSubscription($data){

		$res = $this->db->get_where("applicant_subscription",$data);
		if($res->num_rows()){
			return false;
		}else{
			$this->db->insert("applicant_subscription",$data);
			return $this->db->insert_id();	
		}		
	}

	public function getJobs($id){

		$this->db->select("j.*,(select count(*) from jobs_applied as ja where ja.job_id_fk=j.id) as applications,epi.logo, epi.address,jt.job_type,st.salary_type");
		$this->db->from("jobs_applied as ja");
		$this->db->join("jobs as j","j.id=ja.job_id_fk");
		$this->db->join("employer_personal_info as epi","j.emp_id_fk=epi.user_id_fk");
		$this->db->join("job_type as jt","j.type_fk=jt.id");
		$this->db->join("salary_type as st","j.salary_type_fk=st.id");
		$this->db->where("ja.applicant_id_fk",$id);
		$this->db->where("j.deleted<>",1);
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}
	}

	public function getBookmarked($id){

		$this->db->select("j.*,(select count(*) from jobs_applied as ja where ja.job_id_fk=j.id) as applications,epi.logo, epi.address,jt.job_type,st.salary_type");
		$this->db->from("bookmarked_jobs as bj");
		$this->db->join("jobs as j","j.id=bj.job_id_fk");
		$this->db->join("employer_personal_info as epi","j.emp_id_fk=epi.user_id_fk");
		$this->db->join("job_type as jt","j.type_fk=jt.id");
		$this->db->join("salary_type as st","j.salary_type_fk=st.id");
		$this->db->where("bj.applicant_id_fk",$id);
		$this->db->where("j.deleted<>",1);
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}
	}

	public function eduInsert($data){

		$this->db->insert_batch("applicant_education",$data);
		return $this->db->insert_id();
	}

	public function expInsert($data){

		$this->db->insert_batch("applicant_experience",$data);
		return $this->db->insert_id();
	}

	public function skillInsert($data){

		$this->db->insert_batch("applicant_skills",$data);
		return $this->db->insert_id();
	}

	public function eduUpdate($data){
		
		foreach ($data as $key => $value) {
			$uid = $value["applicant_id_fk"];
			unset($value["applicant_id_fk"]);

			$this->db->where(array("applicant_id_fk"=>$uid,"id"=>$value["id"]));
			$this->db->update("applicant_education",$value);
		}
		return $this->db->affected_rows();
	}

	public function expUpdate($data){
		
		foreach ($data as $key => $value) {
			$uid = $value["applicant_id_fk"];
			unset($value["applicant_id_fk"]);

			$this->db->where(array("applicant_id_fk"=>$uid,"id"=>$value["id"]));
			$this->db->update("applicant_experience",$value);
		}
		return $this->db->affected_rows();
	}

	public function skillUpdate($data){
		
		foreach ($data as $key => $value) {
			$uid = $value["applicant_id_fk"];
			unset($value["applicant_id_fk"]);

			$this->db->where(array("applicant_id_fk"=>$uid,"id"=>$value["id"]));
			$this->db->update("applicant_skills",$value);
		}
		return $this->db->affected_rows();
	}

	public function get_education($where){

		$this->db->select("*");
		$this->db->from("applicant_education");
		$this->db->where($where);
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}
	}
	public function get_experience($where){

		$this->db->select("*");
		$this->db->from("applicant_experience");
		$this->db->where($where);
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}
	}
	public function get_skills($where){

		$this->db->select("*");
		$this->db->from("applicant_skills");
		$this->db->where($where);
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}
	}

	public function delete_edu($where){

		$this->db->where($where);
		$this->db->delete("applicant_education");
		return $this->db->affected_rows();
	}
	public function delete_exp($where){

		$this->db->where($where);
		$this->db->delete("applicant_experience");
		return $this->db->affected_rows();
	}

	public function delete_skill($where){

		$this->db->where($where);
		$this->db->delete("applicant_skills");
		return $this->db->affected_rows();
	}

	public function getSubscribedOrg($id){

		$this->db->select("*,(select count(*) from jobs as j where j.emp_id_fk=epi.user_id_fk) as totalJobs");
		$this->db->from("applicant_subscription as asub");
		$this->db->join("employer_personal_info as epi","asub.employer_id_fk=epi.user_id_fk");
		$this->db->where("asub.applicant_id_fk",$id);
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}
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

	public function getMessages($where){

		$this->db->select("m.*,SUM(CASE WHEN m.seen = 0 THEN 1 ELSE 0 END) as msgCount, epi.company_name,epi.logo");
		$this->db->from("messages as m");
		$this->db->join("employer_personal_info as epi","epi.user_id_fk=m.msg_from");
		$this->db->where("m.msg_to",$where["msg_to"]);
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

		$res = $this->db->query("select m.*,DATE_FORMAT(m.date,'%r %c %b %y') as time,epi.company_name,epi.logo,(select profile_image from applicant_personal_info where user_id_fk=$to) as profile_image from messages as m join employer_personal_info as epi on epi.user_id_fk=$from where m.deleted = 0 and (m.msg_to=$to and m.msg_from=$from) or (m.msg_from=$to and m.msg_to=$from) order by m.id asc");
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

	public function insertMessage($data){

		$this->db->insert("messages",$data);
		return $this->db->insert_id();
	}

	public function deleteMsg($where){

		$data = array("deleted"=>1);
		$this->db->update("messages",$data,$where);
		return $this->db->affected_rows();
	}

	public function emailExist($where){

		$res = $this->db->get_where("users",$where);
		return $res->num_rows();

	}

	public function updateUsers($data,$where){

		$this->db->where($where);
		$this->db->update("users",$data);
		return $this->db->affected_rows();
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

	public function shortlistCourse($data){

		$res = $this->db->get_where("shortlisted_courses",$data);
		if($res->num_rows()){
			return false;
		}else{
			$this->db->insert("shortlisted_courses",$data);
			return $this->db->insert_id();	
		}
	}

	public function getShortlistedCourses($id){

		$this->db->select("epi.company_name,epi.logo,c.*,cc.course_category,ct.course_type,pt.price_type");
		$this->db->from("courses as c");
		$this->db->join("course_categories as cc","c.category_fk=cc.id");
		$this->db->join("course_type as ct","c.course_type_fk=ct.id");
		$this->db->join("price_type as pt","c.price_type_fk=pt.id");
		$this->db->join("employer_personal_info as epi","c.emp_id_fk=epi.user_id_fk");
		$this->db->join("shortlisted_courses as sc","sc.course_id_fk=c.id");
		$this->db->where("sc.applicant_id_fk",$id);
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

	public function removeCourse($where){

		$this->db->where($where);
		$this->db->delete("shortlisted_courses");
		return $this->db->affected_rows();
	}

	public function getJobDetails($where){

		$res = $this->db->get_where("jobs",$where);
		if($res->num_rows()){
			$result = $res->result()[0];
			return $result;
		}else{
			return false;
		}
	}
	public function getCompanyDetails($where){

		$res = $this->db->get_where("employer_personal_info",$where);
		if($res->num_rows()){
			$result = $res->result()[0];
			return $result;
		}else{
			return false;
		}
	}

	public function getCourseDetails($id){

		$this->db->select("c.title,epi.first_name,epi.last_name,epi.email");
		$this->db->from("courses as c");
		$this->db->join("employer_personal_info as epi","c.emp_id_fk=epi.user_id_fk");
		$this->db->where("c.id",$id);
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result()[0];
			return $result;
		}else{
			return false;
		}

	}
}
