<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	private $USER;

	function __construct(){
		parent::__construct();
		$this->load->Model("Model_admin");		
		if($this->session->has_userdata('logged_in') && $this->session->role==1){
			$this->USER = $this->Model_admin->get_user_info(array("id" => $this->session->uid));
		}else{
			redirect('/');
		}		
	}

	public function index(){

		$data	=	array(
			"page"	=>	"dashboard",
			"user"	=>	$this->USER
		);
		$this->twig->display("/admin/dashboard",$data);
	}

	public function jobs(){

		$jobs = $this->Model_admin->pending_jobs();
		$data	=	array(
			"page"	=>	"jobs",
			"user"	=>	$this->USER,
			"jobs"	=>	$jobs
		);
		$this->twig->display("/admin/joblist",$data);
	}

	public function courses(){

		$courses = $this->Model_admin->pending_courses();
		$data	=	array(
			"page"	=>	"courses",
			"user"	=>	$this->USER,
			"courses"	=>	$courses
		);
		$this->twig->display("/admin/courselist",$data);
	}

	public function featuredjobs(){

		$data	=	array(
			"page"	=>	"featuredjobs",
			"user"	=>	$this->USER
		);
		$this->twig->display("/admin/featuredjobs",$data);
	}

	public function approveJob($id){

		if(!isset($id)){
			echo json_encode(array("response"=>"This is not a valid job to approve","error"=>true));
			return true;
		}

		$job = $this->Model_admin->getJobDetails($id);
		$res = $this->Model_admin->setApproveJob(array("approved"=>1),array("id"=>$id));
		if($res){
			$emailData = array(
				"to_email"		=>	$job->email,
				"subject"		=>	"Job Approved",
				"template_name"	=>	"job_approved",
				"template_content"	=>	array(
					array("name"=>"first_name","content"=>$job->username),
					array("name"=>"job_title","content"=>$job->title)
				)
			);
			$this->sendToMandrill($emailData);
			echo json_encode(array("response"=>"The Job is approved successfully!","error"=>false));
		}else{
			echo json_encode(array("response"=>"There is an error while approving this job!","error"=>true));
		}
	}

	public function disapproveJob(){

		$job	=	$this->Model_admin->getJobDetails($this->input->post("jobid"));
		$emailData = array(
				"to_email"		=>	$job->email,
				"subject"		=>	"Job Disapproved",
				"template_name"	=>	"job_disapproved",
				"template_content"	=>	array(
					array("name"=>"first_name","content"=>$job->username),
					array("name"=>"job_title","content"=>$job->title),
					array("name"=>"reason","content"=>$this->input->post("message"))
				)
			);
		$this->sendToMandrill($emailData);
		$res = $this->Model_admin->setApproveJob(array("approved"=>-1),array("id"=>$this->input->post("jobid")));
		if($res){
			echo json_encode(array("response"=>"email notification has been sent to ".$job->username." !","error"=>false));
		}else{
			echo json_encode(array("response"=>"failed to send notification, please try later!","error"=>true));
		}
	}

	public function approveCourse($id){

		if(!isset($id)){
			echo json_encode(array("response"=>"This is not a valid course to approve","error"=>true));
			return true;
		}

		$course = $this->Model_admin->getCourseDetails($id);
		$res = $this->Model_admin->setApproveCourse(array("approved"=>1),array("id"=>$id));
		if($res){
			$emailData = array(
				"to_email"		=>	$course->email,
				"subject"		=>	"Course Approved",
				"template_name"	=>	"course_approved",
				"template_content"	=>	array(
					array("name"=>"first_name","content"=>$course->username),
					array("name"=>"course_title","content"=>$course->title)
				)
			);
			$this->sendToMandrill($emailData);
			echo json_encode(array("response"=>"The course is approved successfully!","error"=>false));
		}else{
			echo json_encode(array("response"=>"There is an error while approving this course!","error"=>true));
		}
	}

	public function disapproveCourse(){

		$course	=	$this->Model_admin->getCourseDetails($this->input->post("courseid"));
		$emailData = array(
			"to_email"		=>	$course->email,
			"subject"		=>	"Course Disapproved",
			"template_name"	=>	"course_disapproved",
			"template_content"	=>	array(
				array("name"=>"first_name","content"=>$course->username),
				array("name"=>"course_title","content"=>$course->title),
				array("name"=>"reason","content"=>$this->input->post("message"))
			)
		);
		$this->sendToMandrill($emailData);
		$res = $this->Model_admin->setApproveCourse(array("approved"=>-1),array("id"=>$this->input->post("courseid")));
		if($res){
			echo json_encode(array("response"=>"email notification has been sent to ".$course->username." !","error"=>false));
		}else{
			echo json_encode(array("response"=>"failed to send notification, please try later!","error"=>true));
		}
	}

	public function courseinfo($id){
		if(empty($id))
			redirect("/");

		$course = $this->Model_admin->getCourseDetails($id);
		$data	=	array(
			"user"		=>	$this->USER,
			"course"	=>	$course
		);		
		$this->twig->display("/admin/courseinfo",$data);
	}

	public function jobdetails($id){
		if(empty($id))
			redirect("/");

		$job = $this->Model_admin->getJobDetails($id);
		$data = array(
			"user"	=>	$this->USER,
			"job"	=>	$job
		);
		$this->twig->display("/admin/job_details",$data);
	}

	public function sendEmail($data){

		$this->email->from('support@frescoserver.com', 'GetWork');
		$this->email->to($data['to']);
		$this->email->subject($data["subject"]);
		$this->email->message($data["message"]);
		$res = $this->email->send();
		return $res;
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

	public function candidates(){

		$candidates = $this->Model_admin->getCandidates();
		$data	=	array(
			"page"			=>	"candidates",
			"user"			=>	$this->USER,
			"candidates"	=>	$candidates
		);
		$this->twig->display("/admin/candidates",$data);
	}

	public function employers(){

		$employers = $this->Model_admin->getEmployers();
		$data	=	array(
			"page"		=>	"employers",
			"user"		=>	$this->USER,
			"employers"	=>	$employers
		);
		$this->twig->display("/admin/employers",$data);
	}

	public function verifyUser($uid){

		if(empty($uid))
			redirect("/admin");

		$res = $this->Model_admin->verify_user(array("id"=>$uid));

		redirect("/admin/employers");
	}

	public function postjob(){

		$this->load->Model('Model_home');
		$this->load->Model('Model_dashboard');
		$jobCats 	=	$this->Model_home->getJobCategories();
		$type 		=	$this->Model_dashboard->getJobType();
		$experience =	$this->Model_dashboard->getJobExperience();
		$salaryType =	$this->Model_dashboard->getSalaryType();
		
		$data = array(
			"job_categories"	=>	$jobCats,
			"user"				=>	$this->USER,
			"jobType"			=>	$type,
			"jobExperience"		=>	$experience,
			"salaryType"		=>	$salaryType,
			"page"				=>	"postjob",
		);

		if($this->input->post('post')){
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
				
				$this->twig->display("/admin/post_job",$data);
			}else{
				$res = $this->Model_dashboard->insertJob($fields);
				$data["alert"]		=	"success";
				$data["message"]	=	"Your job posted Succesfully!";
				
				if(isset($res)){
					/*$emailData = array(
						"to_email"			=>	$this->session->email,
						"subject"			=>	"Job Posted",
						"template_name"		=>	"job_post",
						"template_content"	=>	array(
							array("name"=>"first_name","content"=>$this->session->username),
							array("name"=>"job_title","content"=>$this->input->post("title"))
						)
					);
					$this->sendToMandrill($emailData);*/
					redirect("admin/post_job");
					//$this->twig->display("post_job",$data);
				}
			}
		}else{
			$this->twig->display("/admin/post_job",$data);
		}
	}
}
?>