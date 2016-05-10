<?php

class Pay extends CI_Controller
{
    /**
     * 支付展示页
     */
    public function index()
    {
        $this->load->view('alipay/index');
    }
}