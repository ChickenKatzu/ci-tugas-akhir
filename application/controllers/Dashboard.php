<?php
class Dashboard extends CI_Controller {
	public function index()
	{
		$this->load->view('header/header');
		$this->load->view('dashboard/dashboard_user');
		$this->load->view('footer/footer');
	}
}