<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms extends CMS_Controller {

	public function index()
	{
		$this->load->model('Example','',TRUE);
		$allRecords = $this->Example->getAll();
		$idOne = $this->Example->getById(1);
		$data = array(
       		'allRecords' => $allRecords,
        	'idOne' => $idOne
        );
		$this->load->view('cms_page',$data);
	}
}

/* End of file cms.php */
/* Location: ./application/controllers/cms.php */