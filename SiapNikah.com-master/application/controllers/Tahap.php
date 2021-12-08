<?php 
	/**
	 * 
	 */
	class Tahap extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Tahap_model');
		}

		public function home()
		{
			$data_tahap = $this->Tahap_model->select_tahap1();
			$data['tahap1']=$data_tahap;
			
			if( ! $this->session->userdata('authenticated'))
      		{
            redirect(site_url('admin/index')); 
        	}
			$this->load->view('admin/content',$data);
		}

		public function select()
		{
			return $this->db->get('tahap1')->result();
			return $this->db->get('tahap2')->result();
			return $this->db->get('tahap3')->result();
			return $this->db->get('tahap4')->result();
			return $this->db->get('tahap5')->result();
			return $this->db->get('tahap6')->result();
		}
		

		public function delete_tahap1($id) 
		{
			$this->Tahap_model->delete_tahap1($id);
			redirect(site_url('tahap/home'));
		}
		public function delete_tahap2($id) 
		{
			$this->Tahap_model->delete_tahap2($id);
			redirect(site_url('tahap/home'));
		}
		public function delete_tahap3($id) 
		{
			$this->Tahap_model->delete_tahap3($id);
			redirect(site_url('tahap/home'));
		}
		public function delete_tahap4($id) 
		{
			$this->Tahap_model->delete_tahap4($id);
			redirect(site_url('tahap/home'));
		}
		public function delete_tahap5($id) 
		{
			$this->Tahap_model->delete_tahap5($id);
			redirect(site_url('tahap/home'));
		}
		public function delete_tahap6($id) 
		{
			$this->Tahap_model->delete_tahap6($id);
			redirect(site_url('tahap/home'));
		}


		public function update_tahap1($id)
		{
			$tahap1=$this->db->where('id_tahap1',$id)->get('tahap1')->row();
			$data['tahap1']=$tahap1;
			$this->load->view('admin/form_content1',$data);
		}

		public function update_tahap2($id)
		{
			$tahap2=$this->db->where('id_tahap2',$id)->get('tahap2')->row();
			$data['tahap2']=$tahap2;
			$this->load->view('admin/form_content2',$data);
		}
		public function update_tahap3($id)
		{
			$tahap3=$this->db->where('id_tahap3',$id)->get('tahap3')->row();
			$data['tahap3']=$tahap3;
			$this->load->view('admin/form_content3',$data);
		}
		public function update_tahap4($id)
		{
			$tahap4=$this->db->where('id_tahap4',$id)->get('tahap4')->row();
			$data['tahap4']=$tahap4;
			$this->load->view('admin/form_content4',$data);
		}
		public function update_tahap5($id)
		{
			$tahap5=$this->db->where('id_tahap5',$id)->get('tahap5')->row();
			$data['tahap5']=$tahap5;
			$this->load->view('admin/form_content5',$data);
		}
		public function update_tahap6($id)
		{
			$tahap6=$this->db->where('id_tahap6',$id)->get('tahap6')->row();
			$data['tahap6']=$tahap6;
			$this->load->view('admin/form_content6',$data);
		}

		public function insert1()
		{
			$this->load->view('admin/form_content1');
		}
		public function insert2()
		{
			$this->load->view('admin/form_content2');
		}
		public function insert3()
		{
			$this->load->view('admin/form_content3');
		}
		public function insert4()
		{
			$this->load->view('admin/form_content4');
		}
		public function insert5()
		{
			$this->load->view('admin/form_content5');
		}
		public function insert6()
		{
			$this->load->view('admin/form_content6');
		}

		public function insert_aksi1()
		{
			$id_tahap1=$this->input->post('id_tahap');
			$jangka_tahap1=$this->input->post('jangka_tahap');
			$isi_tahap1=$this->input->post('isi_tahap');			
			$data_tahap1=array('jangka_tahap1' =>$jangka_tahap1,
								'isi_tahap1'=>$isi_tahap1);
				if ($id_tahap1 == "") {
					$this->Tahap_model->insert_tahap1($data_tahap1);	
					redirect(site_url('tahap/home'));
				}else {
					$this->Tahap_model->update_tahap1($data_tahap1,$id_tahap1);
					redirect(site_url('tahap/home'));
				}
		}

		public function insert_aksi2()
		{
			$id_tahap2=$this->input->post('id_tahap');
			$jangka_tahap2=$this->input->post('jangka_tahap');
			$isi_tahap2=$this->input->post('isi_tahap');			
			$data_tahap2=array('jangka_tahap2' =>$jangka_tahap2,
								'isi_tahap2'=>$isi_tahap2);
				if ($id_tahap2 == "") {
					$this->Tahap_model->insert_tahap2($data_tahap2);	
					redirect(site_url('tahap/home'));
				}else {
					$this->Tahap_model->update_tahap2($data_tahap2,$id_tahap2);
					redirect(site_url('tahap/home'));
				}
		}

		public function insert_aksi3()
		{
			$id_tahap3=$this->input->post('id_tahap');
			$jangka_tahap3=$this->input->post('jangka_tahap');
			$isi_tahap3=$this->input->post('isi_tahap');			
			$data_tahap3=array('jangka_tahap3' =>$jangka_tahap3,
								'isi_tahap3'=>$isi_tahap3);
				if ($id_tahap3 == "") {
					$this->Tahap_model->insert_tahap3($data_tahap3);	
					redirect(site_url('tahap/home'));
				}else {
					$this->Tahap_model->update_tahap3($data_tahap3,$id_tahap3);
					redirect(site_url('tahap/home'));
				}
		}

		public function insert_aksi4()
		{
			$id_tahap4=$this->input->post('id_tahap');
			$jangka_tahap4=$this->input->post('jangka_tahap');
			$isi_tahap4=$this->input->post('isi_tahap');			
			$data_tahap4=array('jangka_tahap4' =>$jangka_tahap4,
								'isi_tahap4'=>$isi_tahap4);
				if ($id_tahap4 == "") {
					$this->Tahap_model->insert_tahap4($data_tahap4);	
					redirect(site_url('tahap/home'));
				}else {
					$this->Tahap_model->update_tahap4($data_tahap4,$id_tahap4);
					redirect(site_url('tahap/home'));
				}
		}

		public function insert_aksi5()
		{
			$id_tahap5=$this->input->post('id_tahap');
			$jangka_tahap5=$this->input->post('jangka_tahap');
			$isi_tahap5=$this->input->post('isi_tahap');			
			$data_tahap5=array('jangka_tahap5' =>$jangka_tahap5,
								'isi_tahap5'=>$isi_tahap5);
				if ($id_tahap5 == "") {
					$this->Tahap_model->insert_tahap5($data_tahap5);	
					redirect(site_url('tahap/home'));
				}else {
					$this->Tahap_model->update_tahap5($data_tahap5,$id_tahap5);
					redirect(site_url('tahap/home'));
				}
		}

		public function insert_aksi6()
		{
			$id_tahap6=$this->input->post('id_tahap');
			$jangka_tahap6=$this->input->post('jangka_tahap');
			$isi_tahap6=$this->input->post('isi_tahap');			
			$data_tahap6=array('jangka_tahap6' =>$jangka_tahap6,
								'isi_tahap6'=>$isi_tahap6);
				if ($id_tahap6 == "") {
					$this->Tahap_model->insert_tahap6($data_tahap6);	
					redirect(site_url('tahap/home'));
				}else {
					$this->Tahap_model->update_tahap6($data_tahap6,$id_tahap6);
					redirect(site_url('tahap/home'));
				}
		}
	}
?>