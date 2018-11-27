<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public $unreadmsg = 0;

	function __construct(){
		parent::__construct();
		$this->load->library("pagination");
		$this->load->Model("Model_dashboard");
		if($this->session->has_userdata('logged_in') && $this->session->role==3){
			$msgs = $this->Model_dashboard->getUnreadMsg(array("msg_to"=>$this->session->uid));
			if(!empty($msgs))
				$this->unreadmsg = $msgs[0]->msgCount;
		}else{
			redirect('/');
		}
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('email');
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
	}
	public function index(){

		$where = array("user_id_fk" => $this->session->uid);
		$result = $this->Model_dashboard->get_org_info($where);
		$data = array(
			"page"		=>	"dashboard",
			"user"		=>	$result,
			"verified"	=>	$this->session->verified,
			"unreadmsg"	=>	$this->unreadmsg
		);
		$this->twig->display("dashboard",$data);
	}

	public function profile_edit(){

		$where = array("user_id_fk" => $this->session->uid);
		$result = $this->Model_dashboard->get_org_info($where);
		$profile_image = true;
		$data = array(
			"user"=>$result,
			"page"=>"editProfile",
			"unreadmsg"	=>	$this->unreadmsg
		);

		if($this->input->post("edit")){

			$fields = array(
				"company_name"			=>	$this->input->post("company_name"),
				"type_of_business"		=>	$this->input->post("type_of_business"),
				"employees"				=>	$this->input->post("employees"),
				"phone"					=>	$this->input->post("phone"),
				"address"				=>	$this->input->post("address"),
				"city"					=>	$this->input->post("city"),
				"postcode"				=>	$this->input->post("postcode"),
				"provience"				=>	$this->input->post("provience"),
				"country"				=>	$this->input->post("country"),
				"company_description"	=>	$this->input->post("company_description"),
				"website_url"			=>	$this->input->post("website_url"),
				"facebook_url"			=>	$this->input->post("facebook_url"),
				"twitter_url"			=>	$this->input->post("twitter_url"),
				"linkedin_url"			=>	$this->input->post("linkedin_url"),
				"googleplus_url"		=>	$this->input->post("googleplus_url")
			);
			if(!empty($_FILES["logo"]["name"])){
				$profile_image	=	$this->uploadFile();
				$fields["logo"]	=	$profile_image;
			}
			if($profile_image == FALSE){
				$data["error_image"] = "Use image less than 2MB";
        		$this->twig->display("employer_edit",$data);
			}else{
				$where = array("user_id_fk" => $this->session->uid);
	        	$res = $this->Model_dashboard->update_org_info($fields,$where);
	        	if(isset($res)){
	        		redirect("/dashboard");
	        		/*$this->twig->display("dashboard",array("user"=>$data,"page"=>"dashboard"));*/
	        	}else{
	        		$data["opFailed"] = "Profile is not updated please try again !";
	        		$this->twig->display("employer_edit",$data);		
	        	}
			}
        	
		}else{
			
			$this->twig->display("employer_edit",$data);	
		}		
	}

	public function resume(){

		$where = array("user_id_fk" => $this->session->uid);
		$user = $this->Model_dashboard->get_org_info($where);
		$resumes = $this->Model_dashboard->getShortlisted($this->session->uid);
		$data = array(
			"page"		=>	"resume",
			"user"		=>	$user,
			"resumes"	=>	$resumes,
			"unreadmsg"	=>	$this->unreadmsg
		);
		$this->twig->display("employer_resume",$data);
	}

	public function getTotalUnread(){

		$msgs = $this->Model_dashboard->getUnreadMsg(array("msg_to"=>$this->session->uid));
		if(!empty($msgs)){
			return $msgs[0]->msgCount;
		}else{
			return 0;
		}
	}

	public function inbox(){

		$where = array("user_id_fk" => $this->session->uid);
		$user = $this->Model_dashboard->get_org_info($where);
		$message = $this->Model_dashboard->getMessages($this->session->uid);
		$data = array(
			"page"		=>	"inbox",
			"user"		=>	$user,
			"messages"	=>	$message,
			"unreadmsg"	=>	$this->unreadmsg		
		);
		$this->twig->display("employer_message",$data);
	}

	public function loadMessages($id){

		if(empty($this->uri->segment(3)))
			redirect("/");

		$msg = $this->Model_dashboard->load_messages($this->session->uid,$id);
		if($msg){
			$this->Model_dashboard->update_msg_seen($this->session->uid,$id);
			$unreadMsg = $this->getTotalUnread();
			echo json_encode(array("response"=>$msg,"unread"=>$unreadMsg,"error"=>false));
		}else{
			echo json_encode(array("response"=>"no more messages left.","error"=>true));
		}
	}

	public function jobs(){

		$where = array("user_id_fk" => $this->session->uid);
		$user = $this->Model_dashboard->get_org_info($where);
		$jobs = $this->Model_dashboard->getJobList($this->session->uid);
		$data = array(
			"user"=>$user,
			"page"=>"jobs",
			"jobs"=>$jobs,
			"unreadmsg"	=>	$this->unreadmsg
		);
		$this->twig->display("employer_jobs",$data);
	}

	public function featured(){

		$where = array("user_id_fk" => $this->session->uid);
		$result = $this->Model_dashboard->get_org_info($where);
		$data = array(
			"user"=>$result,
			"page"=>"featuresJobs",
			"unreadmsg"	=>	$this->unreadmsg
		);
		$this->twig->display("employer_featured_jobs",$data);	
	}

	public function followers(){

		$where = array("user_id_fk" => $this->session->uid);
		$user = $this->Model_dashboard->get_org_info($where);
		$followers = $this->Model_dashboard->get_followers($this->session->uid);
		$data = array(
			"user"=>$user,
			"page"=>"followers",
			"followers"=>$followers,
			"unreadmsg"	=>	$this->unreadmsg
		);
		$this->twig->display("employer_followers",$data);	
	}

	public function postjob(){

		$this->load->Model('Model_home');
		$where		=	array("user_id_fk" => $this->session->uid);
		$user 		=	$this->Model_dashboard->get_org_info($where);
		$jobCats 	=	$this->Model_home->getJobCategories();
		$type 		=	$this->Model_dashboard->getJobType();
		$experience =	$this->Model_dashboard->getJobExperience();
		$salaryType =	$this->Model_dashboard->getSalaryType();
		
		$data = array(
			"job_categories"	=>	$jobCats,
			"user"				=>	$user,
			"jobType"			=>	$type,
			"jobExperience"		=>	$experience,
			"salaryType"		=>	$salaryType,
			"verified"			=>	$this->session->verified
		);

		if($this->input->post('post') && $this->session->verified){
			$fields = array(
				"emp_id_fk"			=>	$this->session->uid,
				"title"				=>	$this->input->post("title"),
				"location"			=>	$this->input->post("location"),
				"category_fk"		=>	$this->input->post("category"),
				"type_fk"			=>	$this->input->post("job_type"),
				"experience_fk"		=>	$this->input->post("experience"),
				"salary"			=>	$this->input->post("salary"),
				"salary_type_fk"	=>	$this->input->post("salary_type"),
				"vacancies"			=>	$this->input->post("vacancies"),
				"last_date"			=>	$this->input->post("last_date"),
				"skills"			=>	$this->input->post("skills"),
				"description"		=>	$this->input->post("job_description")
			);

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('location', 'Location', 'required');
			$this->form_validation->set_rules('category', 'Category', 'required');
			$this->form_validation->set_rules('job_type', 'Type', 'required');
			$this->form_validation->set_rules('experience', 'Experience', 'required');
			$this->form_validation->set_rules('salary', 'Salary', 'required',array("required"=>"required"));
			$this->form_validation->set_rules('salary_type', 'Duration', 'required',array("required"=>"required"));
			$this->form_validation->set_rules('job_description', 'Detail', 'required');

			if($this->form_validation->run() == FALSE){
				$errors = array(
					"error_title"			=>	form_error("title"),
					"error_location"		=>	form_error("location"),
					"error_category"		=>	form_error("category"),
					"error_job_type"		=>	form_error("job_type"),
					"error_experience"		=>	form_error("experience"),
					"error_salary"			=>	form_error("salary"),
					"error_salary_type"		=>	form_error("salary_type"),
					"error_description"		=>	form_error("job_description")
				);
				
				$data["error"]		=	$errors;
				$data["data"]		=	$fields;
				$data["alert"]		=	"error";
				$data["message"]	=	"There is one or more some error in the form!";
				
				$this->twig->display("post_job",$data);
			}else{
				$res = $this->Model_dashboard->insertJob($fields);
				
					
					$data["alert"]		=	"success";
					$data["message"]	=	"Your job posted Succesfully!";
				
				if(isset($res)){
					$emailData = array(
						"to_email"			=>	$this->session->email,
						"subject"			=>	"Job Posted",
						"template_name"		=>	"job_post",
						"template_content"	=>	array(
							array("name"=>"first_name","content"=>$this->session->username),
							array("name"=>"job_title","content"=>$this->input->post("title"))
						)
					);
					$this->sendToMandrill($emailData);
					redirect("/dashboard/jobs");
					//$this->twig->display("post_job",$data);
				}
			}
		}else{
			$this->twig->display("post_job",$data);
		}
	}

	public function single($id){

		$job	=	$this->Model_dashboard->getSingleJob($id);
		$where	=	array("user_id_fk" => $this->session->uid);
		$user	=	$this->Model_dashboard->get_org_info($where);

		if($job){
			$data = array("job"=>$job,"user"=>$user);
			$this->twig->display("job_single",$data);
		}
	}

	public function edit_job($id){

		if(!isset($id))
			redirect("/dashboard/jobs");

		$this->load->model("Model_home");
		$job		=	$this->Model_dashboard->getSingleJob($id);
		$where		=	array("user_id_fk" => $this->session->uid);
		$user		=	$this->Model_dashboard->get_org_info($where);
		$jobCats	=	$this->Model_home->getJobCategories();
		$type		=	$this->Model_dashboard->getJobType();
		$experience	=	$this->Model_dashboard->getJobExperience();
		$salaryType	=	$this->Model_dashboard->getSalaryType();

		if($this->input->post('update')){
			$fields = array(
				"title"			=>	$this->input->post("title"),
				"location"		=>	$this->input->post("location"),
				"category_fk"	=>	$this->input->post("category"),
				"type_fk"		=>	$this->input->post("job_type"),
				"experience_fk"	=>	$this->input->post("experience"),
				"salary"		=>	$this->input->post("salary"),
				"salary_type_fk"=>	$this->input->post("salary_type"),
				"vacancies"		=>	$this->input->post("vacancies"),
				"last_date"		=>	$this->input->post("last_date"),
				"skills"		=>	$this->input->post("skills"),
				"description"	=>	$this->input->post("job_description"),
				"approved"		=>	0
			);

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('location', 'Location', 'required');
			$this->form_validation->set_rules('category', 'Category', 'required');
			$this->form_validation->set_rules('job_type', 'Type', 'required');
			$this->form_validation->set_rules('experience', 'Experience', 'required');
			$this->form_validation->set_rules('salary', 'Salary', 'required',array("required"=>"required"));
			$this->form_validation->set_rules('salary_type', 'Duration', 'required',array("required"=>"required"));
			$this->form_validation->set_rules('job_description', 'Detail', 'required');

			if($this->form_validation->run() == FALSE){
				$errors = array(
					"error_title"		=>	form_error("title"),
					"error_location"	=>	form_error("location"),
					"error_category"	=>	form_error("category"),
					"error_job_type"	=>	form_error("job_type"),
					"error_experience"	=>	form_error("experience"),
					"error_salary"		=>	form_error("salary"),
					"error_salary_type"	=>	form_error("salary_type"),
					"error_description"	=>	form_error("job_description")
				);
				$fields["id"] = $id;
				$data = array(
					"job_categories"=>	$jobCats,
					"user"			=>	$user,
					"jobType"		=>	$type,
					"jobExperience"	=>	$experience,
					"salaryType"	=>	$salaryType,
					"error"			=>	$errors,
					"job"			=>	$fields,
					"alert"			=>	"error",
					"message"		=>	"There is one or more some error in the form!"
				);
				$this->twig->display("edit_job",$data);
			}else{
				$res = $this->Model_dashboard->updateJob($fields,array("id"=>$id));
				redirect("/home/jobdetails/".$id);
				/*if(isset($res)){
					$fields["id"] = $id;
						$data = array(
						"job"			=>	$fields,
						"job_categories"=>	$jobCats,
						"user"			=>	$user,
						"jobType"		=>	$type,
						"jobExperience"	=>	$experience,
						"salaryType"	=>	$salaryType
					);
					$this->twig->display("edit_job",$data);
				}*/
			}
		}else{
			$data = array(
				"job"			=>	$job,
				"job_categories"=>	$jobCats,
				"user"			=>	$user,
				"jobType"		=>	$type,
				"jobExperience"	=>	$experience,
				"salaryType"	=>	$salaryType
			);
			$this->twig->display("edit_job",$data);
		}
	}

	public function delete_job($id){

		$where = array("emp_id_fk"=>$this->session->uid,"id"=>$id);
		$res = $this->Model_dashboard->deleteJob($where);
		echo $res;
	}

	public function shortlist_candidate($id){

		$data = array(
			"employer_id_fk"	=>	$this->session->uid,
			"applicant_id_fk"	=>	$id
		);

		$res = $this->Model_dashboard->InsertShortlist($data);
		if($res){
			echo json_encode(array("response"=>"You have shortlisted candidate Succesfully!","error"=>false));
		}else{
			echo json_encode(array("response"=>"You have already shortlisted candidate!","error"=>true));
		}
	}

	public function delete_shortlist($id){

		$where = array(
			"employer_id_fk"	=>	$this->session->uid,
			"applicant_id_fk"	=>	$id
		);
		$res = $this->Model_dashboard->deleteShortlist($where);
		echo $res;
	}

	public function sendMessage(){

		$data = array(
			"message"=>$this->input->post("message"),
			"msg_to"=>$this->input->post("to"),
			"msg_from"=>$this->session->uid
		);
		$user = $this->Model_dashboard->get_applicant_info(array("user_id_fk"=>$this->input->post("to")));
		$res = $this->Model_dashboard->insertMessage($data);
		if($res){
			$emailData = array(
				"to" 		=>	$user->email,
				"subject"	=>	"Message from GetWork",
				"msg"		=>	$this->input->post("message")
			);
			$this->sendEmail($emailData);
			echo json_encode(array("response"=>"Your message has been sent Succesfully!","error"=>false));
		}else{
			echo json_encode(array("response"=>"Message send failed","error"=>true));
		}
	}

	public function delete_msg($id){

		$where = array("to"=>$this->session->uid,"id"=>$id);
		$res = $this->Model_dashboard->deleteMsg($where);
		echo $res;
	}

	public function job_applicants($id){

		if(empty($this->uri->segment(4)) || $this->input->post("search")){
			$this->session->unset_userdata("searchKeyWord");
		}
		$where	= array("job_id"=>$id);
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

		$config = array();
        $config["base_url"] = base_url() . "dashboard/job_applicants/".$id;
        $config["total_rows"] = $this->Model_dashboard->totalJobApplicants($where);
        $config["per_page"] = 5;
        $config["uri_segment"] = 4;
        $config["cur_tag_open"] = "<a class='active'>";
        $config["cur_tag_close"] = "</a>";
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        $where["limit"] = $config["per_page"];
        $where["page"] = $page;
		

		$user		= $this->Model_dashboard->get_org_info(array("user_id_fk" => $this->session->uid));
		$candidates	= $this->Model_dashboard->getJobApplicants($where);
		$data = array(
			"user"		=>	$user,
			"candidates"=>	$candidates,
			"job_id"	=>	$id,
			"links"		=>	$this->pagination->create_links()
		);
		if($this->input->post("search")){
			$template = $this->twig->render("applicants_search",$data);
			echo $template;
		}else{
			$this->twig->display("applicants",$data);
		}
	}

	public function settings(){

		$where = array("user_id_fk" => $this->session->uid);
		$user = $this->Model_dashboard->get_org_info($where);
		$data = array(
			"page"		=>	"settings",
			"user"		=>	$user,
			"unreadmsg"	=>	$this->unreadmsg	
		);
		$this->twig->display("employer_settings",$data);
	}

	public function updatePassword(){

		$where = array("user_id_fk" => $this->session->uid);
		$user = $this->Model_dashboard->get_org_info($where);
		$data	=	array(
			"page"		=>	"settings",
			"user"		=>	$user,
			"unreadmsg"	=>	$this->unreadmsg
		);

		if($this->input->post("update")){

			$this->form_validation->set_rules("current_password","Current Password","callback_checkPassword");
			$this->form_validation->set_rules("new_password","New Password","required",array("required"=>"{field} is required"));
			$this->form_validation->set_rules("con_password","Confirm Password","required|matches[new_password]",array("required"=>"{field} is required"));
			if ($this->form_validation->run() == FALSE){
				$errors = array(
					"current_password"	=>	form_error("current_password"),
					"new_password"		=>	form_error("new_password"),
					"con_password"		=>	form_error("con_password")
				);

				$data["errors"]	= $errors;
				$this->twig->display("employer_settings",$data);
			}else{
				$update  = array("password"=>md5($this->input->post("new_password")));
				$where = array("id"=>$this->session->uid);
				$res = $this->Model_dashboard->update_password($update,$where);
				if($res){
					$data["alert"]		=	"success";
					$data["message"]	=	"Your password updated succesfully!";
				}else{
					$data["alert"]		=	"error";
					$data["message"]	=	"There is an error while updating password, Please try later!";
				}
				$this->twig->display("employer_settings",$data);
			}

		}else{
			$this->twig->display("employer_settings",$data);
		}
	}

	public function checkPassword($password){
		$where = array(
			"id"		=>	$this->session->uid,
			"password"	=>	md5($password)
		);
		if($password==""){
			$this->form_validation->set_message('checkPassword', 'The {field} is required.');
			return false;
		}else{
			$res = $this->Model_dashboard->check_password($where);
			if(!$res){
				$this->form_validation->set_message('checkPassword', 'The {field} doesn\'t matched.');
				return false;		
			}
		}
	}

	public function uploadFile(){

		$target_dir = FCPATH.'/uploads/';
		if($_FILES["logo"]["size"]>2000000){
			return false;
		}
		$file_name = $target_dir . pathinfo($_FILES["logo"]["name"],PATHINFO_FILENAME);
		$target_file = $file_name.date("YmdHis").".".pathinfo($_FILES["logo"]["name"],PATHINFO_EXTENSION);
		if(move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)){
			return basename($target_file);	
		}else{
			return false;
		}
	}

	public function addcourse(){

		$where		=	array("user_id_fk" => $this->session->uid);
		$user		=	$this->Model_dashboard->get_org_info($where);
		$courseType	=	$this->Model_dashboard->get_course_type();
		$priceType	=	$this->Model_dashboard->get_price_type();
		$categories	=	$this->Model_dashboard->get_course_categories();
		$data = array(
			"page"		=>	"addcourse",
			"user"		=>	$user,
			"courseType"=>	$courseType,
			"priceType"	=>	$priceType,
			"categories"=>	$categories,
			"verified"	=>	$this->session->verified,
			"unreadmsg"	=>	$this->unreadmsg
		);

		if($this->input->post("add") && $this->session->verified){
			$fields = array(
				"emp_id_fk"			=>	$this->session->uid,
				"title"				=>	$this->input->post("title"),
				"qualification"		=>	$this->input->post("qualification"),
				"course_type_fk"	=>	$this->input->post("course_type"),
				"duration"			=>	$this->input->post("duration"),
				"price"				=>	$this->input->post("price"),
				"price_type_fk"		=>	$this->input->post("price_type"),
				"category_fk"		=>	$this->input->post("category"),
				"description"		=>	$this->input->post("description")
			);

			$this->form_validation->set_rules("title","Title","required",array("required"=>"{field} is required."));
			$this->form_validation->set_rules("qualification","Qualification","required",array("required"=>"{field} is required."));
			$this->form_validation->set_rules("course_type","Course Type","required",array("required"=>"{field} is required."));
			$this->form_validation->set_rules("price_type","Price Type","required",array("required"=>"required."));
			$this->form_validation->set_rules("category","Category","required",array("required"=>"{field} is required."));
			$this->form_validation->set_rules("description","Description","required",array("required"=>"{field} is required."));

			if($this->form_validation->run()==FALSE){
				$errors = array(
					"title"			=>	form_error("title"),
					"qualification"	=>	form_error("qualification"),
					"course_type"	=>	form_error("course_type"),
					"price_type"	=>	form_error("price_type"),
					"category"		=>	form_error("category"),
					"description"	=>	form_error("description")
				);
				$data["errors"]	=	$errors;
				$data["fields"]	=	$fields;
				$this->twig->display("addcourse",$data);
			}else{
				$res = $this->Model_dashboard->insertCourse($fields);
				if($res){
					$emailData = array(
						"to_email"			=>	$this->session->email,
						"subject"			=>	"New Course Added",
						"template_name"		=>	"course_post",
						"template_content"	=>	array(
							array("name"=>"first_name","content"=>$this->session->username),
							array("name"=>"course_title","content"=>$this->input->post("title"))
						)
					);
					$this->sendToMandrill($emailData);
					redirect("/dashboard/courses");
					//$this->twig->display("addcourse",$data);
				}else{
					$this->twig->display("addcourse",$data);
				}
			}
		}else{
			$this->twig->display("addcourse",$data);
		}
	}

	public function courses(){

		$courses	=	$this->Model_dashboard->getCourses(array("emp_id_fk"=>$this->session->uid));
		$user		=	$this->Model_dashboard->get_org_info(array("user_id_fk" => $this->session->uid));
		$data = array(
			"page"		=>	"courses",
			"user"		=>	$user,
			"courses"	=>	$courses,
			"unreadmsg"	=>	$this->unreadmsg
		);
		$this->twig->display("courses",$data);
	}

	public function edit_course($id){

		if(empty($id))
			redirect("/dashboard/courses");

		$where		=	array("user_id_fk" => $this->session->uid);
		$user		=	$this->Model_dashboard->get_org_info($where);
		$fields		=	$this->Model_dashboard->get_course(array("id"=>$id));
		$courseType	=	$this->Model_dashboard->get_course_type();
		$priceType	=	$this->Model_dashboard->get_price_type();
		$categories	=	$this->Model_dashboard->get_course_categories();
		$data = array(
			"page"		=>	"addcourse",
			"user"		=>	$user,
			"courseType"=>	$courseType,
			"priceType"	=>	$priceType,
			"categories"=>	$categories,
			"fields"	=>	$fields
		);

		if($this->input->post("edit")){
			$fields = array(
				"title"				=>	$this->input->post("title"),
				"qualification"		=>	$this->input->post("qualification"),
				"course_type_fk"	=>	$this->input->post("course_type"),
				"duration"			=>	$this->input->post("duration"),
				"price"				=>	$this->input->post("price"),
				"price_type_fk"		=>	$this->input->post("price_type"),
				"category_fk"		=>	$this->input->post("category"),
				"description"		=>	$this->input->post("description"),
				"approved"			=>	0
			);

			$this->form_validation->set_rules("title","Title","required",array("required"=>"{field} is required."));
			$this->form_validation->set_rules("qualification","Qualification","required",array("required"=>"{field} is required."));
			$this->form_validation->set_rules("course_type","Course Type","required",array("required"=>"{field} is required."));
			$this->form_validation->set_rules("price_type","Price Type","required",array("required"=>"required."));
			$this->form_validation->set_rules("category","Category","required",array("required"=>"{field} is required."));
			$this->form_validation->set_rules("description","Description","required",array("required"=>"{field} is required."));

			if($this->form_validation->run()==FALSE){
				$errors = array(
					"title"			=>	form_error("title"),
					"qualification"	=>	form_error("qualification"),
					"course_type"	=>	form_error("course_type"),
					"price_type"	=>	form_error("price_type"),
					"category"		=>	form_error("category"),
					"description"	=>	form_error("description")
				);
				$fields["id"]	=	$id;
				$data["errors"]	=	$errors;
				$data["fields"]	=	$fields;
				$this->twig->display("editcourse",$data);
			}else{
				$res = $this->Model_dashboard->updateCourse($fields,array("id"=>$id,"emp_id_fk"=>$this->session->uid));
				redirect("/dashboard/courses");
				//$this->twig->display("editcourse",$data);
			}
		}else{
			$this->twig->display("editcourse",$data);
		}
	}

	public function delete_course($id){

		$where = array(
			"id"		=>	$id,
			"emp_id_fk"	=>	$this->session->uid
		);

		$res = $this->Model_dashboard->deleteCourse($where);
		if($res){
			echo json_encode(array("response"=>"This course has been deleted succesfully!","error"=>false));
		}else{
			echo json_encode(array("response"=>"Unable to delete the course, please try later!","error"=>true));
		}
	}

	public function sendEmail($data){

		$this->email->from('support@frescoserver.com', 'GetWork');
		$this->email->to($data['to']);
		$this->email->subject($data["subject"]);
		$this->email->message($data["msg"]);
		$res = $this->email->send();
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

}
