<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends MY_Welcome
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("common_model","common");
	}

	public function myController()
	{
		echo "my controller CI";
	}
} 