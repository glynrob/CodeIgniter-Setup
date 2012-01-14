<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms extends CMS_Controller {

	public function index()
	{
		$this->load->view('cms_page');
	}
}

/* End of file cms.php */
/* Location: ./application/controllers/cms.php */