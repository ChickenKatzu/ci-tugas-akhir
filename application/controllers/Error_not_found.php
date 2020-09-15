<?php
class error_not_found extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('header/login');
		$this->output->set_status_header('404');
		$this->load->view('404/404');
		$this->load->view('footer/login');
	}
}