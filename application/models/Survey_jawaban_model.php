<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_jawaban_model extends CI_Model {

    public function getAll()
    {
        return $this->db->get('survei_jawaban');
    }

    public function tambah($idSurvey,$idPertanyaan)
    {
        $data = array(
            'id_survey' => $idSurvey,
            'id_pertanyaan' => $idPertanyaan,
            'jawaban'=> $this->input->post('jawaban')
        );
        $query = $this->db->insert('survei_jawaban',$data);
        if ($query) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function getById($id)
    {
        $this->db->where('id_pertanyaan',$id);
        return $this->db->get('survei_jawaban');
    }

    public function getByIdJawaban($idSurvey,$idPertanyaan)
    {
        $this->db->where('id_survey',$idSurvey);
        $this->db->where('id_pertanyaan',$idPertanyaan);
        return $this->db->get('survei_jawaban');
    }


    public function edit($id)
    {
        $data = array(
            'jawaban'=> $this->input->post('jawaban')
        );
        $this->db->where('id',$id);
        $query = $this->db->update('survei_jawaban',$data);
        if ($query) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function delete($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->delete('survei_jawaban');
        if ($query) {
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function deleteFromPertanyaan($id)
    {
        $this->db->where('id_pertanyaan',$id);
        $query = $this->db->delete('survei_jawaban');
        if ($query) {
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
