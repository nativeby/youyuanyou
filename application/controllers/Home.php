<?php

class Home extends CI_Controller {

	public function index()
	{
		//require_once(APPPATH.'/libraries/sms/SendTemplateSMS.php');
		//sendTemplateSMS("18210962756","内容数据");exit;

		header('Location: /user/home');
		exit;
	}
}
