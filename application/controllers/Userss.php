<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Userss extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_users');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'users/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'users/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'users/index.html';
            $config['first_url'] = base_url() . 'users/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_users->total_rows($q);
        $users = $this->M_users->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'users_data' => $users,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('template/header');
        $this->load->view('users/tb_userss_list', $data);
        $this->load->view('template/footer');
    }

    public function read($id) 
    {
        $row = $this->M_users->get_by_id($id);
        if ($row) {
            $data = array(
		'ID_USER' => $row->ID_USER,
		'NO_USER' => $row->NO_USER,
		'NAME' => $row->NAME,
		'EMAIL' => $row->EMAIL,
		'NO_TELP' => $row->NO_TELP,
		'LEVEL' => $row->LEVEL,
		'PASSWORD' => $row->PASSWORD,
	    );
            $this->load->view('users/tb_users_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('users/create_action'),
	    'ID_USER' => set_value('ID_USER'),
	    'NO_USER' => set_value('NO_USER'),
	    'NAME' => set_value('NAME'),
	    'EMAIL' => set_value('EMAIL'),
	    'NO_TELP' => set_value('NO_TELP'),
	    'LEVEL' => set_value('LEVEL'),
	    'PASSWORD' => set_value('PASSWORD'),
    );
        $this->load->view('template/header');
        $this->load->view('users/tb_users_form', $data);
        $this->load->view('template/footer');
    
        // $this->load->view('users/tb_users_form', $data);
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
		'EMAIL' => $this->input->post('EMAIL',TRUE),
		'NO_TELP' => $this->input->post('NO_TELP',TRUE),
		'LEVEL' => $this->input->post('LEVEL',TRUE),
		'PASSWORD' => $this->input->post('PASSWORD',TRUE),
	    );

            $this->M_users->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('users'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_users->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('users/update_action'),
		'ID_USER' => set_value('ID_USER', $row->ID_USER),
		'NO_USER' => set_value('NO_USER', $row->NO_USER),
		'NAME' => set_value('NAME', $row->NAME),
		'EMAIL' => set_value('EMAIL', $row->EMAIL),
		'NO_TELP' => set_value('NO_TELP', $row->NO_TELP),
		'LEVEL' => set_value('LEVEL', $row->LEVEL),
		'PASSWORD' => set_value('PASSWORD', $row->PASSWORD),
	    );
            $this->load->view('users/tb_users_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID_USER', TRUE));
        } else {
            $data = array(
		'NO_USER' => $this->input->post('NO_USER',TRUE),
		'NAME' => $this->input->post('NAME',TRUE),
		'EMAIL' => $this->input->post('EMAIL',TRUE),
		'NO_TELP' => $this->input->post('NO_TELP',TRUE),
		'LEVEL' => $this->input->post('LEVEL',TRUE),
		'PASSWORD' => $this->input->post('PASSWORD',TRUE),
	    );

            $this->M_users->update($this->input->post('ID_USER', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('users'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_users->get_by_id($id);

        if ($row) {
            $this->M_users->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('users'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('NO_USER', 'no user', 'trim|required');
	$this->form_validation->set_rules('NAME', 'name', 'trim|required');
	$this->form_validation->set_rules('EMAIL', 'email', 'trim|required');
	$this->form_validation->set_rules('NO_TELP', 'no telp', 'trim|required');
	$this->form_validation->set_rules('LEVEL', 'level', 'trim|required');
	$this->form_validation->set_rules('PASSWORD', 'password', 'trim|required');

	$this->form_validation->set_rules('ID_USER', 'ID_USER', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-10-28 05:26:07 */
/* http://harviacode.com */