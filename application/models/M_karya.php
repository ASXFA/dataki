<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_karya extends CI_Model
{

    public $table = 'tb_data';
    public $id = 'ID_DATA';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_count_management_data()
    {
        $this->db->select(" TAHUN_DATA, COUNT(IF(JENIS_DATA=1,1,NULL)) 'Ai', 
        COUNT(IF(JENIS_DATA=2,1,NULL)) 'Android', COUNT(IF(JENIS_DATA=3,1,NULL)) 
        'Codeigniter', COUNT(IF(JENIS_DATA=4,1,NULL)) 'Phpnative' ");
        $this->db->group_by('tb_data.TAHUN_DATA');
        return $this->db->get('tb_data')->result();
    }

    function get_count_jaringan()
    {
        $this->db->select(" TAHUN_DATA, COUNT(IF(JENIS_DATA=5,1,NULL)) 'Vmware', 
        COUNT(IF(JENIS_DATA=6,1,NULL)) 'Winbox', COUNT(IF(JENIS_DATA=7,1,NULL)) 
        'Mikrotik'");
        $this->db->group_by('tb_data.TAHUN_DATA');
        return $this->db->get('tb_data')->result();
    }

    function get_count_security()
    {
        $this->db->select(" TAHUN_DATA, COUNT(IF(JENIS_DATA=8,1,NULL)) 'Keamanan jaringan', 
        COUNT(IF(JENIS_DATA=9,1,NULL)) 'Keamanan website'");
        $this->db->group_by('tb_data.TAHUN_DATA');
        return $this->db->get('tb_data')->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function get_by_no_user($no_user){
        $this->db->where('NO_USER', $no_user);
        return $this->db->get($this->table)->result();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('ID_DATA', $q);
	$this->db->or_like('NO_USER', $q);
	$this->db->or_like('NAME', $q);
	$this->db->or_like('JUDUL_DATA', $q);
	$this->db->or_like('ABSTRAK_DATA', $q);
    $this->db->or_like('BIDANG_DATA', $q);
    $this->db->or_like('JENIS_DATA', $q);
	$this->db->or_like('TAHUN_DATA', $q);
	$this->db->or_like('NAMA_BERKAS', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('ID_DATA', $q);
	$this->db->or_like('NO_USER', $q);
	$this->db->or_like('NAME', $q);
	$this->db->or_like('JUDUL_DATA', $q);
	$this->db->or_like('ABSTRAK_DATA', $q);
    $this->db->or_like('BIDANG_DATA', $q);
    $this->db->or_like('JENIS_DATA', $q);
	$this->db->or_like('TAHUN_DATA', $q);
	$this->db->or_like('NAMA_BERKAS', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    function get_data_karya($q)
    {
        $this->db->where('BIDANG_DATA',$q);
        return $this->db->get('tb_data')->result();
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

/* End of file M_karya.php */
/* Location: ./application/models/M_karya.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-10-28 05:16:01 */
/* http://harviacode.com */