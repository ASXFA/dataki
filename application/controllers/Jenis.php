<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jenis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_jenis');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'jenis/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'jenis/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'jenis/index.html';
            $config['first_url'] = base_url() . 'jenis/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_jenis->total_rows($q);
        $jenis = $this->M_jenis->get_limit_data($config['per_page'], $start, $q);
        $this->load->model('M_bidang');
        $bidang = $this->M_bidang->get_all();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'jenis_data' => $jenis,
            'bidang' => $bidang,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('template/header');
        $this->load->view('jenis/tb_jenis_list', $data);
        $this->load->view('template/footer');
    }

    public function getJenis()
    {
        $id_bidang = $this->input->post('id_bidang');
        $data = $this->M_jenis->getByBidang($id_bidang)->result();
        echo json_encode($data);
    }

    public function read($id) 
    {
        $this->load->model('M_bidang');
        $bidang = $this->M_bidang->get_all();
        $row = $this->M_jenis->get_by_id($id);
        if ($row) {
            $data = array(
                'bidang' => $bidang,
		'ID_JENIS' => $row->ID_JENIS,
		'BIDANG_DATA' => $row->BIDANG_DATA,
		'JENIS_DATA' => $row->JENIS_DATA,
		'KET_JENIS' => $row->KET_JENIS,
        );
            $this->load->view('template/header');
            $this->load->view('jenis/tb_jenis_read', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jenis'));
        }
    }

    public function create() 
    {
        $this->load->model('M_bidang');
        $bidang = $this->M_bidang->get_all();
        $data = array(
            'button' => 'Create',
            'action' => site_url('jenis/create_action'),
            'bidang' => $bidang,
            'ID_JENIS' => set_value('ID_JENIS'),
            'BIDANG_DATA' => set_value('BIDANG_DATA'),
            'JENIS_DATA' => set_value('JENIS_DATA'),
            'KET_JENIS' => set_value('KET_JENIS'),
        );
        $this->load->view('template/header');
        $this->load->view('jenis/tb_jenis_form', $data);
        $this->load->view('template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'BIDANG_DATA' => $this->input->post('BIDANG_DATA',TRUE),
		'JENIS_DATA' => $this->input->post('JENIS_DATA',TRUE),
		'KET_JENIS' => $this->input->post('KET_JENIS',TRUE),
	    );

            $this->M_jenis->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jenis'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_jenis->get_by_id($id);
        $this->load->model('M_bidang');
        $bidang = $this->M_bidang->get_all();

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jenis/update_action'),
                'bidang' => $bidang,
                'ID_JENIS' => set_value('ID_JENIS', $row->ID_JENIS),
                'BIDANG_DATA' => set_value('BIDANG_DATA', $row->BIDANG_DATA),
                'JENIS_DATA' => set_value('JENIS_DATA', $row->JENIS_DATA),
                'KET_JENIS' => set_value('KET_JENIS', $row->KET_JENIS),
            );
            $this->load->view('template/header');
            $this->load->view('jenis/tb_jenis_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jenis'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID_JENIS', TRUE));
        } else {
            $data = array(
		'BIDANG_DATA' => $this->input->post('BIDANG_DATA',TRUE),
		'JENIS_DATA' => $this->input->post('JENIS_DATA',TRUE),
		'KET_JENIS' => $this->input->post('KET_JENIS',TRUE),
	    );

            $this->M_jenis->update($this->input->post('ID_JENIS', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jenis'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_jenis->get_by_id($id);

        if ($row) {
            $this->M_jenis->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jenis'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jenis'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('BIDANG_DATA', 'bidang data', 'trim|required');
	$this->form_validation->set_rules('JENIS_DATA', 'jenis data', 'trim|required');
	$this->form_validation->set_rules('KET_JENIS', 'ket jenis', 'trim|required');

	$this->form_validation->set_rules('ID_JENIS', 'ID_JENIS', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jenis.php */
/* Location: ./application/controllers/Jenis.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-11-12 05:41:38 */
/* http://harviacode.com */