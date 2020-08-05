<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
	public function __construct(){
        parent :: __construct();
    }
	public function daftar()
	{
		$this->load->model('konsentrasi_model');
		$this->load->model('bidang_pekerjaan_model');
		$data['konsentrasi']=$this->konsentrasi_model->getAll()->result();
		$data['bidang_pekerjaan']=$this->bidang_pekerjaan_model->getAll()->result();
		$this->load->view('frontend/register',$data);
	}
	public function aksidaftar()
	{
		$config['upload_path']          = './assets/user/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['overwrite']			= true;
        $config['max_size']             = 4096;
        $config['max_width']            = 4028;
        $config['max_height']           = 4028;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('foto')){
            $this->session->set_flashdata('msg','gagal upload');
                redirect('register/daftar');
		}else {
			$foto=$this->upload->data('file_name');
			$this->load->model('users_model');
            $data=$this->users_model->daftar($foto);
            if($data==true){    
				$this->session->set_flashdata('login','Pendaftaran berhasil , silahkan tunggu 1 x 24 jam untuk aktivasi!');
				redirect('login');
			}else {
				$this->session->set_flashdata('login','Pendaftaran gagal, silahkan coba lagi!');
				redirect('login');
			}
        }
	}
}
