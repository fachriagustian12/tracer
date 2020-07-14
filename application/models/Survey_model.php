<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_model extends CI_Model {

    public function getAll()
    {
        return $this->db->get('survei');
    }

    public function getById($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('survei');
    }

    public function tambah()
    {
        $data = array(
            'nama_survei' => $this->input->post('nama_survei'),
            'deskripsi' => $this->input->post('deskripsi'),
            'tgl_mulai' => $this->input->post('tgl_mulai'),
            'tgl_berahkir' => $this->input->post('tgl_berahkir'),
            'tgl_update' => $this->input->post('tgl_update')
        );
        $query = $this->db->insert('survei',$data);
        if ($query) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function edit($id)
    {
        $data = array(
            'nama_survei' => $this->input->post('nama_survei'),
            'deskripsi' => $this->input->post('deskripsi'),
            'tgl_mulai' => $this->input->post('tgl_mulai'),
            'tgl_berahkir' => $this->input->post('tgl_berahkir'),
            'tgl_update' => $this->input->post('tgl_update')
        );
        $this->db->where('id',$id);
        $query = $this->db->update('survei',$data);
        if ($query) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function delete($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->delete('survei');
        if ($query) {
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
