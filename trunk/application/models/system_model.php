<?php
class System_model extends CI_Model {

	/**
	 * 系统自动初始化模型
	 * 
	 */
    function __construct()
    {
        parent::__construct();
		$this->init();
    }
    
    function init()
    {
		/*初始化系统基础变量*/
		$this->ci_smarty->assign("charset",CHARSET);
		$this->ci_smarty->assign("theme",APPPATH.THEMES);
    }
}
?>