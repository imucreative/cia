<?php
class product extends CI_Controller{

	function __construct() {
        parent::__construct();
        $this->load->model('Mod_product');
		$this->load->model('Mod_kategori');
    }
	
	function detail(){
		$seo	= $this->uri->segment(2);
		//$data['product']			= $this->db->get_where('tabel_product', array('nama_product_seo' => $this->uri->segment(2), 'status_delete'=>'0', 'publish'=>'1'))->row_array();
		$data['product']			= $this->Mod_product->get_product_by_seo($seo)->row_array();
		$data['category']			= $this->Mod_kategori->get_kategori_by_kategori_id($data['product']['kategori_id'])->row_array();
		//$data['categori']			= $this->db->get_where('tabel_kategori', array('kategori_id' => $data['product']['kategori_id'], 'status_delete'=>'0'))->row_array();
		$data['tags']				= $this->Mod_product->get_product_tags_by_product_id($data['product']['product_id'])->result_array();
		$data['product_img']		= $this->Mod_product->get_product_image_by_product_id($data['product']['product_id'])->result_array();
		$data['product_sama']		= $this->Mod_product->get_product_sama_by_kategori_id($data['product']['kategori_id'], $data['product']['product_id'])->result_array();
		//foreach($data['product_sama'] as $prodSam){
			//$data['product_sama_img']	= $this->Mod_product->getProductImage($prodSam['product_id']);
		//}
        $this->template->load('template', 'detail_product', $data);
    }
	
	
	/*
	function search(){
		$keyWord			= $_POST['keyword'];
		$sql				= "SELECT * FROM tabel_product WHERE nama_product LIKE '%$keyWord%'";
		$data['product']	= $this->db->query($sql);
		$this->template->load('template','hasilPencarian', $data);
	}
	*/
}