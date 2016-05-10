<?php

class Place extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guide_model');
	}

	/**
	 * 目的地列表页place.html
	 */
	public function index()
	{
		$data['guide_sc'] = $this->guide_model->get_guide_count_group_by_service_city();
		$this->load->view('user/place',$data);
	}
}
