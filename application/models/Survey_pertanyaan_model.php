<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_pertanyaan_model extends CI_Model {

    public function getAll()
    {
        return $this->db->get('survei_pertanyaan');
    }

    public function tambah($id)
    {
        $data = array(
            'id_survei' => $id,
            'pertanyaan'=> $this->input->post('pertanyaan')
        );
        $query = $this->db->insert('survei_pertanyaan',$data);
        if ($query) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function getByIdPertanyaan($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('survei_pertanyaan');
    }

    public function getById($id)
    {
        $this->db->where('id_survei',$id);
        return $this->db->get('survei_pertanyaan');
    }


    public function edit($id)
    {
        $data = array(
            'pertanyaan'=> $this->input->post('pertanyaan')
        );
        $this->db->where('id',$id);
        $query = $this->db->update('survei_pertanyaan',$data);
        if ($query) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function delete($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->delete('survei_pertanyaan');
        if ($query) {
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
