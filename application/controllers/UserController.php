<?php 
class UserController extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->helper('form','url');
	}

	public function index()
	{
		$this->load->view("header/header");
		$data['user']=$this->m_user->tampil_data()->result();
		$this->load->view("user/index",$data);
		$this->load->view("footer/footer");
	}
	public function tambah()
	{
		$this->load->view("header/header");
		$this->load->view('user/tambah_user');
		$this->load->view("footer/footer");
	}
	public function aksi_tambah()
	{
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$alamat=$this->input->post('alamat');
		$tanggallahir=$this->input->post('tanggallahir');
		$nohp=$this->input->post('nohp');
		$umur=$this->input->post('umur');
		$pekerjaan=$this->input->post('pekerjaan');
		$data=array(
			'nama'=> $nama,
			'email'=> $email,
			'alamat'=> $alamat,
			'tanggal_lahir'=> $tanggallahir,
			'no_hp'=> $nohp,
			'umur'=> $umur,
			'pekerjaan'=> $pekerjaan
		);
		$this->m_user->input_data($data,'user');
		redirect('UserController');
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