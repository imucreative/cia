<?php
class Mod_tags extends CI_Model{
	
	public $table = "tbl_tags";
	
	function simpan(){
		$data	= array(
			'tags'	=> strtoupper($this->input->post('tags'))
		);
		$this->db->insert($this->table, $data);
	}
    
	function update(){
		$data	= array(
			'tags'	=> strtoupper($this->input->post('tags'))
		);
		$this->db->where('id_tags', $this->input->post('id_tags'));
		$this->db->update($this->table, $data);
	}
	
	function hapus($id_tags){
		$data	= array(
			'status_delete'	=> 1
		);
		$this->db->where('id_tags', $id_tags);
		$this->db->update($this->table, $data);
	}
	
	//==================================================================================================
	
	function select_all(){
		$this->db->where('status_delete', 0);
		$query		= $this->db->get($this->table);
		return $query;
		//return $this->db->get($this->table);
	}
	
	function get_tags_by_tags_id($tags_id){
		$this->db->where('status_delete', 0);
		$this->db->where('id_tags', $tags_id);
		$query	= $this->db->get($this->table);
		return $query;
		
	}
	
}