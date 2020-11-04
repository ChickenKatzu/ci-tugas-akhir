<?php 
class UserController extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		// $this->load->model('m_user_mengement');
		$this->load->model('m_user');
		$this->load->model('m_register');
		$this->load->model('m_kamar');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->library('session');
	}

	public function home()
	{
		$this->load->view('header/home');
		$data['kamar']=$this->m_kamar->tampil_data()->result();
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

		// echo $email;
		// echo $password;

		$cek = $this->m_user->cek($email, $password);

		// $error = $this->db->error($cek);
		echo json_encode($cek->result());
		echo $cek->num_rows();
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['id'] = $data->id;
				$sess_data['email'] = $data->email;
				$sess_data['level'] = $data->user_level;
				
			}
			$this->session->set_userdata('session_user', $sess_data);
			if($sess_data['level'] == 'owner' ) 
			{
				// $idUser = $this->session->set_userdata('idUser', $idUser);
				redirect('owner');
			}
			elseif($sess_data['level'] == 'user')
			{
				redirect('user');
			}
			elseif($sess_data['level'] == 'admin')
			{
				redirect('admin');
			}
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dengan password salah.');
			// var_dump($this->session->flashdata('pesan'));
			// echo json_encode($cek);
			// redirect('login');
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
			$test=$this->m_register->input_data($data,'user');
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
		$this->load->view("header/header_admin");
		$user=$this->m_user->tampil_data()->result();

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

		$data['user'] = $this->m_user->get_user_list($config["per_page"], $data['page']);
		$data['pagination'] = $this->pagination->create_links();

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
		$level=$this->input->post('user_level');
		$tanggallahir=$this->input->post('tanggallahir');
		$nohp=$this->input->post('nohp');
		$umur=$this->input->post('umur');
		$pekerjaan=$this->input->post('pekerjaan');
		$data=array(
			'nama'=> $nama,
			'email'=> $email,
			'alamat'=> $alamat,
			'tanggal_lahir'=> $tanggallahir,
			'nohp'=> $nohp,
			'umur'=> $umur,
			'pekerjaan'=> $pekerjaan,
			'user_level'=> $level
		);
		$this->m_user->input_data($data,'user');
		redirect('UserController');
	}
	public function edit($id)
	{
		$this->load->view("header/header_admin");
		$where=array('id'=>$id);
		$data['user']=$this->m_user->edit_data($where,'user')->result();
		$this->load->view('user/edit_user',$data);
		$this->load->view("footer/ft_footer");
	}
	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_user->hapus_data($where,'user');
		redirect('users');
	}
	public function update()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$tanggal = $this->input->post('tanggal_lahir');
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

		$TestUser=$this->m_user->update_data($where,$data,'user');
		redirect('users');
		// echo $TestUser -> num_rows($data);
		// echo json_encode($TestUser -> $result());
		// $out = array_values($TestUser);
		// json_encode($out);
	}
}