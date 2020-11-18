<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_users extends CI_Model
{

    public $table = 'tb_users';
    public $id = 'ID_USER';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function login($username,$password) {
		$this->db->where("NO_USER",$username);
		$this->db->where("PASSWORD",$password);
		return $this->db->get("tb_users")->row();
	}
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('ID_USER', $q);
	$this->db->or_like('NO_USER', $q);
	$this->db->or_like('NAME', $q);
	$this->db->or_like('EMAIL', $q);
	$this->db->or_like('NO_TELP', $q);
	$this->db->or_like('LEVEL', $q);
	$this->db->or_like('PASSWORD', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('ID_USER', $q);
	$this->db->or_like('NO_USER', $q);
	$this->db->or_like('NAME', $q);
	$this->db->or_like('EMAIL', $q);
	$this->db->or_like('NO_TELP', $q);
	$this->db->or_like('LEVEL', $q);
	$this->db->or_like('PASSWORD', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file M_users.php */
/* Location: ./application/models/M_users.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-10-28 05:26:07 */
/* http://harviacode.com */