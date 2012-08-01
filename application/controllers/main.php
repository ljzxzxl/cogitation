<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->benchmark->mark('code_start');
		$this->load->library("ci_smarty");
		$this->ci_smarty->assign("charset",CHARSET);
		$this->ci_smarty->assign("theme",APPPATH.THEMES);
		$this->ci_smarty->display("main.html");
		$this->benchmark->mark('code_end');
		echo $elapsed_time = $this->benchmark->elapsed_time('code_start', 'code_end');
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */