<?php

/**
 * 我的个人中心
 */
class Mine extends CI_Controller {

	public function index()
	{
		$this->load->view('user/mine.html');
	}
}
