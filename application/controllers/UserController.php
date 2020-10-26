<?php 
class UserController extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		// $this->load->model('m_user_mengement');
		$this->load->model('m_user');
		$this->load->model('m_register');
		$this->load->model('m_kamar');
		$this->load->helper('form','url');
		$this->load->library('form_validation');
		$this->load->library('pagination');
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

		// echo json_encode($cek->result());
		// echo $cek->num_rows();
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['id'] = $data->id;
				$sess_data['email'] = $data->email;
				$sess_data['level'] = $data->user_level;
				$this->session->set_userdata($sess_data);
			}
			if($this->session->userdata('level') == 'owner' ) 
			{
				$idUser = $this->session->idUser;
				redirect('kamarcontroller/owner');
			}
			elseif($this->session->userdata('level') == 'user')
			{
				redirect('kamarcontroller/user');
			}
			elseif($this->session->userdata('level') == 'admin')
			{
				redirect('kamarcontroller/admin');
			}
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dengan password salah.');
			redirect('login');
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}

	public function register()
	{
		$this->load->view("header/register");
		$this->load->view("register/register");
		$this->load->view("footer/ft_footer");

		if(isset($_POST['submit']))
		{
			$nama=$this->input->post('nama');
			$alamat=$this->input->post('alamat');
			$tanggal=$this->input->post('tanggal');
			$no_hp=$this->input->post('nohp');
			$pekerjaan=$this->input->post('pekerjaan');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$data=array(
				'nama'=> $nama,
				'alamat'=> $alamat,
				'tanggal_lahir'=> $tanggal,
				'no_hp'=> $no_hp,
				'pekerjaan'=> $pekerjaan,
				'email'=> $email,
				'password'=> $password,
				'user_level' => 'user'
			);
			$test=$this->m_register->input_data($data,'user');
			redirect('register');
			// echo json_encode($test->$result());
			// echo $cek->num_rows();
		}

	}


	public function user_management()
	{
		$this->load->view("header/header");
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
			'no_hp'=> $nohp,
			'umur'=> $umur,
			'pekerjaan'=> $pekerjaan,
			'user_level'=> $level
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