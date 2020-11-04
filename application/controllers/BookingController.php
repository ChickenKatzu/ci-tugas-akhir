<?php 
class BookingController extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_booking');
		$this->load->model('m_kamar');
		// $this->load->model('m_payment');
		$this->load->model('m_user');
		$this->load->helper('form','url');
		$this->load->library('pagination');
	}

	public function index()
	{
		$this->load->view("header/header");
		// $data['user']=$this->m_booking->tampil_data()->result();
		$this->load->view("form_booking");
		$this->load->view("footer/footer");
	}
	public function pesankamar()
	{
		// $this->load->view("header/header_booking");
		$this->load->view("header/header");
		$data['kamar'] =$this->m_kamar->tampil_data()->result();
		// echo json_encode($data['kamar']);
		$this->load->view('booking/form_booking', $data);
		$this->load->view("footer/footer");
	}
	public function order()
	{
		// Create User
		// $nama=$this->input->post('nama');
		// $email=$this->input->post('email');
		// $alamat=$this->input->post('alamat');
		// $tanggallahir=$this->input->post('tanggallahir');
		// $nohp=$this->input->post('nohp');
		// $umur=$this->input->post('umur');
		// $pekerjaan=$this->input->post('pekerjaan');
		// $data_user=array(
		// 	'nama'=> $nama,
		// 	'email'=> $email,
		// 	'alamat'=> $alamat,
		// 	'tanggal_lahir'=> $tanggallahir,
		// 	'nohp'=> $nohp,
		// 	// 'umur'=> $umur,
		// 	'pekerjaan'=> $pekerjaan
		// );
		// $this->m_user->input_data($data_user,'user');
		// ngambil id user
		$sess_data = $this->session->userdata('session_user');

		$id_user = $sess_data['id'];
		
		// Update status kamar
		$idkamar = $this->input->post('idkamar');
		// $status = $this->input->post('status');
		$data_kamar = array(
			
			'status' => 'booked'
		);
		$where = array(
			'id_kamar' => $idkamar
		);
		$this->m_kamar->update_data($where,$data_kamar,'kamar');
		

		$tanggal_masuk=$this->input->post('tanggal_masuk');
		$tanggal_keluar=$this->input->post('tanggal_keluar');
		
		$booking=array(
			'id'=>$id_user,
			'id_kamar'=>$idkamar,
			'status'=>'unpaid',
			'tanggal_masuk'=>$tanggal_masuk,
			'tanggal_keluar'=> $tanggal_keluar
		);



		// echo json_encode($booking);
		$test1=$this->m_booking->input_data($booking,'booking');
		return redirect('home');
		// $out = array_values($test1);
		// json_encode($out);
	}
	public function payment()
	{
		$this->load->view("header/header_admin");

		$data['booking']=$this->m_booking->tampil_data_join();
		// echo json_encode($data['booking']);
		$this->load->view("booking/payment",$data);
		$this->load->view("footer/ft_footer");
	}
	public function konfirmasi_payment()
	{
		$this->load->view("header/header_admin");

		$data['booking']=$this->m_booking->tampil_data_join();
		// echo json_encode($data['booking']);
		$this->load->view("booking/payment_konfirm",$data);
		$this->load->view("footer/ft_footer");
	}
	// public function edit($id)
	// {
	// 	$this->load->view("header/header");
	// 	$where=array('id_kamar'=>$id);
	// 	$data['kamar']=$this->m_data->edit_data($where,'kamar')->result();
	// 	$this->load->view('edit_kamar',$data);
	// 	$this->load->view("footer/footer");
	// }
	// public function hapus($id)
	// {
	// 	$where = array('id_kamar' => $id);
	// 	$this->m_data->hapus_data($where,'kamar');
	// 	redirect('info_kamar');
	// }
	// public function update()
	// {
	// 	$id = $this->input->post('idkamar');
	// 	$ukuran_kamar = $this->input->post('ukurankamar');
	// 	$status = $this->input->post('status');
	// 	$harga_bulanan = $this->input->post('hargabulanan');

	// 	$data = array(
	// 		'ukuran_kamar' => $ukuran_kamar,
	// 		'status' => $status,
	// 		'harga_bulanan' => $harga_bulanan
	// 	);

	// 	$where = array(
	// 		'id_kamar' => $id
	// 	);

	// 	$this->m_data->update_data($where,$data,'kamar');
	// 	redirect('info_kamar');
	// }
}