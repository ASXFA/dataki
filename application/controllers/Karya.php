<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Karya extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_karya');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'karya/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'karya/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'karya/index.html';
            $config['first_url'] = base_url() . 'karya/index.html';
        }

        if ($this->session->userdata('LEVEL')!="Mahasiswa") {
            $config['per_page'] = 10;
            $config['page_query_string'] = TRUE;
            $config['total_rows'] = $this->M_karya->total_rows($q);
            $karya = $this->M_karya->get_limit_data($config['per_page'], $start, $q);
            $this->load->model('M_bidang');
            $bidang = $this->M_bidang->get_all();
            $this->load->library('pagination');
            $this->pagination->initialize($config);
    
            $data = array(
                'karya_data' => $karya,
                'bidang' => $bidang,
                'q' => $q,
                'pagination' => $this->pagination->create_links(),
                'total_rows' => $config['total_rows'],
                'start' => $start,
            );
        }else{
            $this->load->model('M_bidang');
            $data['bidang'] = $this->M_bidang->get_all();
            $data['karya_data'] = $this->M_karya->get_by_no_user($this->session->userdata('NO_USER'));
        }

        $this->load->view('template/header');
        $this->load->view('karya/tb_data_list', $data);
        $this->load->view('template/footer');
    }

    public function read($id) 
    {
        $this->load->model('M_bidang');
        $this->load->model('M_jenis');
        $row = $this->M_karya->get_by_id($id);
        $bidang = $this->M_bidang->get_all();
        $jenis = $this->M_jenis->get_all();
        if ($row) {
            $data = array(
                'bidang' => $bidang,
                'jenis' => $jenis,
                'ID_DATA' => $row->ID_DATA,
                'NO_USER' => $row->NO_USER,
                'NAME' => $row->NAME,
                'JUDUL_DATA' => $row->JUDUL_DATA,
                'ABSTRAK_DATA' => $row->ABSTRAK_DATA,
                'BIDANG_DATA' => $row->BIDANG_DATA,
                'JENIS_DATA' => $row->JENIS_DATA,
                'TAHUN_DATA' => $row->TAHUN_DATA,
                'NAMA_BERKAS' => $row->NAMA_BERKAS,
            );
            $this->load->view('template/header');
            $this->load->view('karya/tb_data_read', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('karya'));
        }
    }

    public function create() 
    {
        $this->load->model('M_bidang');
        $this->load->model('M_jenis');
        $bidang = $this->M_bidang->get_all();
        $jenis = $this->M_jenis->get_all();
        $data = array(
            'button' => 'Create',
            'action' => site_url('karya/create_action'),
            'bidang' => $bidang,
            'jenis' => $jenis,
            'ID_DATA' => set_value('ID_DATA'),
            'NO_USER' => set_value('NO_USER'),
            'NAME' => set_value('NAME'),
            'JUDUL_DATA' => set_value('JUDUL_DATA'),
            'ABSTRAK_DATA' => set_value('ABSTRAK_DATA'),
            'BIDANG_DATA' => set_value('BIDANG_DATA'),
            'JENIS_DATA' => set_value('JENIS_DATA'),
            'TAHUN_DATA' => set_value('TAHUN_DATA'),
            'NAMA_BERKAS' => set_value('NAMA_BERKAS'),
	);
        $this->load->view('karya/tb_data_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
            'NO_USER' => $this->input->post('NO_USER',TRUE),
            'NAME' => $this->input->post('NAME',TRUE),
            'JUDUL_DATA' => $this->input->post('JUDUL_DATA',TRUE),
            'ABSTRAK_DATA' => $this->input->post('ABSTRAK_DATA',TRUE),
            'BIDANG_DATA' => $this->input->post('BIDANG_DATA',TRUE),
            'JENIS_DATA' => $this->input->post('JENIS_DATA',TRUE),
            'TAHUN_DATA' => $this->input->post('TAHUN_DATA',TRUE),
            'NAMA_BERKAS' => $this->input->post('NAMA_BERKAS',TRUE),
	    );

            $this->M_karya->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('karya'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_karya->get_by_id($id);
        $this->load->model('M_bidang');
        if ($row) {
            $data['row'] = $row;
            $this->load->model('M_bidang');
            $this->load->model('M_jenis');
            $data['getBidang'] = $this->M_bidang->get_all();
            $data['getJenis'] = $this->M_jenis->get_all();
            $data['bidang_data'] = $this->M_bidang->get_all_asc();
            $data['url'] = site_url('karya/update_action/');
            $this->load->view('template/header');
            $this->load->view('berkas/data_form', $data);
            $this->load->view('template/footer');
            // $this->load->view('karya/tb_data_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('karya'));
        }
    }
    
    public function update_action($id) 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID_DATA', TRUE));
        } else {
            $config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'pdf';
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('berkas'))
			{
                $data = array(
                    'NO_USER' => $this->input->post('NO_USER',TRUE),
                    'NAME' => $this->input->post('NAME',TRUE),
                    'JUDUL_DATA' => $this->input->post('JUDUL_DATA',TRUE),
                    'ABSTRAK_DATA' => $this->input->post('ABSTRAK_DATA',TRUE),
                    'BIDANG_DATA' => $this->input->post('BIDANG_DATA',TRUE),
                    'JENIS_DATA' => $this->input->post('JENIS_DATA',TRUE),
                    'TAHUN_DATA' => $this->input->post('TAHUN_DATA',TRUE),
                    'NAMA_BERKAS' => $this->input->post('berkas_old',TRUE)
                );
                $this->M_karya->update($id, $data);
                $this->session->set_flashdata('message', 'Update Record Success');
                redirect(site_url('karya'));
            }else{
                $data = array(
                    'NO_USER' => $this->input->post('NO_USER',TRUE),
                    'NAME' => $this->input->post('NAME',TRUE),
                    'JUDUL_DATA' => $this->input->post('JUDUL_DATA',TRUE),
                    'ABSTRAK_DATA' => $this->input->post('ABSTRAK_DATA',TRUE),
                    'BIDANG_DATA' => $this->input->post('BIDANG_DATA',TRUE),
                    'JENIS_DATA' => $this->input->post('JENIS_DATA',TRUE),
                    'TAHUN_DATA' => $this->input->post('TAHUN_DATA',TRUE),
                    'NAMA_BERKAS' => $this->input->post('berkas',TRUE)
                );

                $this->M_karya->update($id, $data);
                $this->session->set_flashdata('message', 'Update Record Success');
                redirect(site_url('karya'));
            }
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_karya->get_by_id($id);

        if ($row) {
            $this->M_karya->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('karya'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('karya'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('NO_USER', 'no user', 'trim|required');
	$this->form_validation->set_rules('NAME', 'name', 'trim|required');
	$this->form_validation->set_rules('JUDUL_DATA', 'judul data', 'trim|required');
	$this->form_validation->set_rules('ABSTRAK_DATA', 'abstrak data', 'trim|required');
    $this->form_validation->set_rules('BIDANG_DATA', 'bidang konsentrasi', 'trim|required');
    $this->form_validation->set_rules('JENIS_DATA', 'bidang', 'trim|required');
	$this->form_validation->set_rules('TAHUN_DATA', 'tahun data', 'trim|required');
	// $this->form_validation->set_rules('NAMA_BERKAS', 'nama berkas', 'trim|required');

	$this->form_validation->set_rules('ID_DATA', 'ID_DATA', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Karya.php */
/* Location: ./application/controllers/Karya.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-10-28 05:16:01 */
/* http://harviacode.com */