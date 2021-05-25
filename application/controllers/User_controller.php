<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {

	public $iduser;
	public function __construct(){
		parent :: __construct();
		$this->iduser=$this->session->userdata("iduser");
	}
	public function index()
	{
		if($this->iduser!=null){
			$data["submission"]=$this->main_model->getBy("kuisioner",["id_user"=>$this->iduser]);
			$this->load->model('main_model');
			$this->load->view('user/header');
			$this->load->view('user/sidebar');
			$this->load->view('user/dashboard',$data);
			$this->load->view('user/footer');
		}else{
			redirect("Auth/");
		}
	}
	public function kuisioner()
	{
		if($this->iduser!=null){
			$this->load->model('main_model');
			$data["submission"]=$this->main_model->getBy("kuisioner",["id_user"=>$this->iduser]);
			$this->load->model('main_model');
			$this->load->view('user/header');
			$this->load->view('user/sidebar');
			$this->load->view('user/kuisioner',$data);
			$this->load->view('user/footer');
		}else{
			redirect("Auth/");
		}
	}
	public function send_kuisioner()
	{
		if($this->iduser!=null){
			$x1=$this->input->post("x1");
			$x2=$this->input->post("x2");
			$x3=$this->input->post("x3");
			$x4=$this->input->post("x4");
			$x5=$this->input->post("x5");
			$x6=$this->input->post("x6");

			$data=[
				"id_user"=>$this->iduser,
				"x1"=>$x1,
				"x2"=>$x2,
				"x3"=>$x3,
				"x4"=>$x4,
				"x5"=>$x5,
				"x6"=>$x6
			];
			$this->main_model->send_kuisioner($data);
			$this->session->set_flashdata("message","<div class='alert alert-success alert-dismissible fade show' role='alert'>
			Berhasil input data !!!
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  <span aria-hidden='true'>&times;</span>
			</button>
		  </div>");
			redirect("user_controller/kuisioner");
		}else{
			redirect("Auth/");
		}
	}
	public function result()
	{
		if($this->iduser!=null){
			$this->load->model('main_model');
			$data["kuisioner"]=$this->main_model->get_kuisioner();
			$data["result"]=$this->main_model->get_result();
			$result=$this->main_model->get_result();
			foreach ($result as $x) {
				if($x["final_cluster"]==1){
					$data["cluster1"][]=$x;
				}else{
					$data["cluster2"][]=$x;
				}
			}
			$this->load->view('user/header');
			$this->load->view('user/sidebar');
			$this->load->view('user/result',$data);
			$this->load->view('user/footer');
		}else{
			redirect("Auth/");
		}
	}
}
