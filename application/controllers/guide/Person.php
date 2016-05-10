<?php

class Person extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guide_model');
	}

	/**
	 * 自我介绍
	 */
	public function index()
	{
		$guide_id = $this->input->get('guide_id');
		$data['guide_id'] = $guide_id;
		// 导游信息
		$data['guide_info'] = $this->guide_model->get_guide_info_by_id($guide_id);
		// 需特殊处理字段
		if(!empty($data['guide_info']['travel_picture'])){
			$data['guide_info']['travel_picture'] = explode(',',$data['guide_info']['travel_picture']);
		}

		$this->load->view('guide/person',$data);
	}
}
