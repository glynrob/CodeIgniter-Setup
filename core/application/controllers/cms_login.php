<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms_login extends My_Controller {

	public function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_error_delimiters('<div style="color:red;">','</div>');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('cms_login');
		}
		else
		{
			$newdata = array(
			   'admin_in' => TRUE
			);
			$this->session->set_userdata($newdata);
			redirect('/cms', 'refresh');
		}
	}
}

/* End of file cms_login.php */
/* Location: ./application/controllers/cms_login.php */