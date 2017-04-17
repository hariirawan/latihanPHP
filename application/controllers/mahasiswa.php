<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
    $data = $this->modelmhs->getMahasiswa();
    $tampil_data = array('data1' => $data);
		$this->load->view('index',$tampil_data);
	}
	public function form_add()
	{
		$this->load->view('form_add');
	}
	public function insert_data($nim)
	{
		$nim = $_POST["nim"];
		$nama = $_POST["nama"];
		$semester = $_POST["semester"];
		$alamat = $_POST["alamat"];
		$jk = $_POST["jk"];
		$no_hp = $_POST["no_hp"];
		$inData=array(
			'nim'=>$nim,
			'nama'=>$nama,
			'semester'=>$semester,
			'alamat'=>$alamat,
			'jk'=>$jk,
			'no_hp'=>$no_hp,
		);
		$data = $this->modelmhs->insertData('mahasiswa',$inData);
		if ($data>0) {
			$this->session->set_flashdata('pesan',
																		'<div class="alert alert-success">
																		Data Gagal Di Inputkan
																		</div>'
																	);
			redirect('mahasiswa/index');
		}else {
			$this->session->set_flashdata('pesan',
																		'<div class="alert alert-info">
																		Data Gagal Di Inputkan
																		</div>'
																	);
			redirect('mahasiswa/index');
		}
	}
	public function edit_data($nim)
	{
		$data = $this->modelmhs->getMahasiswa('where nim = '.$nim)->result_array();
		$data1=array(
			'nim'=>$data[0]['nim'],
			'nama'=>$data[0]['nama'],
			'semester'=>$data[0]['semester'],
			'alamat'=>$data[0]['alamat'],
			'jk'=>$data[0]['jk'],
			'no_hp'=>$data[0]['no_hp']
		);
		$this->load->view('form_edit',$data1);
	}
	public function update_data()
	{
		$nim = $_POST["nim"];
		$nama = $_POST["nama"];
		$semester = $_POST["semester"];
		$alamat = $_POST["alamat"];
		$jk = $_POST["jk"];
		$no_hp = $_POST["no_hp"];
		$data = array(
			'nim'=>$nim,
			'nama'=>$nama,
			'semester'=>$semester,
			'alamat'=>$alamat,
			'jk'=>$jk,
			'no_hp'=>$no_hp,
		);
		$where = array('nim'=>$nim);
		$data = $this->modelmhs->updateData('mahasiswa',$data,$where);
		if ($data>=1) {
			$this->session->set_flashdata('pesan',
																		'<div class="alert alert-success">
																		Data Berhasil Di Update
																		</div>'
																	);
			redirect('mahasiswa/index');
		}else {
				$this->session->set_flashdata('pesan',
																			'<div class="alert alert-info">
																			Data Gagal di Update
																			</div>'
																		);
				redirect('mahasiswa/index');
		}
	}
	public function delete_data($nim)
	{
		$where=array('nim'=>$nim);
		$data = $this->modelmhs->deleteData('mahasiswa', $where);
		if ($data>=1) {
			$this->session->set_flashdata('pesan',
																		'<div class="alert alert-danger">
																		Data Berhasil di Hapus
																		</div>'
																	);
			redirect('mahasiswa/index');
		}else {
			$this->session->set_flashdata('pesan',
																		'<div class="alert alert-danger">
																		Data Gagal di Hapus
																		</div>'
																	);
			redirect('mahasiswa/index');
		}
	}
}
