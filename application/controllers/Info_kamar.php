<?php 
class Info_kamar extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('form','url');
	}

	public function index()
	{
		$this->load->view("header/header");
		$data['kamar']=$this->m_data->tampil_data()->result();
		$this->load->view("info_kamar",$data);
		$this->load->view("footer/footer");
	}
	public function tambah()
	{
		$this->load->view("header/header");
		$this->load->view('tambah_kamar');
		$this->load->view("footer/footer");
	}
	public function edit()
	{
		$this->load->view("header/header");
		$this->load->view('edit_kamar');
		$this->load->view("footer/footer");
	}
	public function aksi_tambah()
	{
		$status=$this->input->post('status');
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$data=array(
			'status'=> $status,
			'nama'=> $nama,
			'email'=> $email
		);
		$this->m_data->input_data($data,'kamar');
		redirect('info_kamar/kamar');
	}
}