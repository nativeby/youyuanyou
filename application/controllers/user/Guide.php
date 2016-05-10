<?php

class Guide extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guide_model');
		$this->load->model('service_model');
	}

	public function listing()
	{
		$service_city = $this->input->get('sc');
		$data['service_city'] = $service_city;
 		$data['guide_service_info'] = $this->guide_model->get_guide_service_info_by_service_city($service_city);

		$this->load->view('user/guideList',$data);
	}

	public function detail()
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

		$this->load->view('user/guideDetail',$data);
	}

	public function choose()
	{
		$this->load->view('user/guideListChoose.html');
	}
}
