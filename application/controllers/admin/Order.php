<?php

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('order_model');
	}

	public function index()
	{
		// 获取订单列表
		$data['all_order_info'] = $this->order_model->get_all_order_info();

		foreach($data['all_order_info'] as $k => $v){
			$reserved_service = json_decode($v['reserved_service']);
			$reserved_service = explode('|',$reserved_service[0]);
			$data['all_order_info'][$k]['service_name'] = $reserved_service[0];
			$data['all_order_info'][$k]['service_date'] = $reserved_service[1];
			$data['all_order_info'][$k]['normal_price'] = $reserved_service[2];
		}

		$this->load->view('admin/order',$data);
	}
}
