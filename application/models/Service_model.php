<?php

class Service_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /**
     * 增加服务
     * @param $data
     * @return mixed
     */
    public function add_service($data)
    {
        return $this->db->insert('service', $data);
    }

    /**
     * 更新服务
     * @param $data
     * @return mixed
     */
    public function update_service($data)
    {
        return $this->db->update('service', $data, array('id' => $data['id']));
    }

    /**
     * 根据导游ID获取相应的服务信息
     * @param $guide_id
     * @return array
     */
    public function get_service_info_by_guide_id($guide_id)
    {
        $sql = 'select * from service where guide_id=?';
        $result = $this->db->query($sql,array($guide_id));
        return $result->result_array();
    }

    /**
     * 根据服务ID获取相应的服务信息
     * @param $service_id
     * @return array
     */
    public function get_service_info_by_id($service_id)
    {
        $sql = 'select * from service where id=?';
        $result = $this->db->query($sql,array($service_id));
        return $result->row_array();
    }


}
