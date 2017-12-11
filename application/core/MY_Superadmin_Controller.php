<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Superadmin_Controller extends MY_Controller {

	function __construct() {
		
		parent::__construct();
		$data = array();
		$this->load->model("superadmin/superadmin_model","superadmin");
		$this->adminid = (isset($_COOKIE['adminid']) && $_COOKIE['adminid']!="")?$_COOKIE['adminid']:"";
		$this->admin_name = (isset($_COOKIE['admin_name']) && $_COOKIE['admin_name']!="")?$_COOKIE['admin_name']:"";
		$this->admin_type = (isset($_COOKIE['admin_type']) && $_COOKIE['admin_type']!="")?$_COOKIE['admin_type']:"";
		$this->perPage = ($this->session->userdata("superadmin_length")?$this->session->userdata("superadmin_length"):10);
	}
}