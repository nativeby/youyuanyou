<?php

/**
 * 有缘游向导申请
 */
class Apply extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('city_model');
		$this->load->model('guide_model');
	}

	public function index()
	{
		$data['provinces'] = $this->city_model->get_provinces();
		$this->load->view('guide/apply',$data);
	}

	/**
	 * 增加个人信息
	 */
	public function ajax_do_add()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'birth' => $this->input->post('birth'),
			'origin' => $this->input->post('origin'),
			'live_city' => $this->input->post('live_city'),
			'live_years' => $this->input->post('live_years'),
			'identity' => $this->input->post('identity'),
			'education' => $this->input->post('education'),
			'email' => $this->input->post('email'),
			'qq' => $this->input->post('qq'),
			'wechat' => $this->input->post('wechat'),
			'mobile' => $this->input->post('mobile'),
			'idcard' => $this->input->post('idcard'),
			'avatar' => $this->input->post('avatar'),
			'cert_picture' => $this->input->post('cert_picture'),
			'can_drive_car' => $this->input->post('can_drive_car'),
			'car_style' => $this->input->post('car_style'),
			'car_seat' => $this->input->post('car_seat'),
			'car_picture' => $this->input->post('car_picture'),
		);

		$ret = $this->guide_model->add_guide($data);
		$data = array();
		if($ret == false){
			$data['code'] = -1;
			$data['msg'] = '该手机号已经被申请！';
			$data['data'] = $ret;
		}else{
			$data['code'] = 200;
			$data['msg'] = 'success';
			$data['data'] = $ret;
		}

		echo json_encode($data);
	}

	/**
	 * 更新个人信息
	 */
	public function ajax_do_update()
	{
		$data = array(
			'id' => $this->input->post('guide_id'),
			'service_city' => $this->input->post('service_city'),
			'language' => $this->input->post('language'),
			'intro' => $this->input->post('intro'),
			'travel_picture' => trim($this->input->post('travel_picture'),','),
			'update_time' => date('Y-m-d H:i:s')
		);

		$ret = $this->guide_model->update_guide($data);

		$data['code'] = 200;
		$data['msg'] = 'success';
		$data['data'] = $ret;
		echo json_encode($data);
	}
}
