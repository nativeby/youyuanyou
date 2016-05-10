<?php

class Service extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guide_model');
		$this->load->model('service_model');
	}

	/**
	 * 介绍 + 服务 总预览
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

		// 导游服务
		$data['service_info'] = $this->service_model->get_service_info_by_guide_id($guide_id);


		$this->load->view('guide/myService',$data);
	}

	/**
	 * 增加服务页面
	 */
	public function add()
	{
		$data = array(
			'guide_id' => $this->input->get('guide_id'),
		);

		$this->load->view('guide/addService',$data);
	}

	/**
	 * 修改服务页面
	 */
	public function modify(){

		$service_id = $this->input->get('service_id');
		$data['service_id'] = $service_id;
		// 服务信息
		$data['service_info'] = $this->service_model->get_service_info_by_service_id($service_id);
		$this->load->view('guide/modifyService',$data);
	}


	/**
	 * 增加服务
	 */
	public function ajax_do_add()
	{
		$data = array(
			'guide_id' => $this->input->post('guide_id'),
			'name' => $this->input->post('name'),
			'list' => $this->input->post('list'),
			'unit' => $this->input->post('unit'),
			'location' => $this->input->post('location'),
			'duration' => $this->input->post('duration'),
			'normal_price' => $this->input->post('normal_price'),
			'overtime_price' => $this->input->post('overtime_price'),
			'max_people' => $this->input->post('max_people'),
			'serve_expense' => $this->input->post('serve_expense'),
			'food_expense' => $this->input->post('food_expense'),
			'live_expense' => $this->input->post('live_expense'),
			'travel_expense' => $this->input->post('travel_expense'),
		);

		$ret = $this->service_model->add_service($data);
		$data['code'] = 200;
		$data['msg'] = 'success';
		$data['data'] = $ret;
		echo json_encode($data);
	}

	public function ajax_modify()
	{
		$data = array(
			'id' => $this->input->post('service_id'),
			'name' => $this->input->post('name'),
			'list' => $this->input->post('list'),
			'unit' => $this->input->post('unit'),
			'location' => $this->input->post('location'),
			'duration' => $this->input->post('duration'),
			'normal_price' => $this->input->post('normal_price'),
			'overtime_price' => $this->input->post('overtime_price'),
			'max_people' => $this->input->post('max_people'),
			'serve_expense' => $this->input->post('serve_expense'),
			'food_expense' => $this->input->post('food_expense'),
			'live_expense' => $this->input->post('live_expense'),
			'travel_expense' => $this->input->post('travel_expense'),
		);

		$ret = $this->service_model->update_service($data);
		$data['code'] = 200;
		$data['msg'] = 'success';
		$data['data'] = $ret;
		echo json_encode($data);
	}


}
