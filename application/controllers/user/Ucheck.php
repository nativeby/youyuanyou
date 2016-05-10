<?php

class Ucheck extends CI_Controller {

	public function index()
	{
		$this->load->view('user/check.html');
		//$this->load->view('guide/checkSuccessful.html');
		//$this->load->view('guide/checkFail.html');
	}
}
