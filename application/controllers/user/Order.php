<?php

class Order extends CI_Controller {

	public function success()
	{
		$this->load->view('user/orderSuccess.html');
	}

	public function fail()
	{
		$this->load->view('user/guideDetail.html');
	}

	public function none()
	{
		$this->load->view('user/orderNoRecord.html');
	}
}
