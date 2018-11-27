<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public $unreadmsg = 0;

	function __construct(){
    	parent::__construct();
    	$this->load->Model("Model_profile");
		if($this->session->has_userdata('logged_in') && $this->session->role==2){
			$msgs = $this->Model_profile->getUnreadMsg(array("msg_to"=>$this->session->uid));
			if(!empty($msgs))
				$this->unreadmsg = $msgs[0]->msgCount;
		}else{
			redirect('/');
		}		
  	}

	public function index(){

		$where = array("user_id_fk" => $this->session->uid);
		$condition = array("applicant_id_fk" => $this->session->uid);
		$user = $this->Model_profile->get_prnsl_info($where);
		$education = $this->Model_profile->get_education($condition);
		$experience = $this->Model_profile->get_experience($condition);
		$skills = $this->Model_profile->get_skills($condition);
		$data = array(
			"page"			=>	"profile",
			"user"			=>	$user,
			"education"		=>	$education,
			"experience"	=>	$experience,
			"skills"		=>	$skills,
			"verified"		=>	$this->session->verified,
			"unreadmsg"		=>	$this->unreadmsg
		);
		$this->twig->display("profile",$data);
	}

	public function edit_profile(){

		$where = array("user_id_fk" => $this->session->uid);
		$condition = array("applicant_id_fk" => $this->session->uid);
		$user = $this->Model_profile->get_prnsl_info($where);
		$education = $this->Model_profile->get_education($condition);
		$experience = $this->Model_profile->get_experience($condition);
		$skills = $this->Model_profile->get_skills($condition);
		$profile_image = true;
		$data = array(
			"page"=>"edit_profile",
			"user"=>$user,
			"fields"=>$user,
			"education"=>$education,
			"experience"=>$experience,
			"skills"=>$skills,
			"unreadmsg"=>$this->unreadmsg
		);

		if($this->input->post("edit")){

			$this->getEduInsertUpdate();
			$this->getExpInsertUpdate();
			$this->getSkillInsertUpdate();


			$fields = array(
				"first_name"	=>	$this->input->post("first_name"),
				"last_name"		=>	$this->input->post("last_name"),
				"d_o_b"			=>	$this->input->post("d_o_b"),
				"phone"			=>	$this->input->post("phone"),
				"last_education"=>	$this->input->post("last_education"),
				"address"		=>	$this->input->post("address"),
				"city"			=>	$this->input->post("city"),
				"postcode"		=>	$this->input->post("postcode"),
				"provience"		=>	$this->input->post("provience"),
				"country"		=>	"United Kingdom",
				"about_me"		=>	$this->input->post("about_me"),
				"facebook_url"	=>	$this->input->post("facebook_url"),
				"twitter_url"	=>	$this->input->post("twitter_url"),
				"linkedin_url"	=>	$this->input->post("linkedin_url"),
				"googleplus_url"=>	$this->input->post("googleplus_url")
			);
			if(!empty($_FILES["userfile"]["name"])){
				$profile_image	=	$this->uploadFile();
				$fields["profile_image"]	=	$profile_image;
			}

			$this->form_validation->set_rules('first_name', 'First Name', 'required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required');
			/*$this->form_validation->set_rules('facebook_url', 'Facebook', 'valid_url');
			$this->form_validation->set_rules('twitter_url', 'Twitter', 'valid_url');
			$this->form_validation->set_rules('linkedin_url', 'LinkedIn', 'valid_url');
			$this->form_validation->set_rules('googleplus_url', 'GooglePlus', 'valid_url');*/
			//$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.email]');

			if ($this->form_validation->run() == FALSE || $profile_image == FALSE){
				$errors = array(
					"error_fname"		=>	form_error("first_name"),
					"error_lname"		=>	form_error("last_name"),
					"error_image"		=>	"Use image less than 2MB"/*,
					"error_facebook"	=>	form_error("facebook_url"),
					"error_twitter"		=>	form_error("twitter_url"),
					"error_linkedin"	=>	form_error("linkedin_url"),
					"error_googleplus"	=>	form_error("googleplus_url")*/
					/*"error_email"=>form_error("email")*/
				);
				$data["errors"] = $errors;
				$data["fields"] = $fields;
                $this->twig->display('applicant_edit',$data);
            }else{
            	$where = array("user_id_fk" => $this->session->uid);
            	$res = $this->Model_profile->update_prsnl_info($fields,$where);
            	if(isset($res)){
            		/*$condition = array("applicant_id_fk" => $this->session->uid);
            		$data["email"]		=	$this->input->post("email");
            		$dataObj["user"]		=	$data;
            		$dataObj["education"]	=	$this->Model_profile->get_education($condition);
					$dataObj["experience"]	=	$this->Model_profile->get_experience($condition);
					$dataObj["skills"]		=	$this->Model_profile->get_skills($condition);
					$dataObj["page"]		=	"edit_profile";
					$dataObj["message"]		= "success";
            		$this->twig->display("applicant_edit",$dataObj);*/
            		redirect("/profile");
            	}else{
            		$data["opFailed"] = "Profile is not updated please try again !";
            		$this->twig->display("applicant_edit",$data);		
            	}
            }
		}else{

			$this->twig->display("applicant_edit",$data);
		}
	}

	public function resume(){

		$where = array("user_id_fk" => $this->session->uid);
		$result = $this->Model_profile->get_prnsl_info($where);
		$data = array(
			"user"=>$result,
			"page"=>"resume",
			"unreadmsg"=>$this->unreadmsg
		);
		$this->twig->display("appilcant_resume",$data);
	}

	public function getTotalUnread(){

		$msgs = $this->Model_profile->getUnreadMsg(array("msg_to"=>$this->session->uid));
		if(!empty($msgs)){
			return $msgs[0]->msgCount;
		}else{
			return 0;
		}
	}
	
	public function inbox(){

		$where = array("user_id_fk" => $this->session->uid);
		$user = $this->Model_profile->get_prnsl_info($where);
		$message = $this->Model_profile->getMessages(array("msg_to"=>$this->session->uid));
		$data = array(
			"page"		=>	"inbox",
			"user"		=>	$user,
			"messages"	=>	$message,
			"unreadmsg"	=>	$this->unreadmsg		
		);
		$this->twig->display("applicant_message",$data);
	}

	public function loadMessages($id){

		if(empty($this->uri->segment(3)))
			redirect("/");

		$msg = $this->Model_profile->load_messages($this->session->uid,$id);
		if($msg){
			$this->Model_profile->update_msg_seen($this->session->uid,$id);
			$unreadMsg = $this->getTotalUnread();
			echo json_encode(array("response"=>$msg,"unread"=>$unreadMsg,"error"=>false));
		}else{
			echo json_encode(array("response"=>"no more messages left.","error"=>true));
		}
	}

	public function jobs(){

		$where = array("user_id_fk" => $this->session->uid);
		$user = $this->Model_profile->get_prnsl_info($where);
		$jobs = $this->Model_profile->getJobs($this->session->uid);
		$data = array(
			"user"=>$user,
			"jobs"=>$jobs,
			"page"=>"jobs",
			"unreadmsg"=>$this->unreadmsg
		);
		$this->twig->display("applicant_jobs",$data);
	}

	public function bookmarked(){

		$where = array("user_id_fk" => $this->session->uid);
		$user = $this->Model_profile->get_prnsl_info($where);
		$jobs = $this->Model_profile->getBookmarked($this->session->uid);
		$data = array(
			"user"=>$user,
			"jobs"=>$jobs,
			"page"=>"bookmarked",
			"unreadmsg"=>$this->unreadmsg
		);
		$this->twig->display("applicant_bookmarked",$data);
	}

	public function followed(){

		$where		=	array("user_id_fk"=>$this->session->uid);
		$user		=	$this->Model_profile->get_prnsl_info($where);
		$companies	=	$this->Model_profile->getSubscribedOrg($this->session->uid);
		$data	=	array(
			"user"		=>	$user,
			"page"		=>	"followed",
			"companies"	=>	$companies,
			"unreadmsg"=>$this->unreadmsg
		);
		$this->twig->display("applicant_followed",$data);
	}

	public function resumeUpload(){

		$config['upload_path']          = dirname(dirname(dirname(__FILE__))).'/uploads/';
		$config['allowed_types']        = 'doc|pdf|docx|odt';
		//$config['max_size']             = 100;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('resume')){
			$error = array('error' => $this->upload->display_errors());
			$this->twig->display('my_resume', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->twig->display('my_resume', $data);
		}
	}

	public function applyJob($id){

		if(!$this->session->verified){
			echo json_encode(array("response"=>"Please verify your email to apply this job!","error"=>true));
			return true;
		}

		$data = array(
			"applicant_id_fk"	=>	$this->session->uid,
			"job_id_fk"			=>	$id
		);
		$job = $this->Model_profile->getJobDetails(array("id"=>$id));
		$res = $this->Model_profile->insertJob($data);
		if($res){
			$emailData = array(
				"to_email"			=>	$this->session->email,
				"subject"			=>	"Job Applied",
				"template_name"		=>	"job_applied",
				"template_content"	=>	array(
					array("name"=>"first_name","content"=>$this->session->username),
					array("name"=>"job_title","content"=>$job->title)
				)
			);
			$this->sendToMandrill($emailData);
			echo json_encode(array("response"=>"You have applied for this job Succesfully!","error"=>false));
		}else{
			echo json_encode(array("response"=>"You have already applied for this job!","error"=>true));
		}
	}

	public function bookmarkJob($id){

		$data = array(
			"applicant_id_fk"	=>	$this->session->uid,
			"job_id_fk"			=>	$id
		);
		$res = $this->Model_profile->bookmark_job($data);
		if($res){
			echo json_encode(array("response"=>"job bookmarked!","error"=>false));
		}else{
			echo json_encode(array("response"=>"This job is already bookmarked!","error"=>true));
		}
	}

	public function delete_bookmark($id){
		$where = array(
			"applicant_id_fk"	=>	$this->session->uid,
			"job_id_fk"			=>	$id
		);
		$res = $this->Model_profile->removeBookmark($where);
		if($res){
			echo json_encode(array("response"=>"Removed from bookmark Succesfully!","error"=>false));
		}else{
			echo json_encode(array("response"=>"There is an error while removing, please try later!","error"=>true));
		}
	}

	public function subscribeOrg($id){

		$data = array(
			"applicant_id_fk"	=>	$this->session->uid,
			"employer_id_fk"	=>	$id
		);
		$company = $this->Model_profile->getCompanyDetails(array("user_id_fk"=>$id));
		$res = $this->Model_profile->insertSubscription($data);
		if($res){
			$emailData = array(
				"to_email"			=>	$this->session->email,
				"subject"			=>	"Subscription successful",
				"template_name"		=>	"subscription",
				"template_content"	=>	array(
					array("name"=>"first_name","content"=>$this->session->username),
					array("name"=>"company","content"=>$company->company_name)
				)
			);
			$this->sendToMandrill($emailData);
			echo json_encode(array("response"=>"You have subscribe Succesfully!","error"=>false));
		}else{
			echo json_encode(array("response"=>"You have already subscribe this company!","error"=>true));
		}
	}

	public function settings(){

		$where		=	array("user_id_fk"=>$this->session->uid);
		$user		=	$this->Model_profile->get_prnsl_info($where);
		$data	=	array(
			"page"		=>	"settings",
			"user"		=>	$user,
			"unreadmsg"	=>	$this->unreadmsg
		);
		$this->twig->display("applicant_settings",$data);
	}

	public function getEduInsertUpdate(){
		$eduInsert = array();
		$eduUpdate = array();
		$eduId = $this->input->post("eduId");
		foreach ($eduId as $key => $value) {
			if(!empty($value)){
				if($this->input->post("degree_title")[$key] || $this->input->post("degree_college")[$key] || $this->input->post("degree_description")[$key]){
					$eduUpdate[] = array(
						"id"=>$value,
						"applicant_id_fk"=>$this->session->uid,
						"title"=>$this->input->post("degree_title")[$key],
						"college"=>$this->input->post("degree_college")[$key],
						"start_date"=>$this->input->post("degree_start_date")[$key],
						"end_date"=>$this->input->post("degree_end_date")[$key],
						"description"=>$this->input->post("degree_description")[$key]
					);
				}
			}else{
				if($this->input->post("degree_title")[$key] || $this->input->post("degree_college")[$key] || $this->input->post("degree_description")[$key]){
					$eduInsert[] = array(
						"applicant_id_fk"=>$this->session->uid,
						"title"=>$this->input->post("degree_title")[$key],
						"college"=>$this->input->post("degree_college")[$key],
						"start_date"=>$this->input->post("degree_start_date")[$key],
						"end_date"=>$this->input->post("degree_end_date")[$key],
						"description"=>$this->input->post("degree_description")[$key]
					);
				}
			}
		}
		if(!empty($eduInsert))
			$res = $this->Model_profile->eduInsert($eduInsert);
		if(!empty($eduUpdate))
			$res = $this->Model_profile->eduUpdate($eduUpdate);

	}

	public function getExpInsertUpdate(){
		$expInsert = array();
		$expUpdate = array();
		$expId = $this->input->post("expId");
		foreach ($expId as $key => $value) {
			if(!empty($value)){
				if($this->input->post("job_profile")[$key] || $this->input->post("job_company")[$key] || $this->input->post("job_description")[$key]){
					$expUpdate[] = array(
						"id"=>$value,
						"applicant_id_fk"=>$this->session->uid,
						"profile"=>$this->input->post("job_profile")[$key],
						"company"=>$this->input->post("job_company")[$key],
						"start_date"=>$this->input->post("job_start_date")[$key],
						"end_date"=>$this->input->post("job_end_date")[$key],
						"description"=>$this->input->post("job_description")[$key]
					);
				}
			}else{
				if($this->input->post("job_profile")[$key] || $this->input->post("job_company")[$key] || $this->input->post("job_description")[$key]){
					$expInsert[] = array(
						"applicant_id_fk"=>$this->session->uid,
						"profile"=>$this->input->post("job_profile")[$key],
						"company"=>$this->input->post("job_company")[$key],
						"start_date"=>$this->input->post("job_start_date")[$key],
						"end_date"=>$this->input->post("job_end_date")[$key],
						"description"=>$this->input->post("job_description")[$key]
					);
				}
			}
		}
		if(!empty($expInsert))
			$res = $this->Model_profile->expInsert($expInsert);
		if(!empty($expUpdate))
			$res = $this->Model_profile->expUpdate($expUpdate);
	}

	public function getSkillInsertUpdate(){
		$skillInsert = array();
		$skillUpdate = array();
		$skillId = $this->input->post("skillId");
		foreach ($skillId as $key => $value) {
			if(!empty($value)){
				if($this->input->post("skill_name")[$key]){
					$skillUpdate[] = array(
						"id"=>$value,
						"applicant_id_fk"=>$this->session->uid,
						"name"=>$this->input->post("skill_name")[$key]
					);
				}
			}else{
				if($this->input->post("skill_name")[$key]){
					$skillInsert[] = array(
						"applicant_id_fk"=>$this->session->uid,
						"name"=>$this->input->post("skill_name")[$key]
					);
				}
			}
		}
		if(!empty($skillInsert))
			$res = $this->Model_profile->skillInsert($skillInsert);
		if(!empty($skillUpdate))
			$res = $this->Model_profile->skillUpdate($skillUpdate);
	}

	public function deleteEdu(){

		$where = array("applicant_id_fk"=>$this->session->uid,"id"=>$this->input->post("id"));
		$res = $this->Model_profile->delete_edu($where);
		if(isset($res)){
			echo json_encode(array("response"=>$res,"error"=>0));
		}else{
			echo json_encode(array("response"=>$res,"error"=>1));
		}
		
	}
	public function deleteExp(){

		$where = array("applicant_id_fk"=>$this->session->uid,"id"=>$this->input->post("id"));
		$res = $this->Model_profile->delete_exp($where);
		if(isset($res)){
			echo json_encode(array("response"=>$res,"error"=>0));
		}else{
			echo json_encode(array("response"=>$res,"error"=>1));
		}
		
	}
	public function deleteSkill(){

		$where = array("applicant_id_fk"=>$this->session->uid,"id"=>$this->input->post("id"));
		$res = $this->Model_profile->delete_skill($where);
		if(isset($res)){
			echo json_encode(array("response"=>$res,"error"=>0));
		}else{
			echo json_encode(array("response"=>$res,"error"=>1));
		}
		
	}

	public function sendMessage(){

		$data = array(
			"message"=>$this->input->post("message"),
			"msg_to"=>$this->input->post("to"),
			"msg_from"=>$this->session->uid
		);

		$res = $this->Model_profile->insertMessage($data);
		if($res){
			echo json_encode(array("response"=>"Your message has been sent Succesfully!","error"=>false));
		}else{
			echo json_encode(array("response"=>"Message send failed","error"=>true));
		}
	}

	public function delete_msg($id){

		$where = array("to"=>$this->session->uid,"id"=>$id);
		$res = $this->Model_profile->deleteMsg($where);
		echo $res;
	}

	public function uploadFile(){

		$target_dir = FCPATH.'/uploads/';
		if($_FILES["userfile"]["size"]>2000000){
			return false;
		}
		$file_name = $target_dir . pathinfo($_FILES["userfile"]["name"],PATHINFO_FILENAME);
		$target_file = $file_name.date("YmdHis").".".pathinfo($_FILES["userfile"]["name"],PATHINFO_EXTENSION);
		if(move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file)){
			return basename($target_file);	
		}else{
			return false;
		}
	}

	public function updatePassword(){
		$where		=	array("user_id_fk"=>$this->session->uid);
		$user		=	$this->Model_profile->get_prnsl_info($where);
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
				$this->twig->display("applicant_settings",$data);
			}else{
				$update  = array("password"=>md5($this->input->post("new_password")));
				$where = array("id"=>$this->session->uid);
				$res = $this->Model_profile->update_password($update,$where);
				if($res){
					$data["alert"]		=	"success";
					$data["message"]	=	"Your password updated succesfully!";
				}else{
					$data["alert"]		=	"error";
					$data["message"]	=	"There is an error while updating password, Please try later!";
				}
				$this->twig->display("applicant_settings",$data);
			}

		}else{
			$this->twig->display("applicant_settings",$data);
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
			$res = $this->Model_profile->check_password($where);
			if(!$res){
				$this->form_validation->set_message('checkPassword', 'The {field} doesn\'t matched.');
				return false;		
			}
		}
	}

	public function courses(){

		$where		=	array("user_id_fk"=>$this->session->uid);
		$user		=	$this->Model_profile->get_prnsl_info($where);
		$courses	=	$this->Model_profile->getShortlistedCourses($this->session->uid);
		$data	=	array(
			"page"		=>	"courses",
			"user"		=>	$user,
			"courses"	=>	$courses,
			"unreadmsg"	=>	$this->unreadmsg
		);
		$this->twig->display("applicant_courses",$data);

	}

	public function shortListCourse($id){

		$data = array(
			"applicant_id_fk"	=>	$this->session->uid,
			"course_id_fk"		=>	$id
		);

		$res = $this->Model_profile->shortlistCourse($data);
		if($res){
			echo json_encode(array("response"=>"The course is add to your course list!","error"=>false));
		}else{
			echo json_encode(array("response"=>"Course is already added to your course list!","error"=>true));
		}
	}

	public function delete_course($id){

		$where = array(
			"applicant_id_fk"	=>	$this->session->uid,
			"course_id_fk"		=>	$id
		);

		$res = $this->Model_profile->removeCourse($where);
		if($res){
			echo json_encode(array("response"=>"Removed from course list succesfully!","error"=>false));
		}else{
			echo json_encode(array("response"=>"There is an error while removing, please try later!","error"=>true));
		}
	}

	public function queryCourse(){

		$course = $this->Model_profile->getCourseDetails($this->input->post("courseid"));
 
		$msg = "Hello ".$course->first_name.",<p> You get a enquery regarding ".$course->title." course, please look at the below details of candidate.</p>";
		$msg.=	"<table>";
		$msg.=	"<tr><th>Name : </th><td>".$this->session->username."</td></tr>";
		$msg.=	"<tr><th>Email : </th><td>".$this->session->email."</td></tr>";
		$msg.=	"<tr><th>Equery : </th><td>".$this->input->post("message")."</td></tr>";
		$msg.=	"</table>";
		$this->email->from('support@frescoserver.com', 'GetWork');
		$this->email->to($course->email);
		$this->email->subject("Course Equery");
		$this->email->message($msg);
		$res = $this->email->send();
		if($res){
			echo json_encode(array("response"=>"Your message sent succesfully. We will get back to you soon.","error"=>false));
		}else{
			echo json_encode(array("response"=>"failed to send your query, please try later!","error"=>true));
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
