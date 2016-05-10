<?php

class Guide_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /**
     * 导游（有缘人）申请
     * @param $data
     * @return mixed
     */
    public function add_guide($data)
    {
        return $this->db->insert('guide', $data);
    }

    /**
     * 更新导游（有缘人）资料
     * @param $data
     * @return mixed
     */
    public function update_guide($data)
    {
        return $this->db->update('guide', $data, array('id' => $data['id']));
    }

    /**
     * 根据登录的手机号获取导游审核状态
     * @param $mobile
     * @return array
     */
    public function get_guide_audit_status_by_mobile($mobile)
    {
        $sql = 'select id,mobile,audit_status from guide where mobile=?';
        $result = $this->db->query($sql,array($mobile));
        return $result->row_array();
    }

    /**
     * 根据ID获取导游信息
     * @param $id
     * @return array
     */
    public function get_guide_info_by_id($id)
    {
        $sql = 'select * from guide where id=?';
        $result = $this->db->query($sql,array($id));
        return $result->row_array();
    }

    /**
     * 获取所有导游信息
     * @return array
     */
    public function get_all_guide_info()
    {
        $sql = 'select * from guide';
        $result = $this->db->query($sql);
        if($result){
            return $result->result_array();
        }

        return false;
    }

    /**
     * 根据城市获取所有导游的基本服务信息
     * @param service_city
     * @return array
     */
    public function get_guide_service_info_by_service_city($service_city)
    {
        $sql = "SELECT g.id as guide_id,g.name as gname,g.live_city,g.identity,g.live_years,s.name as sname,s.unit,s.normal_price FROM guide g LEFT JOIN service s ON g.id = s.guide_id WHERE g.audit_status='1' and s.name='基本服务' and g.service_city=?";
        $result = $this->db->query($sql,array($service_city));
        if($result){
            return $result->result_array();
        }

        return false;
    }

    /**
     * 按照服务城市统计出每个城市的有缘人数量
     * @return array
     */
    public function get_guide_count_group_by_service_city()
    {
        $sql = "SELECT COUNT(g.id) AS num,g.service_city,p.place_image FROM guide g LEFT JOIN place p ON g.service_city=p.place where g.audit_status='1' and g.service_city is not null GROUP BY g.service_city";
        $result = $this->db->query($sql);
        return $result->result_array();
    }




}
