<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller
{
    function index()
	{
        // $this->load->model('M_karya');
        // $this->load->model('M_bidang');
        // $jumlahData = $this->M_karya->get_count();
        // $bidang = $this->M_bidang->get_all_asc();
        // $data['jumlah'] = json_encode($jumlahData);
        // $data['bidang'] = $bidang;
		// $this->load->view('template/header');
        $this->load->view('register');
        // $this->load->view('template/footer');
		
	}
}