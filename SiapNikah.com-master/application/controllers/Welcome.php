<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('index');

	}
	public function login()
	{
		$this->load->view('front/login');

	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('welcome/index'));
	} 
	public function persiapan()
	{
		$this->load->view('front/persiapan');
	}
	public function komentar()
	{
		$this->load->view('front/komentar');

	}
	public function insert_komentar()
	{
		$this->load->model('Komentar_model');
		$id_komentar=$this->input->post('id_komentar');
		$nama_komentar=$this->input->post('nama_komentar');
		$isi_komentar=$this->input->post('isi_komentar');			
		$data_komentar=array('nama_komentar' =>$nama_komentar,
							'isi_komentar'=>$isi_komentar);
		
		$this->Komentar_model->insert($data_komentar);	
		redirect(site_url('welcome/komentar'));
	}

	public function tips()
	{
		$this->load->view('front/tipsinspirasi');

	}
	public function step1()
	{
		$this->load->model('Tahap_model');
		$data_tahap = $this->Tahap_model->select_tahap1();
		$data['tahap1']=$data_tahap;
		if( ! $this->session->userdata('authenticated'))
      	{
        redirect(site_url('welcome/login')); 
        }
		$this->load->view('front/steps1',$data);

	}
	public function step2()
	{
		
		$this->load->model('Komentar_model');
		$data_komentar = $this->Komentar_model->select();
		$data['komentar']=$data_komentar;
		if( ! $this->session->userdata('authenticated'))
      	{
        redirect(site_url('welcome/login')); 
        }
		$this->load->view('front/steps2');

	}
	public function step3()
	{
		if( ! $this->session->userdata('authenticated'))
      	{
        redirect(site_url('welcome/login')); 
        }
		$this->load->view('front/steps3');

	}
	public function step4()
	{
		if( ! $this->session->userdata('authenticated'))
      	{
        redirect(site_url('welcome/login')); 
        }
		$this->load->view('front/steps4');

	}
	public function step5()
	{
		if( ! $this->session->userdata('authenticated'))
      	{
        redirect(site_url('welcome/login')); 
        }
		$this->load->view('front/steps5');

	}
	public function step6()
	{
		if( ! $this->session->userdata('authenticated'))
      	{
        redirect(site_url('welcome/login')); 
        }
		$this->load->view('front/steps6');

	}
	public function step7()
	{
		if( ! $this->session->userdata('authenticated'))
      	{
        redirect(site_url('welcome/login')); 
        }
		$this->load->view('front/steps7');

	}

}
