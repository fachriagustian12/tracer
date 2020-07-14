<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
        parent::__construct();
        if ($this->session->userdata('isLogin')!="1") {
			redirect('login');
		}
        $this->load->model('users_model');
    }
	public function user($level)
	{
		$this->load->model('pekerjaan_model');
		$data['title'] = $level;
        $data['user'] = $this->users_model->getLevel($level)->result();
        $data['user2'] = $this->users_model->getLevel($level)->result();
        $data['pekerjaan'] = $this->pekerjaan_model->getAll($level)->result();
		$this->load->view('backend/include/head');
		$this->load->view('backend/include/navbar');
		$this->load->view('backend/include/sider');
		$this->load->view('backend/users',$data);
		$this->load->view('backend/include/footer');
	}

	public function tambah($level)
    {
        $config['upload_path']          = './assets/user/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 15000;
		$config['max_width']            = 10000;
        $config['max_height']           = 10000;
        
        $this->load->library('upload', $config);

        if (! $this->upload->do_upload('foto')) {
            $this->session->set_flashdata('kondisi','0');
            $this->session->set_flashdata('status','Gambar terlalu besar !');
            redirect('backend/users/user/'.$level);
        }else{
            $foto = $this->upload->data('file_name');
            $data = $this->users_model->tambah($foto,$level);
            if ($data == TRUE) {
                $this->session->set_flashdata('kondisi','1');
                $this->session->set_flashdata('status','Data Berhasil disimpan !');
                redirect('backend/users/user/'.$level);
            }else{
                $this->session->set_flashdata('kondisi','0');
                $this->session->set_flashdata('status','Data Gagal diedit !');
                redirect('backend/users/user/'.$level);
            }
        }
	}
	
	public function update($id,$level)
    {
        $config['upload_path']          = './assets/user/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['overwrite']			= true;
        $config['max_size']             = 15000; // 1MB
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('new_foto')){
			// $error = array('error' => $this->upload->display_errors());
            // $this->load->view('v_upload', $error);
            $new_foto=$this->input->post('old_foto');
            $data=$this->users_model->update($id,$new_foto);
            if($data==true){
				$this->session->set_flashdata('kondisi','1');
                $this->session->set_flashdata('status','update berhasil !');
                redirect('backend/users/user/'.$level);
            }else {
				$this->session->set_flashdata('kondisi','0');
                $this->session->set_flashdata('status','update gagal !');
                redirect('backend/users/user/'.$level);
            }
		}else {
            $new_foto=$this->upload->data('file_name');
            $data=$this->users_model->update($id,$new_foto);
            if($data==true){
				$this->session->set_flashdata('kondisi','1');
                $this->session->set_flashdata('status','Edit data berhasil !');
                redirect('backend/users/user/'.$level);
            }else {
				$this->session->set_flashdata('kondisi','0');
                $this->session->set_flashdata('status','Edit data gagal !');
                redirect('backend/users/user/'.$level);
            }
        }
    }

	public function editStatus($id,$status,$level){
        if ($status=="nonaktif") {
            $newStatus = "nonaktif";
        }else{
            $newStatus = "aktif";
        }
        $data = $this->users_model->gantiStatus($id,$newStatus);
        if ($data == TRUE) {
            $this->session->set_flashdata('kondisi','1');
            $this->session->set_flashdata('status','Status Berhasil diganti !');
            redirect('backend/users/user/'.$level);
        }else{
            $this->session->set_flashdata('kondisi','0');
            $this->session->set_flashdata('status','Status Gagal diganti !');
            redirect('backend/users/user/'.$level);
        }
    }

    public function ubahpassword()
    {
        if($this->input->post('submit'))
        {
            if (md5($this->input->post('new_password'))!=md5($this->input->post('confirm_password'))) {
                if ($this->session->userdata('id_user_grup')==2) {
                    $this->session->set_flashdata('msg','password tidak sesuai');
                    redirect('backend/users/ubahpassword');
                }else if($this->session->userdata('id_user_grup')==3){
                    $this->session->set_flashdata('gantiPass','password tidak sesuai');
                    redirect('alumni');
                }
            }else{
                $where = $this->session->userdata('id');
                $data = $this->users_model->ubahpassword($where);
                if($data==true){
                    redirect('login/logout');
                }else {
                    if ($this->session->userdata('id_user_grup')==2) {
                        $this->session->set_flashdata('msg','ganti password gagal atau password lama salah!');
                        redirect('backend/users/ubahpassword');
                    }else if($this->session->userdata('id_user_grup')==3){
                        $this->session->set_flashdata('gantiPass','ganti password gagal atau password lama salah!');
                        redirect('alumni');
                    }
                }
            }
        }
        $this->load->view('backend/include/head');
		$this->load->view('backend/include/navbar');
        $this->load->view('backend/include/sider');
        $this->load->view('backend/ubahpassword');
		$this->load->view('backend/include/footer');
    }

    public function delete($id,$level){
        $data=$this->users_model->delete($id);
        if($data==true){
            $this->session->set_flashdata('kondisi','1');
			$this->session->set_flashdata('status','delete berhasil !');
			redirect('backend/users/user/'.$level);
		}else {
            $this->session->set_flashdata('kondisi','0');
			$this->session->set_flashdata('status','delete gagal !');
			redirect('backend/users/user/'.$level);
        }
    }
    public function alumni()
    {
        $this->load->model('loker_model');
        $this->load->model('survey_model');
        $data['loker']=$this->loker_model->getAll()->result();
        $data['survey']=$this->survey_model->getAll()->result();
        $this->load->view('frontend/alumni/index',$data);
    }
}
