<?php 
/**
 * 
 */
class User_model extends CI_Model
{
		public function login($email,$password)
		{
			return $this->db->query("Select * from user where
								email_user ='".$email."'
								and password_user='".$password."'")->row();
		}
		public function insert($data)	
		{
			$this->db->insert('user',$data);
		}

		public function select()
		{
			return $this->db->get('user')->result();
		}
		public function delete($id)
		{
			$this->db->where('id_user',$id);
			$this->db->delete('user');
		}
		public function update($data,$id)
		{
			$this->db->where('id_user',$id);
			$this->db->update('user',$data);
		}

}
 ?>
