<?php
class Mod_kategori extends Ci_Model{
    
	public $table	= 'tbl_kategori';
	
    //==================================================================================================
	
	function simpan(){
		$data	= array(
			//'parent'            =>  $this->input->post('parent'),
			//'link'              =>  $this->input->post('link'),
			'nama_kategori'     =>  strtoupper($this->input->post('nama_kategori')),
			'nama_kategori_seo' =>  seo_title($this->input->post('nama_kategori'))
		);
		
		$this->db->insert($this->table, $data);
	}
    
	function update(){
		$data	= array(
			//'parent'            =>  $this->input->post('parent'),
			//'link'              =>  $this->input->post('link'),
			'nama_kategori'     =>  strtoupper($this->input->post('nama_kategori')),
			'nama_kategori_seo' =>  seo_title($this->input->post('nama_kategori'))
		);
		$this->db->where('kategori_id', $this->input->post('kategori_id'));
		$this->db->update($this->table, $data);
	}
	
	function hapus($kategori_id){
		$data	= array(
			'status_delete'	=> 1
		);
		$this->db->where('kategori_id', $kategori_id);
		$this->db->update($this->table, $data);
	}
	
	//==================================================================================================
	
	function select_all(){
		$this->db->where('status_delete', 0);
		$query		= $this->db->get($this->table);
		return $query;
        //return $this->db->get($this->table);
    }
    
    function select_parent(){
		$this->db->where('parent', 0);
		$query	= $this->db->get($this->table);
		return $query;
        //return $this->db->get_where($this->table, array('parent'=>0));
    }
	
	function get_kategori_by_seo($seo){
		$this->db->where('status_delete', 0);
		$this->db->where('nama_kategori_seo', $seo);
		$query	= $this->db->get($this->table);
		return $query;
		//return $this->db->get_where('tabel_kategori',array('parent'=>0));
	}
	
	function get_kategori_by_kategori_id($kategori_id){
		$this->db->where('status_delete', 0);
		$this->db->where('kategori_id', $kategori_id);
		$query	= $this->db->get($this->table);
		return $query;
		
	}
}