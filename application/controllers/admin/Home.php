<?php

class Home extends CI_Controller {

	/**
	 * 注意的是，类名(首字母大写，也是文件名)不能与方法名相同，否则会报错(当做构造函数)。
	 * 如果类名叫做Index，包含一个index方法，就会出错
	 * 默认走index方法
	 */
	public function index()
	{
		$this->load->view('admin/home');
	}

	public function welcome()
	{
		$this->load->view('admin/welcome');
	}
}
