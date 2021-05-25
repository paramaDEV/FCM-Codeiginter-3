<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	public $idadmin;
	public function __construct(){
		parent :: __construct();
		$this->idadmin=$this->session->userdata("idadmin");
	}
	public function index()
	{
		if($this->idadmin!=null){
			$this->load->model('main_model');
			$data["user"]=$this->main_model->get_user();
			$data["kuisioner"]=$this->main_model->get_kuisioner();
			$result=$this->main_model->get_result();
			foreach ($result as $x) {
				if($x["final_cluster"]==1){
					$data["cluster1"][]=$x;
				}else{
					$data["cluster2"][]=$x;
				}
			}
			$this->load->model('main_model');
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/dashboard',$data);
			$this->load->view('admin/footer');
			}else{
				redirect("Auth/");
			}
	}
	public function data()
	{
		if($this->idadmin!=null){
			$this->load->model('main_model');
			$data["kuisioner"]=$this->main_model->get_kuisioner();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/data',$data);
			$this->load->view('admin/footer');
			}else{
				redirect("Auth/");
			}
	}
	public function result()
	{
		if($this->idadmin!=null){
			$this->load->model('main_model');
			$data["result"]=$this->main_model->get_result();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/result',$data);
			$this->load->view('admin/footer');
			}else{
				redirect("Auth/");
			}
	}
	public function user()
	{
		if($this->idadmin!=null){
			$this->load->model('main_model');
			$data["user"]=$this->main_model->get_user();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/user',$data);
			$this->load->view('admin/footer');
			}else{
				redirect("Auth/");
			}
	}
	public function clear(){
		$this->main_model->delete_result();
		redirect('Admin_controller/result');
	}
	public function fcm(){
		$this->main_model->delete_result();
		$dataKuisioner = $this->main_model->get_kuisioner();

		//Deklarasi data awal
		$dataAwal = [];
		foreach($dataKuisioner as $x){
			$dataAwal[]=[$x["x1"],$x["x2"],$x["x3"],$x["x4"],$x["x5"],$x["x6"]];
		}
		$jumlahPangkat = 2;
		$jumlahCluster = 2;
		$maxIter = 100;
		$p0=0;
		$errorTerkecil=0.01;
		$jumlahParameter = 6;
		$matriksPartisi=[];
		

		//Deklarasi matriks partisi
		for($i=0;$i<count($dataAwal);$i++){
			$bilRandom = rand(0,100)/100;
			$matriksPartisi[]=[$bilRandom,1-$bilRandom];
		}

		for($z=0;$z<$maxIter;$z++){
			$pusatCluster=[];
			$miuKuadrat=[];
			$totalMiuKuadrat=[];
			$matriksV=[];
			$matriksObjektif=[];
			$result=[];
			//Mencari miu kuadrat
			for($i=0;$i<count($matriksPartisi);$i++){
				$miuKuadrat[]=[round(pow($matriksPartisi[$i][0],$jumlahPangkat),4),
								round(pow($matriksPartisi[$i][1],$jumlahPangkat),4),
				];
			}

			//Menghitung total miu kuadrat
			for($i=0;$i<$jumlahCluster;$i++){
				$total=0;
				for($j=0;$j<count($miuKuadrat);$j++){
					$total+=$miuKuadrat[$j][$i];
				}
				$totalMiuKuadrat[]=$total;
			}

			//Menghitung matriks v
			for($i=0;$i<$jumlahParameter;$i++){
				$temp=[];
				for($j=0;$j<count($miuKuadrat);$j++){
					$temp[]=[
						$dataAwal[$j][$i]*$miuKuadrat[$j][0],
						$dataAwal[$j][$i]*$miuKuadrat[$j][1]
					];
				}
				$matriksV[]=$temp;
			}

			//Menghitung pusat cluster
				for($h=0;$h<$jumlahCluster;$h++){
					$temp=[];
					for($i=0;$i<count($matriksV);$i++){
						$total=0;
						for($j=0;$j<count($matriksV[$i]);$j++){
							$total+=$matriksV[$i][$j][$h];
						}
						$temp[]=$total/$totalMiuKuadrat[$h];
					}
					$pusatCluster[]=$temp;
				}
			
			// Menghitung Fungsi Objektif
			$temp1=[];
			for($h=0;$h<$jumlahCluster;$h++){
				$temp=[];
				for($i=0;$i<count($dataAwal);$i++){
					$x=0;
					for($j=0;$j<count($matriksV);$j++){
						$x+=pow($dataAwal[$i][$j]-$pusatCluster[$h][$j],2);
					}
					$temp[]=$x*$miuKuadrat[$i][$h];
					$temp1[$h][]=pow($x,(-1/(2-1)));
				}
				$matriksObjektif[]=$temp;
			}

			// Menghitung total fungsi objektif
			$matriksPartisi=[];
			$totalFungsiObjektif=0;
			for($i=0;$i<count($dataAwal);$i++){
				$x=$matriksObjektif[0][$i]+$matriksObjektif[1][$j];
				$totalFungsiObjektif+=$x;
				$y=$temp1[0][$i]+$temp1[1][$i];
				$matriksPartisi[]=[round($temp1[0][$i]/$y,4),round($temp1[1][$i]/$y,4)];

				// Hasil untuk disimpan kedalam database
				if($matriksPartisi[$i][0]>$matriksPartisi[$i][1]){
					$final_cluster=1;
				}else{
					$final_cluster=2;
				}
				$result[]=[
					"id_user"=>$dataKuisioner[$i]["id_user"],
					"cluster1"=>$matriksPartisi[$i][0],
					"cluster2"=>$matriksPartisi[$i][1],
					"final_cluster"=>$final_cluster
				];
			}

			//Menghitung selisih fungsi objektif
			$p0=abs($p0-$totalFungsiObjektif);
			if($p0<=$errorTerkecil){
				die($p0);
			}
		}
		for($i=0;$i<count($dataAwal);$i++){
			$this->main_model->set_result($result[$i]);
		}
		redirect("admin_controller/result");
	}
}
