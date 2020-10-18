<?php
class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_kamar');
		$this->load->helper('form','url');
	}

	public function index()
	{
		$this->load->view('header/home');
		$data['kamar']=$this->m_kamar->tampil_data()->result();
		$this->load->view('home/index',$data);
		$this->load->view('footer/home');
	}
}