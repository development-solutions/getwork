<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->Model('Model_register');
		$this->load->Model('Model_home');
	}
	public function index()
	{
		
		$jobCats = $this->Model_home->getJobCategories();

		if($this->input->post('register')){

			if($this->input->post('acType')=="applicant"){
				$applicant = true;
			}else{
				$applicant = false;
			}
			$verification_code = bin2hex(mt_rand());
			$data = array(
				"first_name"		=>	$this->input->post('first_name'),
				"last_name"			=>	$this->input->post('last_name'),
				"email"				=>	$this->input->post('email'),
				"password"			=>	$this->input->post('password'),
				"verification_code"	=>	$verification_code
			);

			$this->form_validation->set_rules('first_name', 'first name', 'required',array("required"=>"Please enter {field}."));
			$this->form_validation->set_rules('last_name', 'last name', 'required',array("required"=>"Please enter {field}."));
			$this->form_validation->set_rules('email', 'email address', 'required|valid_email|is_unique[users.email]',array("required"=>"Please enter {field}.","is_unique"=>"This email is already register with us."));
			$this->form_validation->set_rules('password', 'password', 'required',array("required"=>"Please enter {field}."));
			$this->form_validation->set_rules('passconf', 'confirm password', 'required|matches[password]',array("required"=>"Please enter {field}."));

			if ($this->form_validation->run() == FALSE){
				$errors = array(
					"error_fname"=>form_error("first_name"),
					"error_lname"=>form_error("last_name"),
					"error_email"=>form_error("email"),
					"error_password"=>form_error("password"),
					"error_passconf"=>form_error("passconf")
				);
				if($applicant){
					$this->twig->display('register',array("app_errors"=>$errors,"user"=>$data,"activeTab"=>"applicant","job_categories"=>$jobCats));	
				}else{
					$this->twig->display('register',array("emp_errors"=>$errors,"emp"=>$data,"activeTab"=>"employer","job_categories"=>$jobCats));
				}
                
            }else{
                $data["password"]=md5($this->input->post('password'));
                $data["role"] = $applicant ?  2 : 3;

                $res = $this->Model_register->insertUser($data);
                if(isset($res)){
                	$s_data = array(
				        'username'  => $this->input->post('first_name'),
				        'email'     => $this->input->post('email'),
				        'uid'		=> $res,
				        'logged_in' => TRUE,
				        'role'		=>$data['role']
					);
					$this->session->set_userdata($s_data);

					if($applicant){
						$prsnl_info = array(
							"user_id_fk"=>$res,
							"first_name"=>$this->input->post('first_name'),
							"last_name"=>$this->input->post('last_name'),
							"trade_fk"=>$this->input->post('trade'),
							"email"=>$this->input->post('email')
						);
						$this->Model_register->insertPersonalInfo($prsnl_info);
						$vCode = base_url()."home/verify_email/".$data["verification_code"];
						$link = '<a class="mcnButton " title="Verify your email address" target="_blank" href="'.$vCode.'" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Verify your email address</a>';
						$emailData = array(
							"to_email"		=>	$this->input->post('email'),
							"subject"		=>	"Welcome in GetWork",
							"template_name"	=>	"applicant_register",
							"template_content"	=>	array(
								array("name"=>"first_name","content"=>$this->input->post("first_name")),
								array("name"=>"verification_link","content"=>$link),
								array("name"=>"verification_url","content"=>$vCode)
							)
						);
						$this->sendToMandrill($emailData);
	                	redirect('/profile');	
					}else{
						$org_info = array(
							"user_id_fk"=>$res,
							"first_name"=>$this->input->post('first_name'),
							"last_name"=>$this->input->post('last_name'),
							"email"=>$this->input->post('email'),
							"company_name"=>$this->input->post('company_name')
						);
						$this->Model_register->insertOrgInfo($org_info);
						$vCode = base_url()."home/verify_email/".$data["verification_code"];
						$link = '<a class="mcnButton " title="Verify your email address" target="_blank" href="'.$vCode.'" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Verify your email address</a>';
						$emailData = array(
							"to_email"		=>	$this->input->post('email'),
							"subject"		=>	"Welcome in GetWork",
							"template_name"	=>	"employer_registration",
							"template_content"	=>	array(
								array("name"=>"first_name","content"=>$this->input->post("first_name")),
								array("name"=>"verification_link","content"=>$link),
								array("name"=>"verification_url","content"=>$vCode)
							)
						);
						$this->sendToMandrill($emailData);
	                	redirect('/dashboard');
					}					
                }else{
                	$this->twig->display('register');
                }
            }
		}else{
			$this->twig->display('register',array("job_categories"=>$jobCats,"activeTab"=>"employer"));
		}		
	}

	public function sendEmail($data){

		$this->email->from('support@frescoserver.com', 'GetWork');
		$this->email->to($data['email']);
		$this->email->subject("Welcome in GetWork");
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

	public function mandy(){
		$emailData = array(
			"to_email"		=>	"getworkofficial@gmail.com",
			"subject"		=>	"Welcome in GetWork",
			"template_name"	=>	"applicant_register",
			"template_content"	=>	array(
				array("name"=>"first_name","content"=>"Manpreet"),
				array("name"=>"verification_link","content"=>base_url())
			)
		);
		$this->sendToMandrill($emailData);
	}

	public function regUser(){

		$this->load->library('email');
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->load->Model('Model_register');
		$this->load->Model('Model_home');

		if($this->input->post('register')){

			if($this->input->post('acType')=="applicant"){
				$applicant = true;
			}else{
				$applicant = false;
			}
			$verification_code = bin2hex(mt_rand());
			$data = array(
				"first_name"		=>	$this->input->post('first_name'),
				"last_name"			=>	$this->input->post('last_name'),
				"email"				=>	$this->input->post('email'),
				"verification_code"	=>	$verification_code
			);

			$this->form_validation->set_rules('email', 'email address', 'required|valid_email|is_unique[users.email]',array("required"=>"Please enter {field}.","is_unique"=>"This email is already register with us."));

			if ($this->form_validation->run() == FALSE){
				$errors = array(
					"error_email"=>form_error("email")
				);
				$user = $this->Model_home->isEmailExist(array("email"=>$this->input->post("email")));
				$s_data = array(
			        'username'  => $this->input->post('first_name'),
			        'email'     => $this->input->post('email'),
			        'uid'		=> $user->id,
			        'role'		=> $user->role,
			        'verified'	=> $user->email_verify,
			        'logged_in' => TRUE			        
				);
				$this->session->set_userdata($s_data);
				if($user->role==2){					
					echo json_encode(array("response"=>"/profile","error"=>true));
					return true;
				}else{
					echo json_encode(array("response"=>"/dashboard","error"=>true));
					return true;
				}                
            }else{
                $data["role"] = $applicant ?  2 : 3;

                $res = $this->Model_register->insertUser($data);
                if(isset($res)){
                	$s_data = array(
				        'username'  => $this->input->post('first_name'),
				        'email'     => $this->input->post('email'),
				        'uid'		=> $res,				        
				        'role'		=>$data['role'],
				        'logged_in' => TRUE
					);
					$this->session->set_userdata($s_data);

					if($applicant){
						$prsnl_info = array(
							"user_id_fk"=>$res,
							"first_name"=>$this->input->post('first_name'),
							"last_name"=>$this->input->post('last_name'),
							"email"=>$this->input->post('email')
						);
						$this->Model_register->insertPersonalInfo($prsnl_info);
						$emailData = array(
							"to_email"		=>	$this->input->post('email'),
							"subject"		=>	"Welcome in GetWork",
							"template_name"	=>	"applicant_register",
							"template_content"	=>	array(
								array("name"=>"first_name","content"=>$this->input->post("first_name")),
								array("name"=>"verification_link","content"=>base_url()."home/verify_email/".$data["verification_code"])
							)
						);
						$this->sendToMandrill($emailData);
	                	echo json_encode(array("response"=>"/profile","error"=>false));
						return true;	
					}else{
						$org_info = array(
							"user_id_fk"=>$res,
							"first_name"=>$this->input->post('first_name'),
							"last_name"=>$this->input->post('last_name'),
							"email"=>$this->input->post('email')
						);
						$this->Model_register->insertOrgInfo($org_info);
						$emailData = array(
							"to_email"		=>	$this->input->post('email'),
							"subject"		=>	"Welcome in GetWork",
							"template_name"	=>	"employer_registration",
							"template_content"	=>	array(
								array("name"=>"first_name","content"=>$this->input->post("first_name")),
								array("name"=>"verification_link","content"=>base_url()."home/verify_email/".$data["verification_code"])
							)
						);
						$this->sendToMandrill($emailData);
	                	echo json_encode(array("response"=>"/dashboard","error"=>false));
						return true;
					}					
                }
            }
		}else{
			$this->twig->display('register',array("job_categories"=>$jobCats,"activeTab"=>"employer"));
		}		
	}

	public function resendVerification(){

		if($this->session->has_userdata('logged_in')){

			$verification_code = bin2hex(mt_rand());
			$template = $this->session->uid == 2 ? "applicant_register":"employer_registration";

			$where = array("id"=>$this->session->uid);
			$data = array("verification_code"=>$verification_code);
			$res = $this->Model_register->updateUser($data,$where);
			if($res){
				$emailData = array(
					"to_email"		=>	$this->session->email,
					"subject"		=>	"Welcome in GetWork",
					"template_name"	=>	$template,
					"template_content"	=>	array(
						array("name"=>"first_name","content"=>$this->session->username),
						array("name"=>"verification_link","content"=>base_url()."home/verify_email/".$verification_code)
					)
				);
				$this->sendToMandrill($emailData);
				echo json_encode(array("response"=>"Please check your email to verify account!","error"=>false));
			}else{
				echo json_encode(array("response"=>"Failure, Please try later!","error"=>true));
			}			
		}else{
			redirect("/");
		}
		
	}
}
