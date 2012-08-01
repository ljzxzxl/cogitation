<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->library("ci_smarty");
		$this->ci_smarty->assign("charset",CHARSET);
		$this->ci_smarty->assign("theme",APPPATH.THEMES);
		$this->ci_smarty->display("login.html");
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */