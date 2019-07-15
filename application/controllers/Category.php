<?php
class Category extends CI_Controller{
    
	function __construct() {
        parent::__construct();
        $this->load->model('Mod_kategori');
		$this->load->model('Mod_product');
    }
    
    function show_by_kategori(){
        $seo				=  $this->uri->segment(2);
        //$category			= $this->db->get_where('tabel_kategori', array('nama_kategori_seo'=>$seo, 'status_delete'=>'0'))->row_array();
		$category			= $this->Mod_kategori->get_kategori_by_seo($seo)->row_array();
        $kategoriID			= $category['kategori_id'];
		$nama_kategori		= $category['nama_kategori'];
        
        //$data['product']	= $this->db->get_where('tabel_product', array('kategori_id'=>$kategoriID, 'status_delete'=>'0', 'publish'=>'1'));
		$data['product']	= $this->Mod_product->get_product_by_kategori_id($kategoriID)->result();
		$data['category']	= $nama_kategori;
        $this->template->load('template', 'showByKategori', $data);
    }
}