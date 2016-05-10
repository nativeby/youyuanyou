<?php

class Pay extends CI_Controller {

	public function index()
	{
		$data['amount'] = $this->input->get('amount');
		$this->load->view('user/pay',$data);
	}

	public function result()
	{
		//$this->load->view('user/paySuccess.html');
		$this->load->view('user/payFail.html');
	}
}
