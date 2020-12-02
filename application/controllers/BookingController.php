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
		$this->load->library('form_validation');
		$this->load->helper(array('form','url'));
	}
	// ADMIN PAGE
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
		$id=$this->session->id;
		$data['kamar'] =$this->m_kamar->tampil_data($id)->result();
		$data1['title'] = 'Pesan Kamar | Dashboard';
		if ($this->session->userdata('level') == 'user')
		{
			$this->load->view("header/header",$data1);
			$this->load->view('booking/form_booking', $data);
			$this->load->view("footer/footer");
		}else{
			redirect ('login');
		}
	}
	public function order()
	{
		
		$id_user = $this->session->id;
		$idkamar = $this->input->post('idkamar');
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
		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
			Booking berhasil! Silahkan Konfirmasi pembayaran di inbox!
			</div>');
		return redirect('user');
		// $out = array_values($test1);
		// json_encode($out);
	}

	// ADMIN PAGE PAYMENT
	public function payment()
	{
		// data untuk view header
		$idsession=$this->session->id;
		// echo json_encode($id);
		$data1['user']=$this->m_user->tampil_data_user($idsession,'user');
		// echo json_encode($data['user']);die();
		$data['booking']=$this->m_booking->tampil_data_join();
		// echo json_encode($data['booking']);
		$data1['title'] = 'Payment | Dashboard';
		if($this->session->userdata('level') == 'admin')
		{
			$this->load->view("header/header_admin",$data1);
			$this->load->view("booking/payment",$data);
			$this->load->view("footer/ft_footer");
		}else{
			redirect('login');
		}
	}
	public function konfirmasi_payment($id_booking)
	{
		// data untuk view header
		$idsession=$this->session->id;
		// echo json_encode($id);
		$data1['user']=$this->m_user->tampil_data_user($idsession,'user');
		// echo json_encode($data['user']);die();
		$where=array('id_booking'=>$id_booking);
		$data['booking']=$this->m_booking->tampil_data_join_booking($where,'booking');
		// echo json_encode($data['booking']);die();
		$data1['title'] = 'Konfirmasi Payment | Dashboard';
		if($this->session->userdata('level') == 'admin')
		{
		// echo json_encode($data['booking']);
			$this->load->view("header/header_admin",$data1);
			$this->load->view("booking/payment_konfirm",$data);
			$this->load->view("footer/ft_footer");
		}else{
			redirect('login');
		}
	}

	public function update_konifirmasi_payment()
	{
		$id = $this->input->post('id');

		$data = array(
			'status' => 'Paid',
		);

		$where = array(
			'id_booking' => $id
		);

		$data=$this->m_booking->update_data_payment($where,$data,'booking');
		redirect('payment');
		// echo $data -> num_rows($data);
		// echo json_encode($data -> $result());
		// $out = array_values($data);
		// json_encode($out);
	}

	public function hapus($id)
	{
		$where = array('id_booking' => $id, 'status_booking' => 'Available');

		if($this->session->userdata('level') == 'admin')
		{
			$data=$this->m_booking->hapus_data_join_payment($where);
			// echo json_encode($data);die();
			redirect('payment');
		}else{
			redirect('login');
		}
	}
	// USER PAGE PAYMENT
	public function hapus_payment($id)
	{
		$where = array('id_booking' => $id);
		$this->m_booking->hapus_data($where,'booking');
		redirect('users');
	}
	public function payment_user($id)
	{
		$idsession=$this->session->id;
		// echo json_encode($id);
		$data1['user']=$this->m_user->tampil_data_user($idsession,'user');
		// echo json_encode($data['user']);die();
		$where=array('id_booking' => $id);
		$data['user']=$this->m_booking->tampil_data_join_inbox_detail($where);
		// echo json_encode($data1['user']);die();
		$data1['title'] = 'Payment | Dashboard';
		if ($this->session->userdata('level') == 'user')
		{
			$this->load->view('header/header_user',$data1);
			$this->load->view('user/payment_user',$data);
			$this->load->view('footer/ft_footer');
		}else{
			redirect('login');
		}
	}

	public function upload()
	{
		$config ['upload_path']='./gambar/';
		$config ['allowed_types']='|jpg|png|jpeg';
		$config ['file_name']='gambar';
		$config ['max_size']=2000;
		$config ['max_width']=1920;
		$config ['max_height']=1200;
		$this->load->library('upload',$config);
		if ($this->upload->do_upload('gambar'))
		{
			return $data=$this->upload->data("file_name");
		}
	}

	public function upload_gambar()
	{
		$id=$this->input->post('id');
		$gambar=$this->upload();
		$data=array(
			'gambar'=>$gambar
		);
		$where=array(
			'id' => $id
		);
		$data1['user']=$this->m_user->update_data($where,$data,'user');
		redirect('userinbox');
	}

	// OWNER SECTIONS!
	public function owner_payment()
	{
		// data untuk view header
		$idsession=$this->session->id;
		// echo json_encode($id);
		$data1['user']=$this->m_user->tampil_data_user($idsession,'user');
		// echo json_encode($data['user']);die();
		$data['booking']=$this->m_booking->tampil_data_join();
		// echo json_encode($data['booking']);
		$data1['title'] = 'Payment | Dashboard';
		if($this->session->userdata('level') == 'owner')
		{
			$this->load->view("header/header_owner",$data1);
			$this->load->view("owner/payments/payments",$data);
			$this->load->view("footer/ft_footer");
		}else{
			redirect('login');
		}
	}

	public function view_payments($id_booking)
	{
		// data untuk view header
		$idsession=$this->session->id;
		// echo json_encode($id);
		$data1['user']=$this->m_user->tampil_data_user($idsession,'user');
		// echo json_encode($data['user']);die();
		$where=array('id_booking'=>$id_booking);
		$data['booking']=$this->m_booking->tampil_data_join_booking($where,'booking');
		// echo json_encode($data['booking']);die();
		$data1['title'] = 'View Payment | Dashboard';
		if($this->session->userdata('level') == 'owner')
		{
		// echo json_encode($data['booking']);
			$this->load->view("header/header_owner",$data1);
			$this->load->view("owner/payments/view_payments",$data);
			$this->load->view("footer/ft_footer");
		}else{
			redirect('login');
		}
	}
}