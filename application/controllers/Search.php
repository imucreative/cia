<?php
class search extends CI_Controller{
	
	function __construct() {
        parent::__construct();
        $this->load->model('Mod_product');
		$this->load->model('Mod_kategori');
		$this->load->library('pagination');
    }
		
	function index(){
		/*
		$dari	= $this->uri->segment('3');
		$sampai	= 5;
		$like	= '';
		
		$jumlah	= $this->Mod_product->jumlah_data_search();
 
		
		$config = array();
		$config['base_url']			= base_url().'search/index/';
		$config['total_rows']		= $jumlah;
		$config['per_page']			= $sampai;
		$config['num_links']		= $jumlah;
		// <button class='btn btn-primary hidden-xs'>
		// </button>
		$config['num_tag_open']		= "<li>";
		$config['num_tag_close']	= "</li>";
		$config['next_tag_open']	= "<li>";
		$config['next_tagl_close']	= "</li>";
		$config['prev_tag_open']	= "<li>";
		$config['prev_tagl_close']	= "</li>";
		$config['first_tag_open']	= "<li>";
		$config['first_tagl_close']	= "</li>";
		$config['last_tag_open']	= "<li>";
		$config['last_tagl_close']	= "</li>";
		$config['cur_tag_open']		= "&nbsp;<a class='current'>";
		$config['cur_tag_close']	= "</a>";
		$config['next_link']		= "Next";
		$config['prev_link']		= "Previous";

		$this->pagination->initialize($config);
		
		$data						= array();
		$data['product']			= $this->Mod_product->search($sampai, $dari, $like);
		$data['keyword']			= $search;
		$data['jumlah']				= $jumlah;
 
		//Membuat link pagination
		$str_links					= $this->pagination->create_links();
		$data["links"]				= explode('&nbsp;',$str_links );
		$data['title']				= 'PT. Cakra Indonesia Autopart | http://cakraautopart.com/';

		$this->template->load('template', 'hasilPencarian', $data);
		*/
		
		$keyword			= $_POST['key'];
		$data['keyword']	= $keyword;
		$data['product']	= $this->Mod_product->search($keyword)->result_array();
		$data['jumlah']		= $this->Mod_product->jumlah_data_search($keyword)->num_rows();
		$data['category']	= $this->Mod_kategori->select_all()->result_array();
		$this->template->load('template', 'hasilPencarian', $data);
		
	}
	
	/*
	public function cari(){
		$search		= (trim($this->input->post('key', true)))? trim($this->input->post('key', true)) : '';
		$search		= ($this->uri->segment(3)) ? $this->uri->segment(3) : $search;
		
		$dari		= $this->uri->segment('4');
		$sampai		= 5;
		$like		= '';
		
		
		$jumlah		= $this->Mod_product->jumlah_data_search($search);
		
		$config = array();
		$config['base_url']			= base_url().'search/cari/'.$search;
		$config['total_rows']		= $jumlah;
		$config['per_page']			= $sampai;
		$config['num_links']		= $jumlah;

		$config['num_tag_open']		= '<li>';
		$config['num_tag_close']	= '</li>';
		$config['next_tag_open']	= "<li>";
		$config['next_tagl_close']	= "</li>";
		$config['prev_tag_open']	= "<li>";
		$config['prev_tagl_close']	= "</li>";
		$config['first_tag_open']	= "<li>";
		$config['first_tagl_close']	= "</li>";
		$config['last_tag_open']	= "<li>";
		$config['last_tagl_close']	= "</li>";
		$config['cur_tag_open']		= '&nbsp;<a class="current">';
		$config['cur_tag_close']	= '</a>';
		$config['next_link']		= 'Next';
		$config['prev_link']		= 'Previous';

		$this->pagination->initialize($config);

		$data = array();
		$data['product']	= $this->Mod_product->search($sampai, $dari, $search);
		$data['keyword']	= $search;
		$data['jumlah']		= $jumlah;

		//Membuat link pagination
		$str_links			= $this->pagination->create_links();
		$data["links"]		= explode('&nbsp;', $str_links );
		$data['title']		= 'PT. Cakra Indonesia Autopart | http://cakraautopart.com/';

		$this->template->load('template', 'hasilPencarian', $data);
	}
	*/
}