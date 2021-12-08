<?php 
/**
 * 
 */
class Tahap_model extends CI_Model
{
		
		public function insert_tahap1($data)	
		{
			$this->db->insert('tahap1',$data);
		}

		public function select_tahap1()
		{
			return $this->db->get('tahap1')->result();
		}
		public function delete_tahap1($id)
		{
			$this->db->where('id_tahap1',$id);
			$this->db->delete('tahap1');
		}
		public function update_tahap1($data,$id)
		{
			$this->db->where('id_tahap1',$id);
			$this->db->update('tahap1',$data);
		}
		public function insert_tahap2($data)	
		{
			$this->db->insert('tahap2',$data);
		}

		public function select_tahap2()
		{
			return $this->db->get('tahap2')->result();
		}
		public function delete_tahap2($id)
		{
			$this->db->where('id_tahap2',$id);
			$this->db->delete('tahap2');
		}
		public function update_tahap2($data,$id)
		{
			$this->db->where('id_tahap2',$id);
			$this->db->update('tahap2',$data);
		}

		public function insert_tahap3($data)	
		{
			$this->db->insert('tahap3',$data);
		}

		public function select_tahap3()
		{
			return $this->db->get('tahap3')->result();
		}
		public function delete_tahap3($id)
		{
			$this->db->where('id_tahap3',$id);
			$this->db->delete('tahap3');
		}
		public function update_tahap3($data,$id)
		{
			$this->db->where('id_tahap3',$id);
			$this->db->update('tahap3',$data);
		}
		
		public function insert_tahap4($data)	
		{
			$this->db->insert('tahap4',$data);
		}

		public function select_tahap4()
		{
			return $this->db->get('tahap4')->result();
		}
		public function delete_tahap4($id)
		{
			$this->db->where('id_tahap4',$id);
			$this->db->delete('tahap4');
		}
		public function update_tahap4($data,$id)
		{
			$this->db->where('id_tahap4',$id);
			$this->db->update('tahap4',$data);
		}

		public function insert_tahap5($data)	
		{
			$this->db->insert('tahap5',$data);
		}

		public function select_tahap5()
		{
			return $this->db->get('tahap5')->result();
		}
		public function delete_tahap5($id)
		{
			$this->db->where('id_tahap5',$id);
			$this->db->delete('tahap5');
		}
		public function update_tahap5($data,$id)
		{
			$this->db->where('id_tahap5',$id);
			$this->db->update('tahap5',$data);
		}

		public function insert_tahap6($data)	
		{
			$this->db->insert('tahap6',$data);
		}

		public function select_tahap6()
		{
			return $this->db->get('tahap6')->result();
		}
		public function delete_tahap6($id)
		{
			$this->db->where('id_tahap6',$id);
			$this->db->delete('tahap6');
		}
		public function update_tahap6($data,$id)
		{
			$this->db->where('id_tahap6',$id);
			$this->db->update('tahap6',$data);
		}
}
 ?>
