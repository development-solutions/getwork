<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->Model("Model_login");
		$this->load->helper('cookie');

		if($this->input->post("login")){

			if($this->input->post("remember")){
				if($this->input->post("email")){
					$cookie = array(
	                    'name'  	=>	'email',
	                    'value' 	=>	$this->input->post("email"),
	                    'expire'	=>	 2595000,
	                    'secure'	=>	false
	                );
	                $this->input->set_cookie($cookie);
				}
				if($this->input->post("password")){
					$cookie = array(
	                    'name'  	=>	'password',
	                    'value' 	=>	$this->input->post("password"),
	                    'expire'	=>	 2595000,
	                    'secure'	=>	false
	                );
	                $this->input->set_cookie($cookie);
				}
			}
			$where = array(
				"email"=>$this->input->post("email"),
				"password"=>md5($this->input->post("password"))
			);
			$res = $this->Model_login->getUser($where);
			if(isset($res)){

				$this->Model_login->updateLastLogin(array("id"=>$res->id));
				$s_data = array(
			        'username'  => $res->first_name,
			        'email'     => $res->email,
			        'uid'		=> $res->id,
			        'role'		=> $res->role,
			        'verified'	=> $res->email_verify,
			        'logged_in' => TRUE
				);
				$this->session->set_userdata($s_data);
				if($res->role==1){
					redirect('/admin');
				}else if($res->role==2){
					redirect('/profile');
				}else if($res->role==3){
					redirect('/dashboard');
				}else{
					redirect('/login');
				}
			}else{
				$this->twig->display('login',array("login_error"=>"either email or password is incorrect!"));
			}
		}else{
			$this->session->set_userdata("user_ip",$this->input->ip_address());
			$data = array(
				"c_email"	=>	$this->input->cookie('email', false),
				"c_password"=>	$this->input->cookie('password', false)
			);
			$this->twig->display('login',$data);
		}
	}

	public function relogin(){

		$this->load->Model("Model_login");

		if($this->session->has_userdata("logged_in")){
			$res = $this->Model_login->getUser(array("id"=>$this->session->uid));
			$this->session->set_userdata('verified', $res->email_verify);
			if($res->role==2){
				redirect('/profile');
			}else if($res->role==3){
				redirect('/dashboard');
			}else{
				redirect('/login');
			}
		}else{
			redirect("/login");
		}
	}

	public function forgotpassword(){


		$this->twig->display("forgotpwd");
	}
}
