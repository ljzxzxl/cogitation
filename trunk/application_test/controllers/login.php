<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if(isset($_POST["submit"])){
			$args = $this->System_model->post_args("user_name","password");
			//extract($args);
			//echo "\$user_name = {$user_name}; \$password = {$password};";
			$user_name = trim($args["user_name"]);
			$password  = $args["password"];
			$user_id = $this->System_model->auth($user_name, $password);
			if($user_id){
				$this->_do_login($user_id);
				$this->Message_model->show_message("登录成功", "转到后台首页", "index.php");
			}else{
				/* 未通过验证，提示错误信息 */
				$this->Message_model->show_message("抱歉，用户名或密码有误！");
			}
		}else{
			//验证码
			$captcha = '';
			$this->ci_smarty->assign("captcha",$captcha);
			$this->ci_smarty->display("login.html");
		}
	}
	
	/**
	 * 执行登录操作
	 */
	function _do_login($user_id){
		$user_info = $this->ci_mysql->getRow("SELECT * FROM ecm_member WHERE user_id = '{$user_id}'");
		/*配置登录信息*/
		$_SESSION['user_id'] = $user_info['user_id'];
		$_SESSION['user_name'] = $user_info['user_name'];
		$_SESSION['reg_time'] = $user_info['reg_time'];
		$_SESSION['last_login'] = $user_info['last_login'];
		$_SESSION['last_ip'] = $user_info['last_ip'];
		/*更新登录信息*/
		$time = time();
		$ip = real_ip();
	}
	
	function logout(){
		session_destroy();
		$this->Message_model->show_message("注销成功！");
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */