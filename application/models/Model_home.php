<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model {

	public function index(){
		
	}

	public function getJobCategories($where=null){

		$condition = "jc.id=j.category_fk and j.active=1 and j.deleted=0 and j.approved=1";
		if(!empty($where)){
			if(array_key_exists("jobtype", $where)){
				$type = $where["jobtype"];
				$condition.= " and j.type_fk in($type)"; 
			}
			if(array_key_exists("location", $where)){
				$location = $where['location'];
				//$condition.= " and j.location REGEXP $location";
			}
			if(array_key_exists("keyword", $where)){
				$keyword = $where['keyword'];
				//$condition.= " and j.title REGEXP $keyword";
			}
			if(array_key_exists("minsalary", $where)){
				$minSalary = $where["minsalary"];
				$condition.= " and j.salary> $minSalary";
			}
			if(array_key_exists("maxsalary", $where)){
				$maxSalary = $where["maxsalary"];
				$condition.= " and j.salary< $maxSalary";
			}
		}
		$this->db->select("jc.*,count(j.id) as jobsCount");
		$this->db->from("job_categories as jc");
		$this->db->join("jobs j",$condition,"left",FALSE);
		$this->db->group_by("jc.id");

		/*$this->db->select("jc.*,(select count(*) from jobs as j where j.category_fk=jc.id and j.active=1 and j.deleted=0 and j.approved=1) as jobsCount");
		$this->db->from("job_categories as jc");*/
		$query = $this->db->get();		
		if($query->num_rows()){
			$result = $query->result_array();
			return $result;
		}
	}

	public function checkJobOwner($where){

		$res = $this->db->get_where("jobs",$where);
		return $res->num_rows();
	}

	public function checkCourseOwner($where){
		
		$res = $this->db->get_where("courses",$where);
		return $res->num_rows();
	}

	public function getJobList($where){

		$this->db->select("j.*,(select count(*) from jobs_applied as ja where ja.job_id_fk=j.id) as applications, ei.logo, ei.company_name,jt.job_type,st.salary_type");
		$this->db->from("jobs as j");
		$this->db->join("employer_personal_info as ei","j.emp_id_fk=ei.user_id_fk");
		$this->db->join("job_type as jt","j.type_fk=jt.id");
		$this->db->join("salary_type as st","j.salary_type_fk=st.id");
		$this->db->where("j.deleted",0);
		$this->db->where("j.approved",1);
		$this->db->where("j.active",1);
		$this->db->where("j.featured",0);
		$this->db->order_by("j.id","desc");
		if(array_key_exists("jobcat", $where)){
			$this->db->where_in("j.category_fk",explode(",",$where["jobcat"]));
		}
		if(array_key_exists("jobtype", $where)){
			$this->db->where_in("j.type_fk",explode(",",$where["jobtype"]));
		}
		if(array_key_exists("location", $where)){
			$this->db->where("j.location REGEXP ",$where['location']);
		}
		if(array_key_exists("keyword", $where)){
			$this->db->where("j.title REGEXP ",$where['keyword']);
		}
		if(array_key_exists("minsalary", $where)){
			$this->db->where("j.salary>",$where["minsalary"]);
		}
		if(array_key_exists("maxsalary", $where)){
			$this->db->where("j.salary<",$where["maxsalary"]);
		}
		if(array_key_exists("page", $where)){
			$this->db->limit($where["limit"],$where["page"]);
		}else if(array_key_exists("limit",$where)){
			$this->db->limit($where["limit"]);
		}
		$query = $this->db->get();

		$qry = $this->db->last_query();
		file_put_contents(dirname(__FILE__)."/query.log", $qry);

		if($query->num_rows()){
			$result = $query->result();
			return $result;
		}else{
			return array();
		}
	}

	public function getCourseList($where){

		$this->db->select("epi.company_name,epi.logo,c.*,cc.course_category,ct.course_type,pt.price_type");
		$this->db->from("courses as c");
		$this->db->join("course_categories as cc","c.category_fk=cc.id");
		$this->db->join("course_type as ct","c.course_type_fk=ct.id");
		$this->db->join("price_type as pt","c.price_type_fk=pt.id");
		$this->db->join("employer_personal_info as epi","c.emp_id_fk=epi.user_id_fk");
		$this->db->where("c.deleted",0);
		$this->db->where("c.approved",1);
		$this->db->where("c.active",1);
		$this->db->where("c.featured",0);
		if(array_key_exists("keyword", $where)){
			$this->db->like("c.title",$where['keyword']);
		}
		if(array_key_exists("courseCat", $where)){
			$this->db->where_in("c.category_fk",explode(",",$where['courseCat']));
		}
		if(array_key_exists("courseTypes", $where)){
			$this->db->where_in("c.course_type_fk",explode(",",$where['courseTypes']));
		}
		if(array_key_exists("page", $where)){
			$this->db->limit($where["limit"],$where["page"]);
		}else if(array_key_exists("limit",$where)){
			$this->db->limit($where["limit"]);
		}
		$this->db->order_by("c.id","desc");
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}
	}

	public function getCoursesCount($where){
		
		$this->db->select("epi.company_name,epi.logo,c.*,cc.course_category,ct.course_type,pt.price_type");
		$this->db->from("courses as c");
		$this->db->join("course_categories as cc","c.category_fk=cc.id");
		$this->db->join("course_type as ct","c.course_type_fk=ct.id");
		$this->db->join("price_type as pt","c.price_type_fk=pt.id");
		$this->db->join("employer_personal_info as epi","c.emp_id_fk=epi.user_id_fk");
		$this->db->where("c.deleted",0);
		$this->db->where("c.approved",1);
		$this->db->where("c.active",1);
		$this->db->where("c.featured",0);
		if(array_key_exists("keyword", $where)){
			$this->db->like("c.title",$where['keyword']);
		}
		$this->db->order_by("c.id","desc");
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function getCourseInfo($id){

		$this->db->select("epi.company_name,epi.logo,epi.website_url,epi.address,epi.city,epi.provience,c.*,cc.course_category,ct.course_type,pt.price_type");
		$this->db->from("courses as c");
		$this->db->join("course_categories as cc","c.category_fk=cc.id");
		$this->db->join("course_type as ct","c.course_type_fk=ct.id");
		$this->db->join("price_type as pt","c.price_type_fk=pt.id");
		$this->db->join("employer_personal_info as epi","c.emp_id_fk=epi.user_id_fk");
		$this->db->where("c.deleted",0);
		$this->db->where("c.id",$id);
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result()[0];
			return $result;
		}else{
			return false;
		}
	}

	public function getJobDetails($id){

		$this->db->select("j.*,jt.job_type,st.salary_type,je.job_experience,jc.job_category,epi.logo,epi.company_name,epi.email,epi.phone,epi.website_url,epi.address,epi.city,epi.country");
		$this->db->from("jobs as j");
		$this->db->join("employer_personal_info as epi","j.emp_id_fk=epi.user_id_fk");
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

	public function getAllCompanies($id){

		$this->db->select("*");
		$this->db->from("employer_personal_info");
		$this->db->where("user_id_fk!=",$id);
		$query = $this->db->get();	
		if($query->num_rows()){
			$result = $query->result_array();
			return $result;
		}else{
			return false;
		}
	}

	public function get_job_titles($key){

		$this->db->distinct();
		$this->db->select("job_category as title");
		$this->db->from("job_keywords");
		$this->db->like("job_category",$key,"after");
		$this->db->limit(6);

		/*$this->db->distinct();
		$this->db->select("title");
		$this->db->from("jobs");
		$this->db->where("deleted",0);
		$this->db->where("approved",1);
		$this->db->where("active",1);
		$this->db->where("featured",0);
		$this->db->like("title",$key,"after");
		$this->db->limit(6);*/
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return 0;
		}
	}

	public function get_course_titles($key){

		$this->db->distinct();
		$this->db->select("title");
		$this->db->from("courses");
		$this->db->where("deleted",0);
		$this->db->where("approved",1);
		$this->db->where("active",1);
		$this->db->where("featured",0);
		$this->db->like("title",$key,"after");
		$this->db->limit(6);
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return 0;
		}
	}

	public function getCompanyInfo($id){

		$this->db->select("epi.*,(select count(*) from applicant_subscription asub where asub.employer_id_fk=epi.user_id_fk) as followers,(select count(*) from jobs as j where j.emp_id_fk=epi.user_id_fk) as jobsPosted");
		$this->db->from("employer_personal_info as epi");
		$this->db->join("users as u","epi.user_id_fk=u.id");
		$this->db->where("epi.user_id_fk",$id);
		$res = $this->db->get();
		/*$where = array("user_id_fk"=>$id);
		$res = $this->db->get_where("employer_personal_info",$where);*/
		if($res->num_rows()){
			$result = $res->result()[0];
			return $result;
		}else{
			return 0;
		}
	}

	public function get_candidates($where){

		$eid = array_key_exists("eid", $where)?$where["eid"]:0;
		$this->db->select("api.*,GROUP_CONCAT(name SEPARATOR ',') as skills,(select count(*) from shortlisted_candidate as sc where sc.applicant_id_fk=api.user_id_fk and sc.employer_id_fk=$eid) as shortlisted,jc.job_category as trade");
		$this->db->from("applicant_personal_info as api");
		$this->db->join("users as u","api.user_id_fk=u.id");
		$this->db->join("job_categories as jc","jc.id=api.trade_fk");
		$this->db->join("applicant_skills as askill","askill.applicant_id_fk=api.user_id_fk","left");
		$this->db->where("u.role",2);
		if(array_key_exists("id", $where)){
			$this->db->where("u.id!=",$where["id"]);
		}
		if(array_key_exists("candidateCat", $where)){
			$this->db->where_in("api.trade_fk",explode(",",$where["candidateCat"].",1"));
		}
		$this->db->group_by("api.user_id_fk");
		if(array_key_exists("keyword", $where)){
			$this->db->having('trade REGEXP ',$where["keyword"]."|any");
			$this->db->or_having('skills REGEXP ',$where["keyword"]);
		}
		if(array_key_exists("page", $where)){
			$this->db->limit($where["limit"],$where["page"]);	
		}else{
			$this->db->limit($where["limit"]);
		}		
		$query = $this->db->get();
		if($query->num_rows()){
			$result = $query->result();
			return $result;
		}else{
			return false;
		}
	}

	public function getCandidatesCount($where){

		$eid = array_key_exists("eid", $where)?$where["eid"]:0;
		$this->db->select("api.*,GROUP_CONCAT(name SEPARATOR ',') as skills,(select count(*) from shortlisted_candidate as sc where sc.applicant_id_fk=api.user_id_fk and sc.employer_id_fk=$eid) as shortlisted,jc.job_category as trade");
		$this->db->from("applicant_personal_info as api");
		$this->db->join("users as u","api.user_id_fk=u.id");
		$this->db->join("job_categories as jc","jc.id=api.trade_fk");
		$this->db->join("applicant_skills as askill","askill.applicant_id_fk=api.user_id_fk","left");
		$this->db->where("u.role",2);
		if(array_key_exists("id", $where)){
			$this->db->where("u.id!=",$where["id"]);
		}
		if(array_key_exists("candidateCat", $where)){
			$this->db->where_in("api.trade_fk",explode(",",$where["candidateCat"]));
		}
		$this->db->group_by("api.user_id_fk");
		if(array_key_exists("keyword", $where)){
			$this->db->having('trade REGEXP ',$where["keyword"]);
			$this->db->or_having('skills REGEXP ',$where["keyword"]);
		}
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function getCandidateCats($where){

		$condition = "jc.id=api.trade_fk and api.active=1";
		if(array_key_exists("keyword", $where)){
			$keyword = $where["keyword"];
			$condition.= " and jc.job_category REGEXP '$keyword'";
		}
		$this->db->select("jc.*,(select count(api.id) from applicant_personal_info as api where $condition) as userCount");
		$this->db->from("job_categories as jc");
		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}
	}

	public function get_prnsl_info($where){

		$res = $this->db->get_where("applicant_personal_info",$where);
		if($res->num_rows()){
			$result = $res->result()[0];
			return $result;
		}
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

	public function getApplyStatus($where){

		$res = $this->db->get_where("jobs_applied",$where);
		if($res->num_rows()){
			return true;
		}else{
			return false;
		}
	}

	public function getBookmarkStatus($where){

		$res = $this->db->get_where("bookmarked_jobs",$where);
		if($res->num_rows()){
			return true;
		}else{
			return false;
		}
	}

	public function getShortlistStatus($where){
		
		$res = $this->db->get_where("shortlisted_candidate",$where);
		if($res->num_rows()){
			return true;
		}else{
			return false;
		}
	}

	public function getCourseStatus($where){

		$res = $this->db->get_where("shortlisted_courses",$where);
		if($res->num_rows()){
			return true;
		}else{
			return false;
		}
	}

	public function getJobsCount($where){

		$this->db->select("j.*,(select count(*) from jobs_applied as ja where ja.job_id_fk=j.id) as applications, ei.logo, ei.company_name,jt.job_type,st.salary_type");
		$this->db->from("jobs as j");
		$this->db->join("employer_personal_info as ei","j.emp_id_fk=ei.user_id_fk");
		$this->db->join("job_type as jt","j.type_fk=jt.id");
		$this->db->join("salary_type as st","j.salary_type_fk=st.id");
		$this->db->where("j.deleted",0);
		$this->db->where("j.approved",1);
		$this->db->where("j.active",1);
		$this->db->where("j.featured",0);
		$this->db->order_by("j.id","desc");
		if(array_key_exists("jobcat", $where)){
			$this->db->where_in("j.category_fk",explode(",",$where["jobcat"]));
		}
		if(array_key_exists("jobtype", $where)){
			$this->db->where_in("j.type_fk",explode(",",$where["jobtype"]));
		}
		if(array_key_exists("location", $where)){
			$this->db->where("j.location REGEXP ",$where['location']);
		}
		if(array_key_exists("keyword", $where)){
			$this->db->where("j.title  REGEXP ",$where['keyword']);
		}
		if(array_key_exists("minsalary", $where)){
			$this->db->where("j.salary>",$where["minsalary"]);
		}
		if(array_key_exists("maxsalary", $where)){
			$this->db->where("j.salary<",$where["maxsalary"]);
		}
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function verify_code($where){

		$res = $this->db->get_where("users",$where);
		if($res->num_rows()){
			$result = $res->result()[0];
			return $result;
		}else{
			return false;
		}
	}

	public function set_verified($data,$where){

		$this->db->where($where);
		$this->db->update("users",$data);
		return $this->db->affected_rows();
	}

	public function isEmailExist($where){

		$res = $this->db->get_where("users",$where);
		if($res->num_rows()){
			$result = $res->result()[0];
			return $result;
		}else{
			return false;
		}
	}

	public function insertResetCode($data,$where){

		$this->db->where($where);
		$this->db->update("users",$data);
		return $this->db->affected_rows();
	}

	public function update_password($data,$where){

		$this->db->where($where);
		$this->db->update("users",$data);
		return $this->db->affected_rows();
	}

	public function getJobTypes($where=null){

		$condition = "jt.id=j.type_fk and j.active=1 and j.deleted=0 and j.approved=1";
		if(array_key_exists("jobcat", $where)){
			$categories = $where["jobcat"];
			$condition.= " and j.category_fk in($categories)"; 
		}
		if(array_key_exists("location", $where)){
			$location = $where['location'];
			//$condition.= " and j.location REGEXP $location";
		}
		if(array_key_exists("keyword", $where)){
			$keyword = $where['keyword'];
			//$condition.= " and j.title REGEXP $keyword";
		}
		if(array_key_exists("minsalary", $where)){
			$minSalary = $where["minsalary"];
			$condition.= " and j.salary> $minSalary";
		}
		if(array_key_exists("maxsalary", $where)){
			$maxSalary = $where["maxsalary"];
			$condition.= " and j.salary< $maxSalary";
		}

		$this->db->select("jt.*,count(j.id) as jobsCount");
		$this->db->from("job_type as jt");
		$this->db->join("jobs as j",$condition,"left");
		$this->db->group_by("jt.id");

		/*$this->db->select("jt.*,(select count(*) from jobs as j where j.type_fk=jt.id and j.active=1 and j.deleted=0 and j.approved=1) as jobsCount");
		$this->db->from("job_type as jt");*/

		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}
	}

	public function getCourseCategories($where){

		$condition = "cc.id=c.category_fk and c.active=1 and c.deleted=0 and c.approved=1";
		if(array_key_exists("keyword", $where)){
			$keyword = $where["keyword"];
			$condition = $condition." and c.title like '%$keyword%'";
		}
		if(array_key_exists("courseTypes", $where)){
			$type = $where["courseTypes"];
			$condition = $condition." and c.course_type_fk in ($type)";
		}
		$this->db->select("cc.*,count(c.id) as coursesCount");
		$this->db->from("course_categories as cc");
		$this->db->join("courses as c",$condition,"left");
		$this->db->group_by("cc.id");
/*
		$this->db->select("cc.*,(select count(*) from courses as c where c.category_fk=cc.id and c.active=1 and c.deleted=0 and c.approved=1) as coursesCount");
		$this->db->from("course_categories as cc");*/
		$query = $this->db->get();		
		if($query->num_rows()){
			$result = $query->result_array();
			return $result;
		}

	}
	public function getCourseTypes($where){

		$condition = "ct.id=c.course_type_fk and c.active=1 and c.deleted=0 and c.approved=1";
		if(array_key_exists("keyword", $where)){
			$keyword = $where["keyword"];
			$condition = $condition." and c.title like '%$keyword%'";
		}
		if(array_key_exists("courseCat", $where)){
			$categories = $where["courseCat"];
			$condition = $condition." and c.category_fk in ($categories)";
		}
		$this->db->select("ct.*,count(c.id) as coursesCount");
		$this->db->from("course_type as ct");
		$this->db->join("courses as c",$condition,"left");
		$this->db->group_by("ct.id");

		/*$this->db->select("ct.*,(select count(*) from courses as c where c.course_type_fk=ct.id and c.active=1 and c.deleted=0 and c.approved=1) as coursesCount");
		$this->db->from("course_type as ct");*/

		$res = $this->db->get();
		if($res->num_rows()){
			$result = $res->result();
			return $result;
		}else{
			return false;
		}

	}

	public function getSubscribedStatus($where){

		$res = $this->db->get_where("applicant_subscription",$where);
		return $res->num_rows();
	}

}
