<?php
class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('header/login');
		$this->load->view('home/index');
		$this->load->view('footer/login');
	}
}