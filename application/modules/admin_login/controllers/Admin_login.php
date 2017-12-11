<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Login extends MY_Controller {

	public function __construct() { 
		parent::__construct();
		$this->is_logged_in();
	}

	public function index()
	{
		$result = $sqldb->query("show tables")->result_array();
		echo "<pre>";
		print_r ($result);
		echo "</pre>";die;
	}


	function is_logged_in()
	{
		$is_admin_logged_in = (isset($_COOKIE['is_admin_logged_in']) && $_COOKIE['is_admin_logged_in']==1)?$_COOKIE['is_admin_logged_in']:0;
		if(!isset($is_admin_logged_in) || $is_admin_logged_in != true)
		{
		}else{
			redirect(base_url('admin'));
		}
	}

	public function superadminLoginPage()
	{
		$data['title'] = "Superadmin Login";
		$data['action'] = "superadminlogin";
		$data['table'] = "admin";
		$data['type'] = "superadmin";
		$this->load->view("login",$data);
	}

	public function adminLoginPage()
	{
		$data['title'] = "Admin Login";
		$data['action'] = "adminlogin";
		$data['table'] = "admin";
		$data['type'] = "admin";
		$this->load->view("login",$data);
	}

	public function doLogin()
	{
		if(!isset($_POST['login']))
		{
			$_POST['login'] = 'Login';
		}
		if(isset($_POST['login']))
		{
			$type = $_POST['type'];
			if(isset($_POST['email']) && $_POST['email']==""){
				$this->session->set_flashdata("emessage","Enter email");
				if($type == "superadmin"){
					redirect(base_url("superadmin-login"));
				}else if($type == "admin"){
					redirect(base_url("admin-login"));
				}else{
					redirect(base_url("client-login"));
				}
			}
			if(isset($_POST['password']) && $_POST['password']==""){
				$this->session->set_flashdata("emessage","Enter Password");
				if($type == "superadmin"){
					redirect(base_url("superadmin-login"));
				}else if($type == "admin"){
					redirect(base_url("admin-login"));
				}else{
					redirect(base_url("client-login"));
				}
			}
			if(isset($_POST['email']) && isset($_POST['password']))
			{
				if($data = $this->common->getsData("admin",array('email'=>$_POST['email'],'password'=>md5($_POST['password']))))
				{
					if(($data['email']!=$_POST['email']) || ($data['password']!=md5($_POST['password'])))
					{
						$this->session->set_flashdata('emessage',$this->lang->line('error_user_login'));
						if($type == "superadmin"){
							redirect(base_url("superadmin-login"));
						}else if($type == "admin"){
							redirect(base_url("admin-login"));
						}else{
							redirect(base_url("client-login"));
						}
					}else{
						$this->loginAdminRedirect($data);
					}
				}else{
					$this->session->set_flashdata('emessage',$this->lang->line('error_user_login'));
					if($type == "superadmin"){
							redirect(base_url("superadmin-login"));
						}else if($type == "admin"){
							redirect(base_url("admin-login"));
						}else{
							redirect(base_url("client-login"));
						}
				}
			}
		}
	}

	public function loginAdminRedirect($data=array())
	{
		/*$sdata = array(
			'admin_email' => $data['email'],
			'admin_name' => $data['name'],
			'adminid' => $data['adminid'],
			'type' => $data['type'],
			'is_admin_logged_in' => true
		);
		$this->session->set_userdata($sdata);*/
		setcookie('admin_email',$data['email'],time() + (60*60*24*30),"/","");
		setcookie('admin_name',$data['name'],time() + (60*60*24*30),"/","");
		setcookie('adminid',$data['adminid'],time() + (60*60*24*30),"/","");
		setcookie('type',$data['type'],time() + (60*60*24*30),"/","");
		setcookie('is_admin_logged_in',true,time() + (60*60*24*30),"/","");
		redirect(base_url($data['type']));
	}
}