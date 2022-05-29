<?php

class PotonganGaji extends CI_Controller{

	public function index()
	{
		$data['title'] = "Setting Potongan Gaji";
		$data['pot_gaji'] = $this->penggajianModel->get_data('potongan_gaji')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/potonganGaji',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambahData()
	{
		$data['title'] = "Tambah Potongan Gaji";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/formPotonganGaji',$data);
		$this->load->view('templates_admin/footer');
	}
}	

?>
