<?php

class Alipayapi extends CI_Controller
{
	/**
	 * 支付展示页
	 */
	public function index()
	{
		require_once(APPPATH."/libraries/alipay/alipay.config.php");
		require_once(APPPATH."/libraries/alipay/lib/alipay_submit.class.php");
		
		/**************************请求参数**************************/

		//商户订单号，商户网站订单系统中唯一订单号，必填
		$out_trade_no = $_POST['WIDout_trade_no'];

		//订单名称，必填
		$subject = $_POST['WIDsubject'];

		//付款金额，必填
		$total_fee = $_POST['WIDtotal_fee'];

		//收银台页面上，商品展示的超链接，必填
		$show_url = $_POST['WIDshow_url'];

		//商品描述，可空
		$body = $_POST['WIDbody'];



		/************************************************************/

		//构造要请求的参数数组，无需改动
		$parameter = array(
			"service"       => $alipay_config['service'],
			"partner"       => $alipay_config['partner'],
			"seller_id"  => $alipay_config['seller_id'],
			"payment_type"	=> $alipay_config['payment_type'],
			"notify_url"	=> $alipay_config['notify_url'],
			"return_url"	=> $alipay_config['return_url'],
			"_input_charset"	=> trim(strtolower($alipay_config['input_charset'])),
			"out_trade_no"	=> $out_trade_no,
			"subject"	=> $subject,
			"total_fee"	=> $total_fee,
			"show_url"	=> $show_url,
			"body"	=> $body,
			//其他业务参数根据在线开发文档，添加参数.文档地址:https://doc.open.alipay.com/doc2/detail.htm?spm=a219a.7629140.0.0.2Z6TSk&treeId=60&articleId=103693&docType=1
			//如"参数名"	=> "参数值"   注：上一个参数末尾需要“,”逗号。

		);

		//建立请求
		$alipaySubmit = new AlipaySubmit($alipay_config);
		$html_text = $alipaySubmit->buildRequestForm($parameter,"get", "确认");
		echo $html_text;

		$this->load->view('alipay/alipayapi');
	}
}