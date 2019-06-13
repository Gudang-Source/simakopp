<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_aset extends CI_Model {

    public $table ="tbl_aset";

    public function data() {
        $query = "SELECT * FROM $this->table ORDER BY kode_aset ASC";
        return $this->db->query($query)->result();
    }


    public function getAset($where = '') {
        return $this->db->query("SELECT * FROM tbl_aset $where; ");
    }
}