<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ci_smarty_test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->library("ci_smarty");//ci_smarty首字母可小写.不解请百度
		$this->ci_smarty->assign("hello","<h1>this is hello page</h1>"); //smarty设置值
		$this->ci_smarty->display("test.html");
	}
}

/* End of file Ci_smarty_test.php */
/* Location: ./application/controllers/Ci_smarty_test.php */