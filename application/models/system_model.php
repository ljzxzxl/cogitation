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
	
	/**
	 * 批量接收参数
	 * 根据参数名返回含参数值的数组
	 */
	function get_args()
	{
		$args = func_get_args();
		$arr = array();
		foreach ($args as $key => $value){
			$arr[$value] = $this->input->get($value, TRUE);
			}
		return $arr;
	}
	function post_args()
	{
		$args = func_get_args();
		$arr = array();
		foreach ($args as $key => $value){
			$arr[$value] = $this->input->post($value, TRUE);
			}
		return $arr;
	}
	function get_post_args()
	{
		$args = func_get_args();
		$arr = array();
		foreach ($args as $key => $value){
			$arr[$value] = $this->input->get_post($value, TRUE);
			}
		return $arr;
	}
}
?>