<?php 
class Superadmin extends MY_Superadmin_Controller {
	Public function __construct() { 
		parent::__construct();
		$this->is_logged_in();
		$this->type = (isset($_COOKIE['type']))?$_COOKIE['type']:"";
	}
	public function is_logged_in(){
		$is_admin_logged_in = (isset($_COOKIE['is_admin_logged_in']) && $_COOKIE['is_admin_logged_in']==1)?$_COOKIE['is_admin_logged_in']:0;
		$type = (isset($_COOKIE['type']))?$_COOKIE['type']:"";
		if(!isset($is_admin_logged_in) || $is_admin_logged_in != true || $type != "superadmin"){
			redirect(base_url("superadmin-login"));
		}
	}
	public function index(){
		$this->loadAdminHtml("index","Home Page");
	}

	function logout(){
		setcookie('admin_email',"",0,"/","");
		setcookie('admin_name',"",0,"/","");
		setcookie('adminid',"",0,"/","");
		setcookie('type',"",0,"/","");
		setcookie('is_admin_logged_in',false,0,"/","");
		redirect(base_url("superadmin-login"));
	}
}