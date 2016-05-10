<?php

class Search extends CI_Controller {

	public function index()
	{
		$this->load->view('user/search.html');
	}

	public function none()
	{
		$this->load->view('user/searchNoRecord.html');
	}
}
