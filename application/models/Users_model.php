<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function cek_user()
    {
        $where = array(
            'username' => $this->input->post('your_username'),
            'password' => md5($this->input->post('your_pass'))
        );
        return $this->db->get_where('user',$where);
    }

    public function getLevel($level)
    {
        $this->db->where('id_user_grup',$level);
        return $this->db->get('user');
    }

    public function getById($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('user');
    }

    public function getAll()
    {
        return $this->db->get('user');
    }

    public function gantiStatus($id,$status)
    {
        $data = array('status'=>$status);
        $this->db->where('id',$id);
        $query = $this->db->update('user',$data);
        if ($query) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function tambah($foto,$level)
    {
        $data=array(
            'id_user_grup'=>$level,
            'nama_depan'=>$this->input->post('nama_depan'),
            'nama_belakang'=>$this->input->post('nama_belakang'),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
            'telp'=>$this->input->post('telp'),
            'email'=>$this->input->post('email'),
            'alamat'=>$this->input->post('alamat'),
            'username'=>$this->input->post('username'),
            'status'=>'nonaktif',
            'password'=>md5($this->input->post('username')),
            'foto'=>$foto
        );
        $query=$this->db->insert('user',$data);
        if ($query ) {
            return true;
        }else{
            return false;
        }
    }

    public function update($id,$new_foto)
    {
        if ($this->session->userdata('id_user_grup')==3) {
            $data=array(
                'nama_depan'=>$this->input->post('nama_depan'),
                'nama_belakang'=>$this->input->post('nama_belakang'),
                'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
                'tgl_lahir'=>$this->input->post('tgl_lahir'),
                'telp'=>$this->input->post('telp'),
                'email'=>$this->input->post('email'),
                'alamat'=>$this->input->post('alamat'),
                'username'=>$this->input->post('username'),
                'tahun_lulus'=>$this->input->post('tahun_lulus'),
                'mulai_kerja'=>$this->input->post('mulai_kerja'),
                'angkatan'=>$this->input->post('angkatan'),
                'konsentrasi'=>$this->input->post('konsentrasi'),
                'bidang_pekerjaan'=>$this->input->post('bidang_pekerjaan'),
                'alamat_kerja'=>$this->input->post('alamat_kerja'),
                'kota'=>$this->input->post('kota'),
                'foto'=>$new_foto
            );
        }else{
            $data=array(
                'nama_depan'=>$this->input->post('nama_depan'),
                'nama_belakang'=>$this->input->post('nama_belakang'),
                'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
                'telp'=>$this->input->post('telp'),
                'email'=>$this->input->post('email'),
                'alamat'=>$this->input->post('alamat'),
                'username'=>$this->input->post('username'),
                'foto'=>$new_foto
            );
        }
        
        $this->db->where('id',$id);
        $query=$this->db->update('user',$data);
        if ($query ) {
            return true;
        }else{
            return false;
        }
    }

    public function edit($id,$foto)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nomor_induk' => $this->input->post('nomor_induk'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'konsentrasi' => $this->input->post('konsentrasi'),
            'angkatan' => $this->input->post('angkatan'),
            'jabatan' => $this->input->post('jabatan'),
            'foto' => $foto
        );
        $this->db->where('id',$id);
        $query = $this->db->update('users',$data);
        if ($query) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function delete($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->delete('user');
        if ($query) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function daftar($foto)
    {
        $data=array(
            'id_user_grup'=>3,
            'nama_depan'=>$this->input->post('nama_depan'),
            'nama_belakang'=>$this->input->post('nama_belakang'),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
            'tgl_lahir'=>$this->input->post('tanggal_lahir'),
            'telp'=>$this->input->post('telp'),
            'email'=>$this->input->post('email'),
            'alamat'=>$this->input->post('alamat'),
            'username'=>$this->input->post('username'),
            'password'=>md5($this->input->post('password')),
            'tahun_lulus'=>$this->input->post('tahun_lulus'),
            'mulai_kerja'=>$this->input->post('mulai_kerja'),
            'angkatan'=>$this->input->post('angkatan'),
            'konsentrasi'=>$this->input->post('konsentrasi'),
            'bidang_pekerjaan'=>$this->input->post('bidang_pekerjaan'),
            'alamat_kerja'=>$this->input->post('alamat_kerja'),
            'kota'=>$this->input->post('kota'),
            'foto'=>$foto,
            'status'=>'nonaktif'
        );
        $query=$this->db->insert('user',$data);
        if ($query ) {
            return true;
        }else{
            return false;
        }
    }

    public function ubahpassword($id)
    {
        $cek = $this->db->get_where('user',['id'=>$id]);
        if ($cek->num_rows()>0) {
            foreach($cek->result() as $user)
            {
                $password = $user->password;
            }
            if (md5($this->input->post('old_password'))==$password) {
                $password_baru=array('password'=>md5($this->input->post('new_password')));
                $this->db->where('id',$id);
                $query = $this->db->update('user',$password_baru);
                if ($query ) {
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

}
