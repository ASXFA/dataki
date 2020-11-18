<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	function create()
	{
		$this->load->model('M_bidang');
        $this->load->model('M_jenis');
        $data['getBidang'] = $this->M_bidang->get_all();
        $data['getJenis'] = $this->M_jenis->get_all();
		$this->load->view('template/header');
		$this->load->view('berkas/data_form',$data);
		$this->load->view('template/footer');
	}

	function proses()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->create();
		}else{
			
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'pdf';
			$config['max_size']             = 10000;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('berkas'))
			{
				$data['error'] = array('error' => $this->upload->display_errors());
				$this->load->model('M_bidang');
				$this->load->model('M_jenis');
				$data['getBidang'] = $this->M_bidang->get_all();
				$data['getJenis'] = $this->M_jenis->get_all();
				$this->load->view('template/header');
				$this->load->view('berkas/data_form', $data);
				$this->load->view('template/footer');
			}
			else
			{
				$data['NO_USER'] = $this->input->post('NO_USER');
				$data['NAME'] = $this->input->post('NAME');
				$data['JUDUL_DATA'] = $this->input->post('JUDUL_DATA');
				$data['ABSTRAK_DATA'] = $this->input->post('ABSTRAK_DATA');
				$data['BIDANG_DATA'] = $this->input->post('BIDANG_DATA');
				$data['JENIS_DATA'] = $this->input->post('JENIS_DATA');
				$data['TAHUN_DATA'] = $this->input->post('TAHUN_DATA');
				// $data['ABSTRAK_DATA'] = $this->input->post('keterangan_berkas');
				$data['NAMA_BERKAS'] = $this->upload->data("file_name");
				// $data['ABSTRAK_DATA'] = $this->input->post('keterangan_berkas');
				// $data['TIPE_BERKAS'] = $this->upload->data('file_ext');
				// $data['UKURAN_BERKAS'] = $this->upload->data('file_size');
				// $this->M_karya->insert($data);
				$this->db->insert('tb_data',$data);
				redirect('upload');
			}
		}
	}

	public function index()
	{
		$data['berkas'] = $this->db->get('tb_data');
		$this->load->view('template/header');
		$this->load->view('berkas/data_list',$data);
		$this->load->view('template/footer');
	}


	function download($id)
	{
		$data = $this->db->get_where('tb_data',['ID_DATA'=>$id])->row();
		force_download('uploads/'.$data->NAMA_BERKAS,NULL);
	}

	public function _rules() 
    {
		$this->form_validation->set_rules('NO_USER', 'no user', 'trim|required');
		$this->form_validation->set_rules('NAME', 'name', 'trim|required');
		$this->form_validation->set_rules('JUDUL_DATA', 'judul data', 'trim|required');
		$this->form_validation->set_rules('ABSTRAK_DATA', 'abstrak data', 'trim|required');
		$this->form_validation->set_rules('BIDANG_DATA', 'bidang konsentrasi', 'trim|required');
		$this->form_validation->set_rules('jenis_data', 'bidang', 'trim|required');
		$this->form_validation->set_rules('TAHUN_DATA', 'tahun data', 'trim|required');
		$this->form_validation->set_rules('berkas', 'nama berkas', 'trim|required');

		$this->form_validation->set_rules('ID_DATA', 'ID_DATA', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}
