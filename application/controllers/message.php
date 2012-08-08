<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$message = $this->input->get('message');
		$this->Message_model->show_message($message);
	}
}

/* End of file message.php */
/* Location: ./application/controllers/message.php */