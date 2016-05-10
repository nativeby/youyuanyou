<?php

class Reserve extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guide_model');
		$this->load->model('service_model');
		$this->load->model('order_model');
	}

	/**
	 * 预定选择页
	 */
	public function index()
	{
		$guide_id = $this->input->get('guide_id');
		$data['guide_id'] = $guide_id;
		// 导游信息
		$data['guide_info'] = $this->guide_model->get_guide_info_by_id($guide_id);
		// 导游服务
		$data['service_info'] = $this->service_model->get_service_info_by_guide_id($guide_id);

		$this->load->view('user/reserve',$data);
	}

	/**
	 * 预定结果页
	 */
	public function result()
	{
		$data['guide_id'] = $this->input->post('guide_id');
		$data['adult_num'] = $this->input->post('adult_num');
		$data['child_num'] = $this->input->post('child_num');
		$data['contact_phone'] = $this->input->post('contact_phone');
		$data['is_checked'] =  $this->input->post('is_checked');
		$data['service_name'] =  $this->input->post('service_name');
		$data['service_date'] =  $this->input->post('service_date');
		$data['normal_price'] =  $this->input->post('normal_price');
		$data['location'] =  $this->input->post('location');
		$data['total_price'] =  $this->input->post('total_price');
		$data['pre_price'] =  $this->input->post('pre_price');
		$data['reserve_date'] = date('Y-m-d',time());

		foreach($data['is_checked'] as $k => $v){
			if(empty($v)){
				unset($data['service_date'][$k]);
				unset($data['service_name'][$k]);
				unset($data['normal_price'][$k]);
			}
		}

		$this->load->view('user/reserveResult',$data);
	}

	public function ajax_create_order(){

		$data['user_id'] = $_COOKIE['user_mobile'];
		$data['adult_num'] = $this->input->post('adult_num');
		$data['child_num'] = $this->input->post('child_num');
		$data['contact_phone'] = $this->input->post('contact_phone');
		$data['reserved_guide_id'] =  $this->input->post('reserved_guide_id');

		$data['reserved_service'] =  json_encode($this->input->post('reserved_service'));
		$data['serve_location'] =  $this->input->post('serve_location');
		$data['total_price'] =  $this->input->post('total_price');
		$data['pre_price'] =  $this->input->post('pre_price');

		$ret = $this->order_model->create_order($data);
		$return_result = array();
		if($ret == false){
			$return_result['code'] = -1;
			$return_result['msg'] = '创建订单失败';
		}else{
			$return_result['code'] = 200;
			$return_result['msg'] = 'success';
		}

		echo json_encode($return_result);

	}
}
