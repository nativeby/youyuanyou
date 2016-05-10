<?php

class City_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_provinces()
    {
        $ret = $this->db->query('select distinct province from city');
        return $ret->result_array();
    }

}
