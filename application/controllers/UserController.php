<?php 
class UserController extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		// $this->load->model('M_user_mengement');
		$this->load->model('M_user');
		$this->load->model('M_booking');
		$this->load->model('M_register');
		$this->load->model('M_kamar');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->library('session');
	}

	public function home()
	{
		$data['kamar']=$this->M_kamar->tampil_data()->result();
		$this->load->view('header/home');
		$this->load->view('home/index',$data);
		$this->load->view('footer/home');
	}

	
	public function error()
	{
		$this->load->view('header/login');
		$this->output->set_status_header('404');
		$this->load->view('404/404');
		$this->load->view('footer/login');
	}

	public function login()
	{
		$this->load->view('header/login');
		$this->load->view('login/login');
		$this->load->view('footer/login');
	}

	public function getLogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$cek = $this->M_user->cek($email, $password);
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['id'] = $data->id;
				$sess_data['email'] = $data->email;
				$sess_data['level'] = $data->user_level;
				$sess_data['nama'] = $data->nama;
				
			}
			$this->session->set_userdata($sess_data);
			// $this->session->set_userdata('session_user',$sess_data);
			// $this->session->set_userdata('level', $sess_data['level']);
			// if($sess_data['level'] == 'owner' )
			if($this->session->userdata('level') == 'owner')
			{
				// $idUser = $this->session->set_userdata('idUser', $idUser);
				$idUser = $this->session->id;
				redirect('owner');
			}
			// elseif($sess_data['level'] == 'user')
			elseif($this->session->userdata('level') == 'user')
			{
				redirect('user');
			}
			// elseif($sess_data['level'] == 'admin')
			elseif($this->session->userdata('level') == 'admin')
			{
				redirect('admin');
			}
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dengan password salah.');
			// var_dump($this->session->flashdata('pesan'));
			// echo json_encode($cek);
			redirect('login');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}

	public function register()
	{
		$this->form_validation->set_rules('nama', 'required');
		$this->form_validation->set_rules('alamat', 'required');
		$this->form_validation->set_rules('tanggal', 'required');
		$this->form_validation->set_rules('nohp', 'required');
		$this->form_validation->set_rules('pekerjaan', 'required');
		$this->form_validation->set_rules('email', 'required');
		$this->form_validation->set_rules('password', 'required|min_length[4]|matches[cpassword]', ['matches' => 'password not match!', 'min_length' => 'password too short!']);
		$this->form_validation->set_rules('cpassword', 'required|min_length[4]|matches[password]');

		$this->load->view("header/register");
		$this->load->view("register/register");
		$this->load->view("footer/ft_footer");

		if(isset($_POST['submit']))
		{
			$nama=$this->input->post('nama');
			$alamat=$this->input->post('alamat');
			$tanggal=$this->input->post('tanggal');
			$nohp=$this->input->post('nohp');
			$pekerjaan=$this->input->post('pekerjaan');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$data=array(
				'nama'=> $nama,
				'alamat'=> $alamat,
				'tanggal_lahir'=> $tanggal,
				'nohp'=> $nohp,
				'pekerjaan'=> $pekerjaan,
				'email'=> $email,
				'password'=> $password,
				'user_level' => 'user'
			);
			$test=$this->M_register->input_data($data,'user');
			$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
				Selamat! Akun telah dibuat silahkan login!
				</div>');
			redirect('login');
			// echo json_encode($test->$result());
			// echo $cek->num_rows();
		}

	}


	public function user_management()
	{
		$id=$this->session->id;
		// echo json_encode($id);
		$data['user']=$this->M_user->tampil_data_user($id,'user');
		// echo json_encode($data['user']);die();
		$user=$this->M_user->tampil_data()->result();
		$data['title'] = 'Users Admin | Dashboard';
		$this->load->view("header/header_admin",$data);

		$dataLength = count($user);

		$config = array();
		$config['base_url'] = base_url().'UserController/user_management/'.$this->uri->segment(4); //site url
		$config['total_rows'] = $dataLength; //total row
		$config['per_page'] = 5;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		$config['first_link']	   = 'First';
		$config['last_link']		= 'Last';
		$config['next_link']		= 'Next';
		$config['prev_link']		= 'Prev';
		$config['full_tag_open']	= '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']	 = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']	= '</span></li>';
		$config['cur_tag_open']	 = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']	= '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']	= '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']	= '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']	= '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


					// echo $this->uri->segment(4);
		$countVacancy = $config['total_rows'];

		$data['user'] = $this->M_user->get_user_list($config["per_page"], $data['page']);
		$data['pagination'] = $this->pagination->create_links();

		$this->load->view("user/index",$data);
		$this->load->view("footer/ft_footer");
	}
	public function tambah()
	{
		$data['title'] = 'Tambah User | Dashboard';
		$this->load->view("header/header_admin",$data);
		$this->load->view('user/tambah_user');
		$this->load->view("footer/ft_footer");
	}
	public function aksi_tambah()
	{
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$alamat=$this->input->post('alamat');
		$level=$this->input->post('user_level');
		$tanggallahir=$this->input->post('tanggallahir');
		$nohp=$this->input->post('nohp');
		$pekerjaan=$this->input->post('pekerjaan');
		$data=array(
			'nama'=> $nama,
			'email'=> $email,
			'alamat'=> $alamat,
			'tanggal_lahir'=> $tanggallahir,
			'nohp'=> $nohp,
			'pekerjaan'=> $pekerjaan,
			'user_level'=> $level
		);
		$this->M_user->input_data($data,'user');
		redirect('users');
	}
	public function edit($id)
	{
		// data untuk view header
		$idsession=$this->session->id;
		// echo json_encode($id);
		$data1['user']=$this->M_user->tampil_data_user($id,'user');
		$where=array('id'=>$id);
		$data['user']=$this->M_user->edit_data($where,'user')->result();
		$data1['title'] = 'Edit User | Dashboard';
		$this->load->view("header/header_admin",$data1);
		$this->load->view('user/edit_user',$data);
		$this->load->view("footer/ft_footer");
	}
	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_user->hapus_data($where,'user');
		redirect('users');
	}
	public function update()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$tanggal = $this->input->post('tanggal');
		$nohp = $this->input->post('nohp');
		$pekerjaan = $this->input->post('pekerjaan');
		
		$data = array(
			'nama'=>$nama,
			'alamat'=>$alamat,
			'email'=>$email,
			'tanggal_lahir'=>$tanggal,
			'nohp'=>$nohp,
			'pekerjaan'=>$pekerjaan,
			'user_level'=>'user'
		);

		$where = array(
			'id' => $id
		);

		$TestUser=$this->M_user->update_data($where,$data,'user');
		redirect('users');
		// echo $TestUser -> num_rows($data);
		// echo json_encode($TestUser -> $result());
		// $out = array_values($TestUser);
		// json_encode($out);
	}
	public function user_profile()
	{
		// data untuk view header
		$idsession=$this->session->id;
		$id=$this->session->id;
		// echo json_encode($id);
		$data1['user']=$this->M_user->tampil_data_user($idsession,'user');
		// echo json_encode($data['user']);die();
		$data['user']=$this->M_user->userprofile($id);
		// echo json_encode($data);die();
		$data1['title'] = 'User Profile | Dashboard';
		if ($this->session->userdata('level') == 'user')
		{
			$this->load->view("header/header_user",$data1);
			$this->load->view('dashboard/profile_user',$data);
			$this->load->view("footer/ft_footer");
		}else{
			redirect('login');
		}
	}
	public function admin_profile()
	{
		$id=$this->session->id;
		// echo json_encode($id);
		$data['user']=$this->M_user->tampil_data_user($id,'user');
		// echo json_encode($data['user']);die();
		$id = $this->session->id;
		$data['user'] = $this->M_user->userprofile($id);
		// echo json_encode($data);die();
		$data['title'] = 'Admin Profile | Dashboard';
		if ($this->session->userdata('level') == 'admin')
		{
			$this->load->view("header/header_admin",$data);
			$this->load->view('dashboard/profile_user',$data);
			$this->load->view("footer/ft_footer");
		}else{
			redirect('login');
		}
	}
	public function owner_profile()
	{
		$id=$this->session->id;
		// echo json_encode($id);
		$data['user']=$this->M_user->tampil_data_user($id,'user');
		// echo json_encode($data['user']);die();
		$id = $this->session->id;
		$data['user'] = $this->M_user->userprofile($id);
		// echo json_encode($data);die();
		$data['title'] = 'Owner Profile | Dashboard';
		if ($this->session->userdata('level') == 'owner')
		{
			$this->load->view("header/header_owner",$data);
			$this->load->view('dashboard/profile_user',$data);
			$this->load->view("footer/ft_footer");
		}else{
			redirect('login');
		}
	}

	// OWNER SECTIONS!!
	public function user_management_owner()
	{
		$id=$this->session->id;
		// echo json_encode($id);
		$data['user']=$this->M_user->tampil_data_user($id,'user');
		// echo json_encode($data['user']);die();
		$user=$this->M_user->tampil_data()->result();
		$data['title'] = 'Users Owner | Dashboard';
		$this->load->view("header/header_owner",$data);

		$dataLength = count($user);

		$config = array();
		$config['base_url'] = base_url().'UserController/user_management/'.$this->uri->segment(4); //site url
		$config['total_rows'] = $dataLength; //total row
		$config['per_page'] = 5;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		$config['first_link']	   = 'First';
		$config['last_link']		= 'Last';
		$config['next_link']		= 'Next';
		$config['prev_link']		= 'Prev';
		$config['full_tag_open']	= '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']	 = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']	= '</span></li>';
		$config['cur_tag_open']	 = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']	= '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']	= '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']	= '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']	= '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


					// echo $this->uri->segment(4);
		$countVacancy = $config['total_rows'];

		$data['user'] = $this->M_user->get_user_list($config["per_page"], $data['page']);
		$data['pagination'] = $this->pagination->create_links();

		$this->load->view("owner/users/index",$data);
		$this->load->view("footer/ft_footer");
	}
	public function view_users($id)
	{
		// data untuk view header
		$idsession=$this->session->id;
		// echo json_encode($id);
		$data1['user']=$this->M_user->tampil_data_user($idsession,'user');
		$where=array('id'=>$id);
		$data['user']=$this->M_user->edit_data($where,'user')->result();
		$data1['title'] = 'View Profile| Dashboard';
		if ($this->session->userdata('level') == 'owner')
		{
			$this->load->view("header/header_owner",$data1);
			$this->load->view('owner/users/view_users_profile',$data);
			$this->load->view("footer/ft_footer");
		}else{
			redirect('login');
		}
	}
}
