<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_pertanyaan extends CI_Controller {

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
        $this->load->model('survey_pertanyaan_model');
    }
    
    public function detail($idSurvey,$idPertanyaan)
	{
        $this->load->model('survey_jawaban_model');
		$data['titleSurvey'] = $idSurvey;
		$data['titlePertanyaan'] = $idPertanyaan;
		$data['surveyPertanyaan'] = $this->survey_pertanyaan_model->getByIdPertanyaan($idPertanyaan)->row();
		$data['surveyJawaban'] = $this->survey_jawaban_model->getById($idPertanyaan)->result();
		$data['surveyJawaban2'] = $this->survey_jawaban_model->getById($idPertanyaan)->result();
		$this->load->view('backend/include/head');
		$this->load->view('backend/include/navbar');
		$this->load->view('backend/include/sider');
		$this->load->view('backend/surveyPertanyaanDetail',$data);
		$this->load->view('backend/include/footer');
	}

	public function tambah($id)
	{
        $data=$this->survey_pertanyaan_model->tambah($id);
		if($data==true){
            $this->session->set_flashdata('kondisi','1');
			$this->session->set_flashdata('status','Data berhasil ditambahkan !');
			redirect('backend/survey/detail/'.$id);
		}else {
            $this->session->set_flashdata('kondisi','0');
			$this->session->set_flashdata('status','Data gagal ditambahkan !');
			redirect('backend/survey/detail/'.$id);
        }
	}

	public function update($id)
	{
        $data=$this->survey_pertanyaan_model->edit($id);
		if($data==true){
            $this->session->set_flashdata('kondisi','1');
			$this->session->set_flashdata('status','Data berhasil ditambahkan !');
			redirect('backend/survey/detail/'.$id);
		}else {
            $this->session->set_flashdata('kondisi','0');
			$this->session->set_flashdata('status','Data gagal ditambahkan !');
			redirect('backend/survey/detail/'.$id);
        }
	}

	public function delete($id){
        $data=$this->survey_pertanyaan_model->delete($id);
        if($data==true){
            $this->session->set_flashdata('kondisi','1');
			$this->session->set_flashdata('status','delete berhasil !');
			redirect('backend/survey/detail/'.$id);
		}else {
            $this->session->set_flashdata('kondisi','0');
			$this->session->set_flashdata('status','delete gagal !');
			redirect('backend/survey/detail/'.$id);
        }
    }
}
