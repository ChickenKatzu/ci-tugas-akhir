<?php 

class KamarController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// $this->load->model('m_user_mengement');
		$this->load->model('m_user');
		$this->load->model('m_register');
		$this->load->model('m_kamar');
		$this->load->helper('form','url');
		$this->load->library('form_validation');
		$this->load->library('pagination');
	}
	public function user()
	{
		$this->load->view('header/header_user');
		$this->load->view('dashboard/dashboard_user');
		$this->load->view('footer/footer');
	}

	public function owner()
	{
		$this->load->view('header/header_owner');
		$this->load->view('dashboard/dashboard_user');
		$this->load->view('footer/ft_footer');
	}

	public function admin()
	{
		$this->load->view('header/header_admin');
		$this->load->view('dashboard/dashboard_user');
		$this->load->view('footer/ft_footer');
	}
}