<?php

class User_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /**
     * 添加用户
     * @param $data
     * @return mixed
     */
    public function add_user($data)
    {
        return $this->db->insert('user', $data);
    }

    /**
     * 获取用户信息
     * @param $mobile
     * @return mixed
     */
    public function get_user_info_by_mobile($mobile)
    {
        $sql = 'select * from user where mobile=?';
        $result = $this->db->query($sql,array($mobile));
        return $result->row_array();
    }

    /**
     * 获取所有用户信息
     * @return mixed
     */
    public function get_all_user_info()
    {
        $sql = 'select * from user';
        $result = $this->db->query($sql);

        return !empty($result) ? $result->result_array() : false;
    }

}
