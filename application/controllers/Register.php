<?php
class Register extends CI_Controller {
	public function index()
	{
		$this->load->view('header/register');
		$this->load->view('register/register');
		$this->load->view('footer/ft_footer');
	}
}