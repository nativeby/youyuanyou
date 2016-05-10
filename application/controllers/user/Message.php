<?php

class Message extends CI_Controller {

	public function index()
	{
		$this->load->view('user/message.html');
	}

	public function reply()
	{
		$this->load->view('user/messageReply.html');
	}

	public function ask()
	{
		$this->load->view('user/messageReply.html');
	}
}
