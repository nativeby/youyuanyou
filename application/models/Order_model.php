<?php

class Order_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /**
     * 创建订单
     * @param $data
     * @return mixed
     */
    public function create_order($data)
    {
        return $this->db->insert('order', $data);
    }

    /**
     * 获取所有订单信息
     * @return mixed
     */
    public function get_all_order_info()
    {
        $sql = 'select * from `order`';
        $result = $this->db->query($sql);

        return !empty($result) ? $result->result_array() : false;
    }


}
