<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->ci_smarty->display("login.html");
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */