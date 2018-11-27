<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	private $NAVBAR;
	private $USER;

	function __construct(){
		parent::__construct();
		$this->load->library("pagination");
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('email');
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->load->Model("Model_login");
		$this->load->Model('Model_home');
		if($this->session->has_userdata('logged_in')){
			if($this->session->role==2){
				$this->USER = $this->Model_login->get_prnsl_info(array("user_id_fk"=>$this->session->uid));
				$this->NAVBAR = "applicant_navigation";
			}else if($this->session->role==3){
				$this->USER = $this->Model_login->get_org_info(array("user_id_fk"=>$this->session->uid));
				$this->NAVBAR = "employer_navigation";
			}
		}
	}

	public function index()
	{
		$where = array("limit"=>5);
		$jobs = $this->Model_home->getJobList($where);
		$courses = $this->Model_home->getCourseList($where);

		$data = array(
			"navbar"	=>	$this->NAVBAR,
			"user"		=>	$this->USER,
			"userType"	=>	$this->session->role,
			"jobs"		=>	$jobs,
			"courses"	=>	$courses
		);
		$this->twig->display('home', $data);
	}

	public function jobs(){

		if(empty($this->uri->segment(3)) || $this->input->post("search")){
			$this->session->unset_userdata(array('searchKeyWord', 'searchLocation','searchJobCat','searchJobType','searchMinSalary','searchMaxSalary'));
		}

		$where = array();
		if($this->input->post("keyword")){
			$keyword = explode(" ",$this->input->post("keyword"));
			$where["keyword"] = implode("|", $keyword);
			$this->session->set_userdata(array("searchKeyWord"=>$this->input->post("keyword")));
		}elseif($this->session->has_userdata("searchKeyWord")){
			$keyword = explode(" ", $this->session->searchKeyWord);
			$where["keyword"] = implode("|", $keyword);
		}

		if($this->input->post('location')){
			$location = explode(",",$this->input->post("location"));
			$where["location"] = implode("|", $location);
			$this->session->set_userdata(array("searchLocation"=>$this->input->post("location")));
		}elseif($this->session->has_userdata("searchLocation")){
			$location = explode(",", $this->session->searchLocation);
			$where["location"] = implode("|", $location);
		}

		if($this->input->post("jobcat")){
			$where["jobcat"]	= $this->input->post("jobcat");
			$this->session->set_userdata(array("searchJobCat"=>$this->input->post("jobcat")));
		}elseif($this->session->has_userdata("searchJobCat")){
			$where["jobcat"] = $this->session->searchJobCat;
		}

		if($this->input->post("jobtype")){
			$where["jobtype"]	= $this->input->post("jobtype");
			$this->session->set_userdata(array("searchJobType"=>$this->input->post("jobtype")));
		}elseif($this->session->has_userdata("searchJobType")){
			$where["jobtype"] = $this->session->searchJobType;
		}

		if($this->input->post("minsalary")){
			$where["minsalary"]	= $this->input->post("minsalary");
			$this->session->set_userdata(array("searchMinSalary"=>$this->input->post("minsalary")));
		}elseif($this->session->has_userdata("searchMinSalary")){
			$where["minsalary"] = $this->session->searchMinSalary;
		}

		if($this->input->post("maxsalary")){
			$where["maxsalary"]	= $this->input->post("maxsalary");
			$this->session->set_userdata(array("searchMaxSalary"=>$this->input->post("maxsalary")));
		}elseif($this->session->has_userdata("searchMaxSalary")){
			$where["maxsalary"] = $this->session->searchMaxSalary;
		}

		$config = array();
        $config["base_url"] = base_url() . "home/jobs";
        $config["total_rows"] = $this->Model_home->getJobsCount($where); //$this->getJobsCount($where);
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $config["cur_tag_open"] = "<a class='active'>";
        $config["cur_tag_close"] = "</a>";
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $where["limit"] = $config["per_page"];
        $where["page"] = $page;

		$jobs		=	$this->Model_home->getJobList($where);
		/*$indeed 	=	$this->getIndeedJobs($where);
		$jobs 		=	array_merge($myjobs,$indeed);*/
		$categories	=	$this->Model_home->getJobCategories($where);
		$jobTypes	=	$this->Model_home->getJobTypes($where);
		$data		=	array(
			"navbar"			=>	$this->NAVBAR,
			"user"				=>	$this->USER,
			"jobs"				=>	$jobs,
			"categories"		=>	$categories,
			"jobTypes"			=>	$jobTypes,
			"keyword" 			=>	$this->session->searchKeyWord,
			"location"			=>	$this->session->searchLocation,
			"searchCategories"	=>	$this->session->searchJobCat,
			"searchJobtype"		=>	$this->session->searchJobType,
			"searchMinSalary"	=>	$this->session->searchMinSalary,
			"searchMaxSalary"	=>	$this->session->searchMaxSalary,
			"totalResult"		=>	$config["total_rows"],
			"links"				=>	$this->pagination->create_links()
		);
		if($this->input->post("search")){
			$template = $this->twig->render("job_search", $data);
			echo $template;
		}else{
			$this->twig->display('job_list', $data);
		}
	}

	public function courses(){

		if(empty($this->uri->segment(3)) || $this->input->post("search")){
			$this->session->unset_userdata(array("searchKeyWord","searchCourseCat","searchCourseTypes"));
		}
		$where = array();
		if($this->input->post("keyword")){
			$where["keyword"] = $this->input->post("keyword");
			$this->session->set_userdata(array("searchKeyWord"=>$this->input->post("keyword")));
		}elseif($this->session->has_userdata("searchKeyWord")){
			$where["keyword"] = $this->session->searchKeyWord;
		}
		if($this->input->post("courseCat")){
			$where["courseCat"]	= $this->input->post("courseCat");
			$this->session->set_userdata(array("searchCourseCat"=>$this->input->post("courseCat")));
		}elseif($this->session->has_userdata("searchCourseCat")){
			$where["courseCat"] = $this->session->searchCourseCat;
		}
		if($this->input->post("courseTypes")){
			$where["courseTypes"] = $this->input->post("courseTypes");
			$this->session->set_userdata(array("searchCourseTypes"=>$this->input->post("courseTypes")));	
		}elseif($this->session->has_userdata("searchCourseTypes")){
			$where["courseTypes"] = $this->session->searchCourseTypes;
		}

		$config = array();
        $config["base_url"] = base_url() . "home/courses";
        $config["total_rows"] = $this->Model_home->getCoursesCount($where);
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config["cur_tag_open"] = "<a class='active'>";
        $config["cur_tag_close"] = "</a>";
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $where["limit"] = $config["per_page"];
        $where["page"] = $page;

		$courses = $this->Model_home->getCourseList($where);
		$categories	=	$this->Model_home->getCourseCategories($where);
		$courseTypes	=	$this->Model_home->getCourseTypes($where);

		$data = array(
			"navbar"			=>	$this->NAVBAR,
			"user"				=>	$this->USER,
			"courses"			=>	$courses,
			"categories"		=>	$categories,
			"courseTypes"		=>	$courseTypes,
			"userType"			=>	$this->session->role,
			"keyword"			=>	$this->session->searchKeyword,
			"searchCategories"	=>	$this->session->searchCourseCat,
			"searchCoursetype"	=>	$this->session->searchCourseTypes,
			"links"				=>	$this->pagination->create_links()
		);
		if($this->input->post('search')){
			$template = $this->twig->render('course_search', $data);
			echo $template;
		}else{
			$this->twig->display('course_list', $data);
		}
	}

	public function courseinfo($id){
		if(empty($id))
			redirect("/");
		$where = array(
			"applicant_id_fk"	=>	$this->session->uid,
			"course_id_fk"		=>	$id
		);
		$status = $this->Model_home->getCourseStatus($where);
		$course = $this->Model_home->getCourseInfo($id);
		$data = array(
			"navbar"		=>	$this->NAVBAR,
			"user"			=>	$this->USER,
			"course"		=>	$course,
			"userType"		=>	$this->session->role,
			"shortlisted"	=>	$status
		);
		if($this->session->has_userdata('logged_in') && $this->session->role==3){
			$where = array(
				"emp_id_fk"	=>	$this->session->uid,
				"id"		=>	$id
			);
			$myCourse = $this->Model_home->checkCourseOwner($where);
			if($myCourse){
				$data["myCourse"]		=	true;
			}
		}
		
		$this->twig->display("courseinfo",$data);
	}

	public function jobdetails($id){

		if(empty($id)){
			redirect("/home/jobs");
		}

		$data = array(
			"navbar"=>	$this->NAVBAR,
			"user"	=>	$this->USER
		);
		if($this->session->has_userdata('logged_in') && $this->session->role==2){
			$where = array(
				"applicant_id_fk"	=>	$this->session->uid,
				"job_id_fk"			=>	$id
			);
			$apply		=	$this->Model_home->getApplyStatus($where);
			$bookmark	=	$this->Model_home->getBookmarkStatus($where);
			$data["applied"]	=	$apply;
			$data["bookmark"]	=	$bookmark;
			$data["userType"]	=	2;
			$data["logged_in"]	=	true;
		}
		if($this->session->has_userdata('logged_in') && $this->session->role==3){
			$where = array(
				"emp_id_fk"	=>	$this->session->uid,
				"id"		=>	$id
			);
			$myJob = $this->Model_home->checkJobOwner($where);
			if($myJob){
				$data["myJob"]		=	true;
			}
			$data["userType"]	=	3;
			$data["logged_in"]	=	true;

		}

		$job = $this->Model_home->getJobDetails($id);

		$data["job"] = $job;
		$this->twig->display("job_details",$data);
	}

	public function companies(){

		$companies = $this->Model_home->getAllCompanies($this->session->uid);
		$data = array(
			"navbar"	=>	$this->NAVBAR,
			"user"		=>	$this->USER,
			"companies"	=>	$companies
		);
		$this->twig->display("all_companies",$data);
	}

	public function getJobTitle(){

		$key = $this->input->post("key");

		$res = $this->Model_home->get_job_titles($key);
		if(isset($res)){
			echo json_encode($res);
		}else{
			echo 0;
		}
	}

	public function getCourseTitle(){

		$key = $this->input->post("key");

		$res = $this->Model_home->get_course_titles($key);
		if(isset($res)){
			echo json_encode($res);
		}else{
			echo 0;
		}
	}

	public function companyinfo($id){

		$data = array(
			"navbar"	=>	$this->NAVBAR,
			"user"		=>	$this->USER			
		);

		$orgInfo = $this->Model_home->getCompanyInfo($id);
		if($this->session->has_userdata('logged_in')){
			$where = array(
				"applicant_id_fk"	=>	$this->session->uid,
				"employer_id_fk"	=>$id
			);
			$status = $this->Model_home->getSubscribedStatus($where);
			if($status){
				$data["subscribed"]	= true;
			}
			$data["userType"]	=	$this->session->role;
		}
		$data["org"] = $orgInfo;
		$this->twig->display("company_info",$data);
	}

	public function candidates(){

		if(empty($this->uri->segment(3)) || $this->input->post("search")){
			$this->session->unset_userdata(array("searchKeyWord","searchCandidateCat"));
		}
		$where = array();
		if($this->input->post("keyword")){
			$keyword = explode(" ",trim($this->input->post("keyword")));
			if(count($keyword)>1)
				array_push($keyword, $this->input->post("keyword"));
			$where["keyword"] = implode("|", $keyword);
			$this->session->set_userdata(array("searchKeyWord"=>$this->input->post("keyword")));
		}elseif($this->session->has_userdata("searchKeyWord")){
			$keyword = explode(" ",trim($this->session->searchKeyWord));
			if(count($keyword)>1)
				array_push($keyword, $this->input->post("keyword"));
			$where["keyword"] = implode("|", $keyword);
		}
		if($this->input->post("candidateCat")){
			$where["candidateCat"]	= $this->input->post("candidateCat");
			$this->session->set_userdata(array("searchCandidateCat"=>$this->input->post("candidateCat")));
		}elseif($this->session->has_userdata("searchCandidateCat")){
			$where["candidateCat"] = $this->session->searchCandidateCat;
		}

		$config = array();
        $config["base_url"] = base_url() . "home/candidates";
        $config["total_rows"] = $this->Model_home->getCandidatesCount($where);
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $config["cur_tag_open"] = "<a class='active'>";
        $config["cur_tag_close"] = "</a>";
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $where["limit"] = $config["per_page"];
        if($this->session->has_userdata('logged_in')){
			$where["page"] = $page;
		}
		
		if($this->session->has_userdata('logged_in')){
			if($this->session->role==3){
				$where["eid"]	=	$this->session->uid;
			}
			$where["id"]	=	$this->session->uid;	
		}

		$candidates = $this->Model_home->get_candidates($where);
		$categories = $this->Model_home->getCandidateCats($where);
		$data = array(
			"navbar"			=>	$this->NAVBAR,
			"user"				=>	$this->USER,
			"role"				=>	$this->session->role,
			"keyword"			=>	$this->session->searchKeyWord,
			"searchCategories"	=>	$this->session->searchCandidateCat,
			"candidates"		=>	$candidates,
			"categories"		=>	$categories,
			"links"				=>	$this->pagination->create_links()
		);
		if($this->input->post("search")){
			$template = $this->twig->render("candidates_search",$data);
			echo $template;
		}else{
			$this->twig->display("candidates",$data);
		}
	}

	public function profile($id){

		$where = array("user_id_fk" => $id);
		$condition = array("applicant_id_fk" => $id);
		$profile = $this->Model_home->get_prnsl_info($where);
		$education = $this->Model_home->get_education($condition);
		$experience = $this->Model_home->get_experience($condition);
		$skills = $this->Model_home->get_skills($condition);

		$data = array(
			"navbar"		=>	$this->NAVBAR,
			"user"			=>	$this->USER,
			"profile"		=>	$profile,
			"education"		=>	$education,
			"experience"	=>	$experience,
			"skills"		=>	$skills,
		);
		if($this->session->has_userdata('logged_in') && $this->session->role==3){
			$where = array(
				"employer_id_fk"	=>	$this->session->uid,
				"applicant_id_fk"	=>	$id
			);
			$shortlisted = $this->Model_home->getShortlistStatus($where);
			$data["logged_in"]	 = true;
			$data["shortlisted"] = $shortlisted;
		}

		$this->twig->display("candidate_profile",$data);
	}

	public function aboutus(){

		$data = array(
			"navbar"=>	$this->NAVBAR,
			"user"	=>	$this->USER
		);
		$this->twig->display("aboutus",$data);
	}

	public function disclaimer(){

		$data = array(
			"navbar"=>	$this->NAVBAR,
			"user"	=>	$this->USER
		);
		$this->twig->display("disclaimer",$data);
	}

	public function privacy(){

		$data = array(
			"navbar"=>	$this->NAVBAR,
			"user"	=>	$this->USER
		);
		$this->twig->display("privacy",$data);
	}

	public function contactus(){

		$data = array(
			"navbar"=>	$this->NAVBAR,
			"user"	=>	$this->USER
		);
		if($this->input->post("send")){
			$emailData = array(
				"email"		=>	"manpreetmair@gmail.com",
				"subject"	=>	$this->input->post("subject"),
				"message"	=>	$this->input->post("message")
			);
			$this->sendEmail($emailData);
			$data["message"]	= "Your message has been sent successfully!";
		}
		$this->twig->display("contactus",$data);
	}

	public function termsnconditions(){

		$data = array(
			"navbar"=>	$this->NAVBAR,
			"user"	=>	$this->USER
		);
		$this->twig->display("termsnconditions",$data);
	}

	public function categories(){

		$categories = $this->Model_home->getJobCategories();
		$data = array(
			"navbar"		=>	$this->NAVBAR,
			"user"			=>	$this->USER,
			"categories"	=>	$categories
		);
		$this->twig->display("all_categories",$data);
	}

	public function verify_email($qs){

		if(empty($this->uri->segment(3)))
			redirect("/");
		$message = "no action found !";
		$verified = false;
		$where = array(
			"verification_code"	=>	$qs
		);
		$this->Model_home->set_verified(array("email_verify"=>1),$where);
		$message = "Your email is verified successfully!";
		$verified = true;
		$data = array(
			"navbar"	=>	$this->NAVBAR,
			"user"		=>	$this->USER,
			"message"	=>	$message,
			"verified"	=>	$verified
		);
		$this->twig->display("email_verify",$data);
	}
	
	/*public function verify_email($qs){

		if(empty($this->uri->segment(3)))
			redirect("/");
		$message = "no action found !";
		$verified = false;
		if($this->session->has_userdata('logged_in')){
			$where = array(
				"id"				=>	$this->session->uid,
				"verification_code"	=>	$qs
			);
			$res = $this->Model_home->verify_code($where);
			if($res){
				$this->Model_home->set_verified(array("email_verify"=>1),$where);
				$message = "Your email is verified successfully!";
				$verified = true;
			}else{
				$message = "please login correct account to verify email";
			}

		}else{
			$message = "Please login to your accout to verify email address";
		}
		$data = array(
			"navbar"	=>	$this->NAVBAR,
			"user"		=>	$this->USER,
			"message"	=>	$message,
			"verified"	=>	$verified,
			"userType"	=>	$this->session->role
		);
		$this->twig->display("email_verify",$data);
	}*/

	public function send_reminder(){

		if(!$this->input->post("email"))
			redirect("/");

		$where = array("email"=>$this->input->post("email"));
		$user = $this->Model_home->isEmailExist($where);
		if($user){
			$reset_code = bin2hex(mt_rand());
			$this->Model_home->insertResetCode(array("reset_code"=>$reset_code),array("id"=>$user->id));
			$emailData = array(
				"to_email"		=>	$user->email,
				"subject"		=>	"Password reset request",
				"template_name"	=>	"reset_password",
				"template_content"	=>	array(
					array("name"=>"first_name","content"=>$user->first_name),
					array("name"=>"reset_link","content"=>base_url()."home/resetPassword/".$reset_code)
				)
			);
			$this->sendToMandrill($emailData);
			$template = $this->twig->render("reminder_success",array("message"=>"Please check your email to reset password!"));
			echo json_encode(array("response"=>"Please check your email to reset password!","template"=>$template,"error"=>false));
		}else{
			echo json_encode(array("response"=>"This email doesn't exist with our database!","error"=>true));
		}
	}

	public function resetPassword($qs){

		if(empty($this->uri->segment(3)))
			redirect("/");

		$data = array("qs"=>$qs);
		if($this->input->post("update")){
			$where = array(
				"reset_code"	=>	$this->input->post("qs")
			);
			$user = $this->Model_home->verify_code($where);
			if($user){
				$this->form_validation->set_rules("new_password","New Password","required",array("required"=>"{field} is required"));
				$this->form_validation->set_rules("con_password","Confirm Password","required|matches[new_password]",array("required"=>"{field} is required"));
				if ($this->form_validation->run() == FALSE){
					$errors = array(
						"new_password"		=>	form_error("new_password"),
						"con_password"		=>	form_error("con_password")
					);
					$data["errors"]	= $errors;
					$this->twig->display("reset_password",$data);
				}else{
					$update  = array("password"=>md5($this->input->post("new_password")),"reset_code"=>"");
					$where = array("id"=>$user->id);
					$res = $this->Model_home->update_password($update,$where);
					if($res){
						$data["alert"]		=	"success";
						$data["message"]	=	"Your password updated succesfully!";
					}else{
						$data["alert"]		=	"error";
						$data["message"]	=	"There is an error while updating password, Please try later!";
					}
					$this->twig->display("reset_success",$data);
				}
			}else{
				$data["alert"]		=	"error";
				$data["message"]	=	"This link is expired or not valid please try with new link!";
				$this->twig->display("reset_password",$data);
			}
		}else{
			$this->twig->display("reset_password",$data);
		}
	}

	public function sendEmail($data){

		$this->email->from('support@frescoserver.com', 'GetWork');
		$this->email->to($data['email']);
		$this->email->subject($data["subject"]);
		$this->email->message($data["message"]);
		$res = $this->email->send();
	}

	public function searchConfig(){

		$name	=	$this->input->post("name");
		$value	=	$this->input->post("value");
		$this->session->set_userdata($name,$value);
		echo json_encode(array("response"=>$this->session->$name,"error"=>false));
		
	}

	public function sendToMandrill($data){

		try{
		    $this->mandrill->init("ZOd8olAStGhYn_w8CXFaXw");
		    $mandrill_ready = TRUE;
		}catch(Mandrill_Exception $e){
		    $mandrill_ready = FALSE;
		}
		if( $mandrill_ready ) {

		    $message = array(
			    'subject' => $data["subject"],
			    'from_email' => 'no-reply@getwork.construction',
			    'from_name'	=> "GetWork",
			    'to' => array(array('email' => $data["to_email"]))
			);

		    $response = $this->mandrill->messages_send_template($data["template_name"], $data["template_content"], $message);
		}
	}

	public function getIndeedJobs($where){

		$parms = array("publisher"=>"282768435759495","version"=>2);
		$this->load->library("indeed",$parms);

		$params = array(
			"q"			=>	"all",
		    "co"		=>	"gb",
		    "start"		=>	$where["page"],
		    "limit"		=>	$where["limit"],
		    "highlight"	=>	0,
		    "userip" 	=> $this->input->ip_address(),
		    "useragent" => $this->getUserAgent()
		);
		if(array_key_exists("keyword", $where)){
			$params["q"]	=	$where["keyword"];
		}

		if(array_key_exists("location", $where)){
			$params["l"]	=	$where["location"];
		}

		$results = $this->indeed->search($params)["results"];
		$jobs = array();
		if(count($results)){
			foreach ($results as $key => $value) {
				array_push($jobs, array(
					"url"			=>	$value["url"],
					"title"			=>	$value["jobtitle"],
					"company_name"	=>	$value["company"],
					"location"		=>	$value["formattedLocation"],
					"description"	=>	$value["snippet"],
					"last_date"		=>	$value["expired"],
					"salary_type"	=>	"NA",
					"salary"		=>	"NA",
					"job_type"		=>	"NA",
					"applications"	=>	"NA"
				));
			}
		}		
		return $jobs;
	}

	public function getJobsCount($where){

		$parms = array("publisher"=>"282768435759495","version"=>2);
		$this->load->library("indeed",$parms);

		$params = array(
			"q"			=>	"all",
		    "co"		=>	"gb",
		    "userip" 	=> $this->input->ip_address(),
		    "useragent" => $this->getUserAgent()
		);
		if(array_key_exists("keyword", $where)){
			$params["q"]	=	$where["keyword"];
		}

		if(array_key_exists("location", $where)){
			$params["l"]	=	$where["location"];
		}

		$results = $this->indeed->search($params)["results"];
		$jobs = array();
		if(count($results)){
			foreach ($results as $key => $value) {
				array_push($jobs, array(
					"url"			=>	$value["url"],
					"title"			=>	$value["jobtitle"],
					"company_name"	=>	$value["company"],
					"location"		=>	$value["formattedLocation"],
					"description"	=>	$value["snippet"],
					"last_date"		=>	$value["expired"],
					"salary_type"	=>	"NA",
					"salary"		=>	"NA",
					"job_type"		=>	"NA",
					"applications"	=>	"NA"
				));
			}
		}		
		return count($jobs)?500:0;
	}

	public function getUserAgent(){

		$this->load->library('user_agent');
		$agent="";
		if ($this->agent->is_browser()){

			$agent = $this->agent->browser().'/'.$this->agent->version();
		}elseif ($this->agent->is_robot()){

			$agent = $this->agent->robot();
		}elseif ($this->agent->is_mobile()){

			$agent = $this->agent->mobile();
		}else{

			$agent = "Mozilla/5.0";
		}
		return $agent;
	}

	public function wp_payment(){		
		
		$this->twig->display("payment");
	}

	public function wp_response(){


		$data = $this->input->post();

		print_r($data);
	}

	public function blogs()
	{
		$this->twig->display("blogs");
	}

	public function blog1()
	{
		$this->twig->display("singleblog1");
	}
	public function blog2()
	{
		$this->twig->display("singleblog2");
	}
	public function blog3()
	{
		$this->twig->display("singleblog3");
	}
	public function blog4()
	{
		$this->twig->display("singleblog4");
	}
	public function blog5()
	{
		$this->twig->display("singleblog5");
	}
	public function blog6()
	{
		$this->twig->display("singleblog6");
	}
}
