<?php 
class AttendanceController extends CI_Controller
{
	function __construct(argument)
	{
		parent::__construct();
		$this->load->model('M_Attendance');
	}

	public function index()
	{
		$this->load->view('header/header');
		$this->load->view('Attendance/Absen');
		$this->load->view('footer/footer');
	}
}
?>