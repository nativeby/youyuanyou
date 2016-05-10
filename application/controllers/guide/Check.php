<?php

class Check extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guide_model');
	}

	public function waiting()
	{
		$this->load->view('guide/checkWaiting.html');
	}

	public function success()
	{
		$guide_id = $this->input->get('guide_id');
		$data['guide_id'] = $guide_id;
		$data['guide_info'] = $this->guide_model->get_guide_info_by_id($guide_id);
		$this->load->view('guide/checkSuccessful',$data);
	}

	public function fail()
	{
		$this->load->view('guide/checkFail.html');
	}
}
