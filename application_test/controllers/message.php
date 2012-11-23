<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->Message_model->show_message("消息提示测试");
		/*批量参数接收测试*/
		$args = $this->System_model->get_args("a","b");
		//print_r($args);
		extract($args);
		echo "\$a = {$a}; \$b = {$b};";
	}
}

/* End of file message.php */
/* Location: ./application/controllers/message.php */