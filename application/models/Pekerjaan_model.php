<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaan_model extends CI_Model {

    public function getAll()
    {
        return $this->db->get('pekerjaan');
    }

    public function get_sub_pekerjaan($id)
    {
        $this->db->where('id_pekerjaan',$id);
        return $this->db->get('sub_pekerjaan');
    }
}
