<?php

class Guide extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guide_model');
	}

	/**
	 * 注意的是，类名(首字母大写，也是文件名)不能与方法名相同，否则会报错(当做构造函数)。
	 * 如果类名叫做Index，包含一个index方法，就会出错
	 * 默认走index方法
	 */
	public function index()
	{
		// 获取导游列表
		$data['all_guide_info'] = $this->guide_model->get_all_guide_info();
		$this->load->view('admin/guide',$data);
	}
}
