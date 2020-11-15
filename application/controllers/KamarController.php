<?php 

class KamarController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// $this->load->model('m_user_mengement');
		$this->load->model('m_user');
		$this->load->model('m_register');
		$this->load->model('m_kamar');
		$this->load->model('m_booking');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		// $this->load->library('pagination');
	}
	public function user()
	{
		$id=$this->session->id;
		$data['user']=$this->m_user->userprofile($id);
		if($this->session->userdata('level') == 'user')
		// if($sess_data['level'] == 'user' ) 
			
		{
			$this->load->view('header/header_user');
			$this->load->view('dashboard/dashboard_user');
			$this->load->view('footer/ft_footer');
			
		} else {
			redirect('login');
		}
	}

	public function user_inbox()
	{
		$id=$this->session->id;
		$data['user']=$this->m_booking->tampil_data_join_inbox($id);
		// echo json_encode($data);die();
		if($this->session->userdata('level') == 'user')
		// if($sess_data['level'] == 'user' ) 
			
		{
			$this->load->view('header/header_user');
			$this->load->view('user/inbox',$data);
			$this->load->view('footer/ft_footer');
			
		} else {
			redirect('login');
		}
	}
	
	public function owner()
	{
		if($this->session->userdata('level') == 'owner')
		{
			$this->load->view('header/header_owner');
			$this->load->view('dashboard/dashboard_user');
			$this->load->view('footer/ft_footer');
		}else{
			redirect('login');
		}
	}

	public function admin()
	{
		if($this->session->userdata('level') == 'admin')
		{
			$this->load->view('header/header_admin');
			$this->load->view('dashboard/dashboard_user');
			$this->load->view('footer/ft_footer');
		}else{
			redirect('login');
		}
	}
	public function info_kamar()
	{
		if($this->session->userdata('level') == 'admin')
		{
			$this->load->view("header/header_admin");
			$data['kamar']=$this->m_kamar->tampil_data()->result();
			$this->load->view("info_kamar",$data);
			$this->load->view("footer/footer");
		}else{
			redirect('login');
		}
	}
	public function tambah_kamar()
	{
		if($this->session->userdata('level') == 'admin')
		{
			$this->load->view("header/header_admin");
			$this->load->view('tambah_kamar');
			$this->load->view("footer/footer");
		}else{
			redirect('login');
		}
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
		if($this->session->userdata('level') == 'admin')
		{
			$where=array('id_kamar'=>$id);
			$data['kamar']=$this->m_kamar->edit_data($where,'kamar')->result();
			$this->load->view("header/header_admin");
			$this->load->view('edit_kamar',$data);
			$this->load->view("footer/footer");
		}else{
			redirect('login');
		}
	}
	public function hapus($id)
	{
		if($this->session->userdata('level') == 'admin')
		{
			$where = array('id_kamar' => $id);
			$this->m_kamar->hapus_data($where,'kamar');
			redirect('info_kamar');
		}else{
			redirect('login');
		}
	}
	public function update()
	{
		$idkamar = $this->input->post('idkamar');
		$namakamar = $this->input->post('namakamar');
		$ukurankamar = $this->input->post('ukurankamar');
		$status = $this->input->post('status');
		$hargabulanan = $this->input->post('hargabulanan');

		$data = array(
			'nama_kamar'=> $namakamar,
			'ukuran_kamar' => $ukurankamar,
			'status' => $status,
			'harga_bulanan' => $hargabulanan
		);

		$where = array(
			'id_kamar' => $idkamar
		);
		
		$testkamar=$this->m_kamar->update_data($where,$data,'kamar');
		redirect('info_kamar');
		// echo "dataout", json_encode($data);
		// echo json_encode($testkamar);

	}
}