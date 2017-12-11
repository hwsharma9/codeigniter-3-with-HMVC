<?php 
class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('common_model','common');
		$this->config->load('custom');
		$this->load->library('email');
		$this->load->library('image_lib');
		$this->load->library('pagination');
		$segment = $this->uri->segment(1);
		
		/* Protact User to come back after logout code START */
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		if($segment != "jobs-search"){
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		}else{
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0');
		}
		$this->output->set_header('Pragma: no-cache');
	}

	public function loadAdminHtml($pagename='',$title='',$data=array())
	{
		$type = (isset($_COOKIE['type']))?$_COOKIE['type']:"";
		$data['head_title'] = $title;
		$is_admin_logged_in = (isset($_COOKIE['is_admin_logged_in']) && $_COOKIE['is_admin_logged_in']==1)?$_COOKIE['is_admin_logged_in']:0;
		if(!isset($is_admin_logged_in) || $is_admin_logged_in != true)
		{
			$header = 'admin_header';
		}else{
			$header = 'admin_header';
		}
		$this->load->view($header,$data);
		if(!isset($is_admin_logged_in) || $is_admin_logged_in != true)
		{
		}else{
			$sidebar = $type.'_sidebar';
			$this->load->view($sidebar,$data);
		}
		$this->load->view($pagename,$data);
		$this->load->view('admin_footer');
	}

} 