<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CMS_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin_in') == FALSE){
			redirect('/cms_login', 'refresh'); // redirect if not logged in
		}
    }
}

// end of file