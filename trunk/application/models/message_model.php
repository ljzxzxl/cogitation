<?php
class Message_model extends CI_Model {

	/**
	 * 系统消息控制器
	 * 控制各种提示,警告,错误等信息的展示
	 */
    function __construct()
    {
        parent::__construct();
    }
    
    function show_message($message)
    {
		$this->ci_smarty->assign("message",$message);
		return $this->ci_smarty->display("message.html");
    }
}
?>