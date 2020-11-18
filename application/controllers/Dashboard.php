<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function index()
	{
        $this->load->model('M_karya');
        $this->load->model('M_bidang');
        $this->load->model('M_jenis');
        $jumlahMData = $this->M_karya->get_count_management_data();
        $jumlahJaringan = $this->M_karya->get_count_jaringan();
        $jumlahSecurity = $this->M_karya->get_count_security();
        $bidang = $this->M_bidang->get_all_asc();
        $data['jumlahData'] = json_encode($jumlahMData);
        $data['jumlahJaringan'] = json_encode($jumlahJaringan);
        $data['jumlahSecurity'] = json_encode($jumlahSecurity);
        $data['bidang'] = $bidang;
        $data['jenis'] = $this->M_jenis->get_all_asc();
		$this->load->view('template/header');
        $this->load->view('dashboard',$data);
        $this->load->view('template/footer');
		
	}
}