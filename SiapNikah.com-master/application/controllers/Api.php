<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

/**
 * 
 */
class Api extends REST_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();

		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Methods: *");
	}
	function user_get($id_user=""){
		if ($id_user == ''){
			$user =$this->db->get('user')->result();
		} else {
			$this->db->where('id_user', $id_user);
			$user = $this->db->get('user')->result();
		}
		$this->response($user,200);
	}
	function user_post(){
		$data = array(
			'id_user' => $this->post('id_user'),
			'nama_user' => $this->post('nama_user'),
			'email_user' => $this->post('email_user'),
			'password_user' => $this->post('password_user'),
			'ket_user' => $this->post('ket_user'));
		$insert = $this->db->insert('user',$data);
		if ($insert){
			$this->response($data,200);
		}else{
			$this->response(array('status' => 'fail',502));
		}
	}
	function user_put(){
		$id_user = $this->put('id_user');
		$data = array( 
			'id_user' => $this->put('id_user'),
			'nama_user' => $this->put('nama_user'),
			'email_user' => $this->put('email_user'),
			'password_user' => $this->put('password_user'),
			'ket_user' => $this->put('ket_user'));
		$this->db->where('id_user',$id_user);
		$update = $this->db->update('user', $data);
		if ($update){
			$this->response($data,200);
		}else{
			$this->response(array('status' => 'fail' , 502));
		}	
	}

	function user_delete(){
		$id_user = $this->delete('id_user');
		$this->db->where('id_user',$id_user);
		$delete = $this->db->delete('user');
		if ($delete){
			$this->response(array('status'=> 'success',201));
		}else{
			$this->response(array('status'=> 'fail',502));
		}
	}


	/** Admin Function **/ 

	function admin_get($id_admin=""){
		if ($id_admin == ''){
			$admin =$this->db->get('admin')->result();
		} else {
			$this->db->where('id_admin', $id_admin);
			$admin = $this->db->get('admin')->result();
		}
		$this->response($admin,200);
	}
	function admin_post(){
		$data = array(
			'id_admin' => $this->post('id_admin'),
			'nama_admin' => $this->post('nama_admin'),
			'email_admin' => $this->post('email_admin'),
			'password_admin' => $this->post('password_admin'));
			
		$insert = $this->db->insert('admin',$data);
		if ($insert){
			$this->response($data,200);
		}else{
			$this->response(array('status' => 'fail',502));
		}
	}
	function admin_put(){
		$id_admin = $this->put('id_admin');
		$data = array( 
			'id_admin' => $this->put('id_admin'),
			'nama_admin' => $this->put('nama_admin'),
			'email_admin' => $this->put('email_admin'),
			'password_admin' => $this->put('password_admin'));
		$this->db->where('id_admin',$id_admin);
		$update = $this->db->update('admin', $data);
		if ($update){
			$this->response($data,200);
		}else{
			$this->response(array('status' => 'fail' , 502));
		}	
	}

	function admin_delete(){
		$id_admin = $this->delete('id_admin');
		$this->db->where('id_admin',$id_admin);
		$delete = $this->db->delete('admin');
		if ($delete){
			$this->response(array('status'=> 'success',201));
		}else{
			$this->response(array('status'=> 'fail',502));
		}
	} 
	
}
?>