<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model("M_mahasiswa");
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['mahasiswa']=$this->M_mahasiswa->tampil_data();
		$this->load->view("mahasiswa", $data);
	}

	public function input()
	{
		$data['mahasiswa_id']="";
		$data['mahasiswa_nama']=$this->input->post('mahasiswa_nama');
		$data['mahasiswa_nim']=$this->input->post('mahasiswa_nim');
		$data['mahasiswa_alamat']=$this->input->post('mahasiswa_alamat');
		$data['mahasiswa_no_hp']=$this->input->post('mahasiswa_no_hp');
		$this->M_mahasiswa->input($data);
		redirect('mahasiswa');
	}

	public function edit()
	{
		$data['mahasiswa_id']=$this->input->post('mahasiswa_id');
		$data['mahasiswa_nama']=$this->input->post('mahasiswa_nama');
		$data['mahasiswa_nim']=$this->input->post('mahasiswa_nim');
		$data['mahasiswa_alamat']=$this->input->post('mahasiswa_alamat');
		$data['mahasiswa_no_hp']=$this->input->post('mahasiswa_no_hp');
		$this->M_mahasiswa->edit($data);
		redirect('mahasiswa');
	}

	public function delete()
	{
		if($this->input->post('mahasiswa_id')!="")
		{
			$this->M_mahasiswa->delete($this->input->post('mahasiswa_id'));
		}
		redirect('mahasiswa');
	}
}
?>