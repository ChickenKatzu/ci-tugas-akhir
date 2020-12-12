<?php 

class KamarController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// $this->load->model('M_user_mengement');
		$this->load->model('M_user');
		$this->load->model('M_register');
		$this->load->model('M_kamar');
		$this->load->model('M_booking');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('forM_validation');
		// $this->load->library('pagination');
	}
	public function user()
	{
		$idsession=$this->session->id;
		// echo json_encode($id);
		$data['user']=$this->M_user->tampil_data_user($idsession,'user');
		// echo json_encode($data['user']);die();
		$data['title'] = 'User | Dashboard';
		if($this->session->userdata('level') == 'user')
		{
			$this->load->view('header/header_user',$data);
			$this->load->view('dashboard/dashboard_user',$data);
			$this->load->view('footer/ft_footer');
			
		} else {
			redirect('login');
		}
	}

	public function admin()
	{
		$idsession=$this->session->id;
		// echo json_encode($id);
		$data['user']=$this->M_user->tampil_data_user($idsession,'user');
		// echo json_encode($data['user']);die();
		$data['title'] = 'Admin | Dashboard';
		if($this->session->userdata('level') == 'admin')
		{
			$this->load->view('header/header_admin',$data);
			$this->load->view('dashboard/dashboard_user',$data);
			$this->load->view('footer/ft_footer');
		}else{
			redirect('login');
		}
	}

	
	public function owner()
	{
		$idsession=$this->session->id;
		// echo json_encode($id);
		$data['user']=$this->M_user->tampil_data_user($idsession,'user');
		// echo json_encode($data['user']);die();
		$data['title'] = 'Owner Dashboard';
		if($this->session->userdata('level') == 'owner')
		{
			$this->load->view('header/header_owner',$data);
			$this->load->view('dashboard/dashboard_user',$data);
			$this->load->view('footer/ft_footer');
		}else{
			redirect('login');
		}
	}


	
	public function info_kamar()
	{
		$idsession=$this->session->id;
		// echo json_encode($id);
		$data1['user']=$this->M_user->tampil_data_user($idsession,'user');
		// echo json_encode($data['user']);die();
		$data['kamar']=$this->M_kamar->tampil_data()->result();
		$data1['title'] = 'View Kamar | Dashboard';
		if($this->session->userdata('level') == 'admin')
		{
			$this->load->view("header/header_admin",$data1);
			$this->load->view("info_kamar",$data);
			$this->load->view("footer/ft_footer");
		}else{
			redirect('login');
		}
	}
	public function tambah_kamar()
	{
		$idsession=$this->session->id;
		// echo json_encode($id);
		$data['user']=$this->M_user->tampil_data_user($idsession,'user');
		// echo json_encode($data['user']);die();
		$data['title'] = 'Tambah Kamar | Dashboard';
		if($this->session->userdata('level') == 'admin')
		{
			$this->load->view("header/header_admin",$data);
			$this->load->view('tambah_kamar');
			$this->load->view("footer/ft_footer");
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
		$this->M_kamar->input_data($data,'kamar');
		redirect('info_kamar');
	}
	public function edit($id)
	{
		// data untuk view header
		$idsession=$this->session->id;
		// echo json_encode($id);
		$data1['user']=$this->M_user->tampil_data_user($idsession,'user');
		// echo json_encode($data1['user']);
		$where=array('id_kamar'=>$id);
		$data['kamar']=$this->M_kamar->edit_data($where,'kamar')->result();
		// echo json_encode($where);
		// echo json_encode($data['kamar']);die();
		$data1['title'] = 'Edit Kamar| Dashboard';

		if($this->session->userdata('level') == 'admin')
		{
			$this->load->view("header/header_admin",$data1);
			$this->load->view('edit_kamar',$data);
			$this->load->view("footer/ft_footer");
		}else{
			redirect('login');
		}
	}
	public function hapus($id)
	{
		if($this->session->userdata('level') == 'admin')
		{
			$where = array('id_kamar' => $id);
			$this->M_kamar->hapus_data($where,'kamar');
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
		
		$testkamar=$this->M_kamar->update_data($where,$data,'kamar');
		redirect('info_kamar');
		// echo "dataout", json_encode($data);
		// echo json_encode($testkamar);

	}
	public function user_inbox()
	{
		// data untuk view header
		$idsession=$this->session->id;
		// echo json_encode($id);
		$data1['user']=$this->M_user->tampil_data_user($idsession,'user');
		// echo json_encode($data['user']);die();
		$id=$this->session->id;
		$data['user']=$this->M_booking->tampil_data_join_inbox($id,'user');
		// echo json_encode($data);die();
		$data1['title'] = 'Inbox | Dashboard';
		if($this->session->userdata('level') == 'user')
		// if($sess_data['level'] == 'user' ) 
			
		{
			$this->load->view('header/header_user',$data1);
			$this->load->view('user/inbox',$data);
			$this->load->view('footer/ft_footer');
			
		} else {
			redirect('login');
		}
	}


	// OWNER SECTIONs!
	public function info_kamar_owner()
	{
		$idsession=$this->session->id;
		// echo json_encode($id);
		$data1['user']=$this->M_user->tampil_data_user($idsession,'user');
		// echo json_encode($data['user']);die();
		$data['kamar']=$this->M_kamar->tampil_data()->result();
		$data1['title'] = 'Info Kamar | Dashboard';
		if($this->session->userdata('level') == 'owner')
		{
			$this->load->view("header/header_owner",$data1);
			$this->load->view("owner/kamar/index",$data);
			$this->load->view("footer/ft_footer");
		}else{
			redirect('login');
		}
	}

	public function view_kamar($id)
	{
		// data untuk view header
		$idsession=$this->session->id;
		// echo json_encode($id);
		$data1['user']=$this->M_user->tampil_data_user($idsession,'user');
		// echo json_encode($data1['user']);
		$where=array('id_kamar'=>$id);
		$data['kamar']=$this->M_kamar->edit_data($where,'kamar')->result();
		// echo json_encode($where);
		// echo json_encode($data['kamar']);die();
		$data1['title'] = 'Payment Dashboard';
		if($this->session->userdata('level') == 'owner')
		{
			$this->load->view("header/header_owner",$data1);
			$this->load->view('owner/kamar/view_kamar',$data);
			$this->load->view("footer/ft_footer");
		}else{
			redirect('login');
		}
	}
}