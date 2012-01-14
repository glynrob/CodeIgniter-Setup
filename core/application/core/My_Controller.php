<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
		
	function __construct()
	{
		parent::__construct();
		
		/** // example password restriction to site
		$this->load->library('form_validation');
		if ($this->input->post('accesscode') == '123'){ // if posted value is 123 set session to allow access to the site
			$newdata = array('access'  => '1');
			$this->session->set_userdata($newdata);
		}
		if ($this->session->userdata('access') != '1'){ // if session is not set then only display the holding page
			include_once($_SERVER['DOCUMENT_ROOT'].'/assets/holding/index.php');
			die();
		}*/
	}
	
}

// end of file