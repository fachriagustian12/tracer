<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('isLogin')!="1") {
			redirect('login');
		}
	}
	
	public function index()
	{
        $this->load->model('users_model');
        $this->load->model('survey_model');
        $this->load->model('HasilKmeans_model');
        $data['user'] = $this->users_model->getLevel(3)->num_rows();
        $data['userDosen'] = $this->users_model->getLevel(2)->num_rows();
        $data['usersDosen'] = $this->users_model->getLevel(2)->result();
        $data['users'] = $this->users_model->getLevel(3)->result();
		$data['survey'] = $this->survey_model->getAll()->num_rows();
		$data['kmeans'] = $this->HasilKmeans_model->getAll()->row();
		$data['jkld'] = $this->users_model->getBy(['jenis_kelamin' => 'L', 'id_user_grup' => 2])->num_rows();
		$data['jkpd'] = $this->users_model->getBy(['jenis_kelamin' => 'P', 'id_user_grup' => 2])->num_rows();
		$data['jkl'] = $this->users_model->getBy(['jenis_kelamin' => 'L', 'id_user_grup' => 3])->num_rows();
		$data['jkp'] = $this->users_model->getBy(['jenis_kelamin' => 'P', 'id_user_grup' => 3])->num_rows();
		$this->load->view('backend/include/head');
		$this->load->view('backend/include/navbar');
		$this->load->view('backend/include/sider');
		$this->load->view('backend/dashboard',$data);
		$this->load->view('backend/include/footer');
	}
}