<?php

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		// 获取用户列表
		$data['all_user_info'] = $this->user_model->get_all_user_info();

		$this->load->view('admin/user',$data);
	}
}
