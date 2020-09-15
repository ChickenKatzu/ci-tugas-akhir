<?php 
class not_found extends CI_Controller {
	public function error()
	{
		$this->load->view("header/header");
		$this->load->view("404/404");
		$this->load->view("footer/footer");

	}
}