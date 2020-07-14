<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        // if ($this->session->userdata('isLogin')=="1") {
        //     $this->session->set_userdata('login','Anda sudah login !!');
        //     redirect(base_url('admin'));
        // }
		$this->load->view('login');
    }
    
    public function doLogin()
    {
        $this->load->model('users_model');
        $cek_user = $this->users_model->cek_user();
		if ($cek_user->num_rows() > 0) {
			foreach($cek_user->result() as $user){
				$sess = array(
					'isLogin' => "1",
					'id' => $user->id,
					'id_user_grup' => $user->id_user_grup,
					'nama_depan'=> $user->nama_depan,
					'nama_belakang'=> $user->nama_belakang,
					'jenis_kelamin'=> $user->jenis_kelamin,
					'tgl_lahir' => $user->tgl_lahir,
					'telp' => $user->telp,
					'alamat' => $user->alamat,
					'email' => $user->email,
					'tahun_lulus' => $user->tahun_lulus,
					'angkatan' => $user->angkatan,
					'pekerjaan' => $user->pekerjaan,
					'mulai_kerja' => $user->mulai_kerja,
					'bidang_pekerjaan' => $user->bidang_pekerjaan,
					'jabatan' => $user->jabatan,
					'foto' => $user->foto,
					'username' => $user->username,
					'status' => $user->status

				);
				$this->session->set_userdata($sess);
			}
			if ($this->session->userdata('id_user_grup')==1) {
				$this->session->set_flashdata('login','Selamat Datang !');
				redirect(base_url('admin'));
			}else if($this->session->userdata('id_user_grup')==2){
				$this->session->set_flashdata('login','Selamat Datang !');
				redirect(base_url('admin'));
			}else if($this->session->userdata('id_user_grup')==3){
				$this->session->set_flashdata('login','Selamat Datang !');
				redirect('alumni');
			}
		}else{
			$this->session->set_flashdata('login','Password atau Username anda tidak cocok !');
			redirect('login');
		}
    }

    public function logout()
    {
        $this->session->set_userdata('isLogin')=="0";
        $this->session->sess_destroy();
        redirect('login');
    }

}
