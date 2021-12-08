<?php 
	/**
	 * 
	 */
	class User extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('User_model');
		}

		public function home()
		{
			$data_user = $this->User_model->select();
			$data['user']=$data_user;
			$this->load->view('admin/user',$data);
		}

		public function select()
		{
			return $this->db->get('user')->result();
		}

		public function register()
		{
		if ($this->input->post()) {
			$namesurname	=$this->input->post("username");
			$email			=$this->input->post("email");
			$password		=$this->input->post("password");
			$data_inputan 	= array('nama_user'=>$namesurname,
									'email_user'=>$email,
									'password_user'=>$password);
			$this->User_model->insert($data_inputan);
			redirect(site_url('welcome/login'));
			}else{
				$this->load->view("front/register");
			}

		}

		public function delete($id) 
		{
			$this->User_model->delete($id);
			redirect(site_url('user/home'));
		}

		public function update($id)
		{
			$user=$this->db->where('id_user',$id)->get('user')->row();
			$data['user']=$user;
			$this->load->view('admin/form_user',$data);

		}

		public function insert()
		{
			$this->load->view('admin/form_user');
		}
		public function insert_aksi()
		{
			$id_user=$this->input->post('id_user');
			$nama_user=$this->input->post('nama_user');
			$email_user=$this->input->post('email_user');		
			$password_user=$this->input->post('password_user');
			$ket_user=$this->input->post('ket_user');		
			$data_user=array('nama_user' =>$nama_user,
								'email_user'=>$email_user,
								'password_user'=>$password_user,
								'ket_user'=>$ket_user);
				if ($id_user == "") {
					$this->User_model->insert($data_user);	
					redirect(site_url('user/home'));
				}else {
					$this->User_model->update($data_user,$id_user);
					redirect(site_url('user/home'));
				}
		}

		public function cek_login()
		{
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$nama = $this->input->get('nama');
		$cek_login= $this->User_model->login($email,$password);
			if (empty($cek_login)) {
				redirect(site_url('welcome/login'));
			}else{
					$session = array(
          			'authenticated'=>true, // Buat session authenticated dengan value true
         			'email_user'=>$data_user->email_user,  // Buat session username
          			'password_user'=>$data_user->password_user // Buat session authenticated
        			);
        			$this->session->set_userdata($session);
					redirect(site_url('welcome/step1'));
			}
		}
	}
?>