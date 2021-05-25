<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data["title"]="Halaman Login";
		$this->load->view('auth/header',$data);
		$this->load->view('auth/login');
		$this->load->view('auth/footer');
	}
	public function login(){
		$this->load->model('main_model');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->main_model->getBy('user',["nim"=>$username]);
		$admin = $this->main_model->getBy('admin',["username"=>$username]);

		if($user!=""){
			if(password_verify($password,$user["password"])){
				$data=[
					"iduser"=>$user["id"],
					"nm_user"=>$user["nama"]
				];
				$this->session->set_userdata($data);
				redirect("user_controller/");
			}else{
				$this->session->set_flashdata('message',"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				Periksa kembali username dan password !!!
				</div>");
				redirect("auth/");
			}
		}else if($admin!=""){
			if(password_verify($password,$admin["password"])){
				$data=[
					"idadmin"=>$admin["id"],
					"nm_admin"=>$admin["nama"]
				];
				$this->session->set_userdata($data);
				redirect("admin_controller/");
			}else{
				$this->session->set_flashdata('message',"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				Periksa kembali username dan password !!!
				</div>");
				redirect("auth/");
			}
		}else{
				$this->session->set_flashdata('message',"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				Akun tidak ditemukan !!!
				</div>");
				redirect("auth/");
		}

		
	}
	public function user_registration_page(){
		$data["title"]="Registrasi User";
		$this->form_validation->set_rules("nama","Nama","required");
		$this->form_validation->set_rules("nim","Nomer Induk Mahasiswa","required");
		$this->form_validation->set_rules("password","Password","required");
		if($this->form_validation->run()==false){
			$this->load->model("main_model");
			$this->load->view('auth/header',$data);
			$this->load->view('auth/registration');
			$this->load->view('auth/footer');
		}else{
			$this->_register_user();
		}
	}
	private function _register_user(){
		$nama=$this->input->post("nama");
		$nim=$this->input->post("nim");
		$password=password_hash($this->input->post('password'),PASSWORD_DEFAULT);
		$angkatan=$this->input->post("angkatan");
		$jenis_kelamin=$this->input->post('kelamin');

		$data = [
			"nama"=>$nama,
			"nim"=>$nim,
			"jenis_kelamin"=>$jenis_kelamin,
			"angkatan"=>$angkatan,
			"password"=>$password,
		];

		$this->main_model->register_user($data);
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissible fade show' role='alert'>
        Akun Berhasil Dibuat
        </div>");
		redirect("auth/user_registration_page");
	}
	public function logout(){
		$data1=["iduser","nm_user"];
		$data2=["idadmin","nm_admin"];
		$this->session->unset_userdata($data1);
		$this->session->unset_userdata($data2);
		redirect('Auth/');
	}
}
