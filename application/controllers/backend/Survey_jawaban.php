<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_jawaban extends CI_Controller {

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
        $this->load->model('survey_jawaban_model');
    }

	public function tambah($idSurvey,$idPertanyaan)
	{
        $data=$this->survey_jawaban_model->tambah($idSurvey,$idPertanyaan);
		if($data==true){
            $this->session->set_flashdata('kondisi','1');
			$this->session->set_flashdata('status','Data berhasil ditambahkan !');
			redirect('backend/survey_pertanyaan/detail/'.$idSurvey.'/'.$idPertanyaan);
		}else {
            $this->session->set_flashdata('kondisi','0');
			$this->session->set_flashdata('status','Data gagal ditambahkan !');
            redirect('backend/survey_pertanyaan/detail/'.$idSurvey.'/'.$idPertanyaan);
        }
	}

	public function update($idSurvey,$idPertanyaan,$idJawaban)
	{
        $data=$this->survey_jawaban_model->edit($idJawaban);
		if($data==true){
            $this->session->set_flashdata('kondisi','1');
			$this->session->set_flashdata('status','Data berhasil ditambahkan !');
            redirect('backend/survey_pertanyaan/detail/'.$idSurvey.'/'.$idPertanyaan);
		}else {
            $this->session->set_flashdata('kondisi','0');
			$this->session->set_flashdata('status','Data gagal ditambahkan !');
            redirect('backend/survey_pertanyaan/detail/'.$idSurvey.'/'.$idPertanyaan);
        }
	}

	public function delete($idSurvey,$idPertanyaan,$idJawaban){
        $data=$this->survey_jawaban_model->delete($idJawaban);
        if($data==true){
            $this->session->set_flashdata('kondisi','1');
			$this->session->set_flashdata('status','delete berhasil !');
            redirect('backend/survey_pertanyaan/detail/'.$idSurvey.'/'.$idPertanyaan);
		}else {
            $this->session->set_flashdata('kondisi','0');
			$this->session->set_flashdata('status','delete gagal !');
            redirect('backend/survey_pertanyaan/detail/'.$idSurvey.'/'.$idPertanyaan);
        }
    }
}
