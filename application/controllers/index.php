<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if(!@$_SESSION['user_name']){
			header("Location: index.php?c=login");
			return;
		}
		$back_nav = $menu = Nav_Menu();
		$this->ci_smarty->assign("back_nav",$back_nav);
		$this->ci_smarty->assign("menu_json",ecm_json_encode($menu));
		$this->ci_smarty->assign("user_name",@$_SESSION['user_name']);
		$this->ci_smarty->display("index.html");
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */