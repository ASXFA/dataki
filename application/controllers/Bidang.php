<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bidang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_bidang');
        $this->load->model('M_karya');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'bidang/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'bidang/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'bidang/index.html';
            $config['first_url'] = base_url() . 'bidang/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_bidang->total_rows($q);
        $bidang = $this->M_bidang->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'bidang_data' => $bidang,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('template/header');
        $this->load->view('bidang/tb_bidang_list', $data);
        $this->load->view('template/footer');
    }

    public function get_bidang()
    {
        $q = $this->uri->segment(3);
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'bidang/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'bidang/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'bidang/index.html';
            $config['first_url'] = base_url() . 'bidang/index.html';
        }

        // $config['per_page'] = 10;
        // $config['page_query_string'] = TRUE;
        // $config['total_rows'] = $this->M_bidang->total_rows($q);
        // $bidang = $this->M_karya->get_limit_data($config['per_page'], $start, $q);

        // $this->load->library('pagination');
        // $this->pagination->initialize($config);

        // $data = array(
        //     'karya_data' => $bidang,
        //     'q' => $q,
        //     'pagination' => $this->pagination->create_links(),
        //     'total_rows' => $config['total_rows'],
        //     'start' => $start,
        // );
        $this->load->model('M_jenis');
        $this->load->model('M_bidang');
        $decode = urldecode($q);
        $cek = $this->M_jenis->getByNama($decode);
        $this->db->where('JENIS_DATA',$cek->ID_JENIS);
        $data['berkas'] = $this->db->get('tb_data');
        $data['bidang'] = $this->M_bidang->get_all();
        $this->load->view('template/header');
        $this->load->view('berkas/data_list', $data);
        $this->load->view('template/footer');
    }

    public function read($id) 
    {
        $row = $this->M_bidang->get_by_id($id);
        if ($row) {
            $data = array(
		'ID_BIDANG' => $row->ID_BIDANG,
		'BIDANG_DATA' => $row->BIDANG_DATA,
		'KET_BIDANG' => $row->KET_BIDANG,
        );
        $this->load->view('template/header');
        $this->load->view('bidang/tb_bidang_read', $data);
        $this->load->view('template/footer');
            // $this->load->view('bidang/tb_bidang_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bidang'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('bidang/create_action'),
	    'ID_BIDANG' => set_value('ID_BIDANG'),
	    'BIDANG_DATA' => set_value('BIDANG_DATA'),
	    'KET_BIDANG' => set_value('KET_BIDANG'),
    );
    $this->load->view('template/header');
    $this->load->view('bidang/tb_bidang_form', $data);
    $this->load->view('template/footer');
        // $this->load->view('bidang/tb_bidang_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'BIDANG_DATA' => $this->input->post('BIDANG_DATA',TRUE),
		'KET_BIDANG' => $this->input->post('KET_BIDANG',TRUE),
	    );

            $this->M_bidang->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('bidang'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_bidang->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('bidang/update_action'),
                'ID_BIDANG' => set_value('ID_BIDANG', $row->ID_BIDANG),
                'BIDANG_DATA' => set_value('BIDANG_DATA', $row->BIDANG_DATA),
                'KET_BIDANG' => set_value('KET_BIDANG', $row->KET_BIDANG),
	    );
        $this->load->view('template/header');
        $this->load->view('bidang/tb_bidang_form', $data);
        $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bidang'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID_BIDANG', TRUE));
        } else {
            $data = array(
		'BIDANG_DATA' => $this->input->post('BIDANG_DATA',TRUE),
		'KET_BIDANG' => $this->input->post('KET_BIDANG',TRUE),
	    );

            $this->M_bidang->update($this->input->post('ID_BIDANG', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('bidang'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_bidang->get_by_id($id);

        if ($row) {
            $this->M_bidang->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('bidang'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bidang'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('BIDANG_DATA', 'bidang data', 'trim|required');
	$this->form_validation->set_rules('KET_BIDANG', 'ket bidang', 'trim|required');

	$this->form_validation->set_rules('ID_BIDANG', 'ID_BIDANG', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Bidang.php */
/* Location: ./application/controllers/Bidang.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-10-28 05:27:02 */
/* http://harviacode.com */