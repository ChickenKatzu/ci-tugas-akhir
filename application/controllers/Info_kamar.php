<?php 
class Info_kamar extends CI_Controller {
	public function kamar()
	{
		$this->load->view("header/header");
		$this->load->view("info_kamar");
		$this->load->view("footer/footer");

	}
}