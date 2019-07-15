<?php
class Mod_slider extends CI_Model{
	
	public $table = "tbl_slider";
	
	function slider_all(){
		$this->db->where('status_delete', 0);
		$query	= $this->db->get($this->table);
		return $query;
	}
	
	function simpan($image){
		$data	= array(
			'nama_slider'		=> strtoupper($this->input->post('nama_slider')),
			'nama_product_seo'	=> $this->input->post('nama_product_seo'),
			'keterangan'		=> $this->input->post('keterangan'),
			'image'				=> $image
		);
		$this->db->insert($this->table, $data);
	}
    
	function update($image){
		if($image == null){
			$data	= array(
				'nama_slider'		=> strtoupper($this->input->post('nama_slider')),
				'nama_product_seo'	=> $this->input->post('nama_product_seo'),
				'keterangan'		=> $this->input->post('keterangan')
			);
		}else{
			$data	= array(
				'nama_slider'		=> strtoupper($this->input->post('nama_slider')),
				'nama_product_seo'	=> $this->input->post('nama_product_seo'),
				'keterangan'		=> $this->input->post('keterangan'),
				'image'				=> $image
			);
		}
		$this->db->where('slider_id', $this->input->post('slider_id'));
		$this->db->update($this->table, $data);
	}
	
	function hapus($slider_id){
		$data	= array(
			'status_delete'	=> 1
		);
		$this->db->where('slider_id', $slider_id);
		$this->db->update($this->table, $data);
	}
	
	function edit_slider_by_id($id){
		$this->db->where('slider_id', $id);
		$query	= $this->db->get($this->table);
		return $query;
	}
	
	function publish($id, $status){
		if($status=='1'){
			$data = array(
				'publish'    => "0"	//jika publish, maka ubah jadi 0/draft
			);
		}else{
			$data = array(
				'publish'    => "1"	//jika draft, maka ubah jadi 1/publish
			);
		}
		
		$this->db->where('slider_id', $id);
		$this->db->update($this->table, $data);
	}
	
	//==================================================================================================
	
	
}