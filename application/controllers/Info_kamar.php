<?php 
class Info_kamar extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_kamar');
		$this->load->helper('form','url');
	}

	public function info_kamar()
	{
		$this->load->view("header/header");
		$data['kamar']=$this->m_kamar->tampil_data()->result();
		$this->load->view("info_kamar",$data);
		$this->load->view("footer/footer");
	}
	public function tambah_kamar()
	{
		$this->load->view("header/header");
		$this->load->view('tambah_kamar');
		$this->load->view("footer/footer");
	}
	public function aksi_tambah()
	{
		$status=$this->input->post('status');
		$ukurankamar=$this->input->post('ukurankamar');
		$namakamar=$this->input->post('namakamar');
		$hargabulanan=$this->input->post('hargabulanan');
		$data=array(
			'status'=> $status,
			'ukuran_kamar'=> $ukurankamar,
			'nama_kamar'=> $namakamar,
			'harga_bulanan'=> $hargabulanan
		);
		$this->m_kamar->input_data($data,'kamar');
		redirect('info_kamar');
	}
	public function edit($id)
	{
		$this->load->view("header/header");
		$where=array('id_kamar'=>$id);
		$data['kamar']=$this->m_kamar->edit_data($where,'kamar')->result();
		$this->load->view('edit_kamar',$data);
		$this->load->view("footer/footer");
	}
	public function hapus($id)
	{
		$where = array('id_kamar' => $id);
		$this->m_kamar->hapus_data($where,'kamar');
		redirect('info_kamar');
	}
	public function update()
	{
		$id = $this->input->post('idkamar');
		$ukuran_kamar = $this->input->post('ukurankamar');
		$status = $this->input->post('status');
		$harga_bulanan = $this->input->post('hargabulanan');
		$namakamar = $this->input->post('nama_kamar');

		$data = array(
			'ukuran_kamar' => $ukuran_kamar,
			'status' => $status,
			'harga_bulanan' => $harga_bulanan,
			'nama_kamar'=> $namakamar
		);

		$where = array(
			'id_kamar' => $id
		);

		$this->m_kamar->update_data($where,$data,'kamar');
		redirect('info_kamar');
	}
	
}