<?php
class Mod_network extends CI_Model{
	
	public $table = "tbl_network";
	
	function simpan(){
		$data	= array(
			'net_nama'	=> strtoupper($this->input->post('net_nama')),
			'net_alamat'	=> strtoupper($this->input->post('net_alamat')),
			'net_phone'	=> $this->input->post('net_phone'),
			'net_fax'	=> $this->input->post('net_fax')
		);
		$this->db->insert($this->table, $data);
	}
    
	function update(){
		$data	= array(
			'net_nama'	=> strtoupper($this->input->post('net_nama')),
			'net_alamat'	=> strtoupper($this->input->post('net_alamat')),
			'net_phone'	=> $this->input->post('net_phone'),
			'net_fax'	=> $this->input->post('net_fax')
		);
		$this->db->where('net_id', $this->input->post('net_id'));
		$this->db->update($this->table, $data);
	}
	
	function hapus($net_id){
		$data	= array(
			'status_delete'	=> 1
		);
		$this->db->where('net_id', $net_id);
		$this->db->update($this->table, $data);
	}
	
	//==================================================================================================
	
	function select_all(){
		$this->db->where('status_delete', 0);
		$query		= $this->db->get($this->table);
		return $query;
	}
	
	function get_distributor_by_id($net_id){
		$this->db->where('status_delete', 0);
		$this->db->where('net_id', $net_id);
		$query	= $this->db->get($this->table);
		return $query;
		
	}
	
}