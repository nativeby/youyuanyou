<?php

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guide_model');
		$this->load->model('service_model');
		$this->load->model('user_model');
	}

	/**
	 * 展示登录页面
	 */
	public function index()
	{
		$url_seg = parse_url($_SERVER['HTTP_REFERER']);
		$data['refer'] = $url_seg['path'];
		$this->load->view('common/login',$data);
	}

	/**
	 * 登录动作
	 */
	public function ajax_do_login()
	{
		$data = array();
		$data['code'] = 200;
		$data['msg'] = 'success';

		$refer = $this->input->post('refer');
		$mobile = $this->input->post('mobile');
		$captcha = $this->input->post('captcha');

		// 验证session中的短信验证码和填写的是否一致
/*		$data['code'] = -1;
		$data['msg'] = '验证码不正确';
		echo json_encode($data);
		return;*/

		if($refer == '/guide/home' || $refer == '/guide' || $refer == '/guide/') {
			// 来自导游端
			$ret = $this->guide_model->get_guide_audit_status_by_mobile($mobile);
			if(empty($ret)){
				// 还没有申请成为有缘人，则需要申请
				$data['redirect_url'] = '/guide/apply/index';
			}elseif($ret['audit_status'] == '0'){
				// 申请了，还没有审核通过
				$data['redirect_url'] = '/guide/check/waiting';
			}elseif($ret['audit_status'] == '-1') {
				// 申请了，审核失败
				$data['redirect_url'] = '/guide/check/fail';
			}else{
				// 审核通过
				$service = $this->service_model->get_service_info_by_guide_id($ret['id']);
				if(empty($service)){
					// 但是还没有发布服务
					$data['redirect_url'] = '/guide/check/success?guide_id='.$ret['id'];
				}else{
					// 已发布服务
					$data['redirect_url'] = '/guide/service/index?guide_id='.$ret['id'];
				}
			}
		}else {
			// 来自用户端
			$user = $this->user_model->get_user_info_by_mobile($mobile);
			if(empty($user)){
				// 说明此用户是第一次使用，用户在系统不存在，创建用户
				$user_data['mobile'] = $mobile;
				$this->user_model->add_user($user_data);
			}
			setcookie('user_mobile',$mobile,time()+3600*24*30,'/');
			$data['redirect_url'] = '/user/place/index';
		}

		echo json_encode($data);
	}
}
