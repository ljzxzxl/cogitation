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
    
    function show_message($message, $text='返回上一页', $href='javascript:history.back()')
    {
		$links[] = array('text' => $text, 'href' => $href);
		$redirect = (strstr($href, 'javascript:') !== false) ? $href : "location.href='{$href}'";
		$this->ci_smarty->assign("links",$links);
		$this->ci_smarty->assign("redirect",$redirect);
		$this->ci_smarty->assign("message",$message);
		return $this->ci_smarty->display("message.html");
    }
}
?>