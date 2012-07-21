<?php
require (ROOT.DS.APPPATH."libraries".DS."mysql".DS."cls_mysql.php");//APPPATH是CI系统预定义的application/,ROOT,DS是index.php中定义的
//继承mysql类,Ci_mysql注意如果文件名为大写,类名必须也大写
class Ci_mysql extends cls_mysql{
	function __construct(){
		parent::__construct(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_CHARSET);
	}
}
?>