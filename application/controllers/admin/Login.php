<?php

class Login extends CI_Controller {

	/**
	 * 注意的是，类名(首字母大写，也是文件名)不能与方法名相同，否则会报错(当做构造函数)。
	 * 如果类名叫做Index，包含一个index方法，就会出错
	 * 默认走index方法
	 */
	public function index()
	{
		// 缓存一天，单位为分钟
		$this->load->view('admin/login');
	}

	public function do_login(){

		$userName = $this->input->post('userName');
		$password = $this->input->post('password');

		$data = array(
			'code' => 1,
			'msg' => 'success'
		);
		if($userName != 'admin' || $password != 'admin'){
			$data['code'] = 0;
			$data['msg'] = '用户不存在或密码错误';
		}

		Ju::jsonXEcho($data);
	}
}
