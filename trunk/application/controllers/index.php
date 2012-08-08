<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$back_nav = $menu = Nav_Menu();
		$this->ci_smarty->assign("charset",CHARSET);
		$this->ci_smarty->assign("theme",APPPATH.THEMES);
		$this->ci_smarty->assign("back_nav",$back_nav);
		$this->ci_smarty->assign("menu_json",ecm_json_encode($menu));
		$this->ci_smarty->display("index.html");
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */