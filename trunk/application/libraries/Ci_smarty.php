<?php
require (ROOT.DS.APPPATH."libraries".DS."smarty".DS."Smarty.class.php");//APPPATH是CI系统预定义的application/,ROOT,DS是index.php中定义的
//继承smarty类,Ci_smarty注意如果文件名为大写,类名必须也大写
class Ci_smarty extends Smarty{
	function __construct(){
		parent::__construct();
		self::loadsmarty();
	}
	//配置smarty
	function loadsmarty(){
		$this->template_dir		= ROOT.DS.APPPATH.THEMES.DS;
		$this->compile_dir		= ROOT.DS.APPPATH.'cache'.DS;
		$this->config_dir		= ROOT.DS.APPPATH.'config'.DS;
		$this->cache_dir		= ROOT.DS.APPPATH.'cache'.DS;
		$this->left_delimiter	= '{{';
		$this->right_delimiter	= '}}';
	}
}
?>