<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class M_mahasiswa extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		public function input($data)
		{
			$this->db->insert('tbl_mahasiswa', $data);
		}

		public function record_count()
		{
			$this->db->count_all('tbl_mahasiswa');
		}

		public function fetch_countries($limit, $start)
		{
			$this->db->limit($limit, $start);
			$query = $this->db->get("tbl_mahasiswa");

			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
			return false;
		}

		public function tampil_data()
		{
			$query = $this->db->query("select * from tbl_mahasiswa");
			return $query->result();
		}

		public function edit($data)
		{
			$this->db->update('tbl_mahasiswa', $data, array('mahasiswa_id' => $data['mahasiswa_id']));
		}

		public function delete($id)
		{
			$this->db->delete('tbl_mahasiswa', array('mahasiswa_id' => $id));
		}
	}
?>