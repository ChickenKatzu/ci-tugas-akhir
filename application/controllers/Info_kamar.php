<?php 
class Info_kamar extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('form','url');
	}

	public function index()
	{
		$this->load->view("header/header");
		$data['kamar']=$this->m_data->tampil_data()->result();
		$this->load->view("info_kamar",$data);
		$this->load->view("footer/footer");
	}
	public function tambah()
	{
		$this->load->view("header/header");
		$this->load->view('tambah_kamar');
		$this->load->view("footer/footer");
	}
	public function aksi_tambah()
	{
		$status=$this->input->post('status');
		$ukurankamar=$this->input->post('ukurankamar');
		$hargabulanan=$this->input->post('hargabulanan');
		$data=array(
			'status'=> $status,
			'ukuran_kamar'=> $ukurankamar,
			'harga_bulanan'=> $hargabulanan
		);
		$this->m_data->input_data($data,'kamar');
		redirect('info_kamar');
	}
	public function edit($id)
	{
		$where=array('id_kamar'=>$id);
		$data['kamar']=$this->m_data->edit_data($where,'kamar')->result();
		$this->load->view("header/header");
		$this->load->view('edit_kamar',$data);
		$this->load->view("footer/footer");
	}
	public function hapus($id)
	{
		$where = array('id_kamar' => $id);
		$this->m_data->hapus_data($where,'kamar');
		redirect('info_kamar');
	}
	public function update()
	{
		$id = $this->input->post('idkamar');
		$ukuran_kamar = $this->input->post('ukurankamar');
		$status = $this->input->post('status');
		$harga_bulanan = $this->input->post('hargabulanan');

		$data = array(
			'ukuran_kamar' => $ukuran_kamar,
			'status' => $status,
			'harga_bulanan' => $harga_bulanan
		);

		$where = array(
			'id_kamar' => $id
		);

		$this->m_data->update_data($where,$data,'kamar');
		redirect('info_kamar');
	}
}