<?php
	class Tags extends CI_Controller{
		
		function __construct() {
			parent::__construct();
			$this->load->model('Mod_tags');
			
			if(!$this->session->userdata('user_id')){
				redirect('admin/auth/logout');
			}
		}
		
		
		function index(){
			$data['record']=  $this->Mod_tags->select_all()->result();
			$this->template->load('templateadmin', 'admin/tags/data', $data);
		}
		
		//==================================================================================================
		
		function post(){
			if(isset($_POST['submit'])){
				$this->Mod_tags->simpan();
				redirect('admin/tags');
			}else{
				//$data['parent']=  $this->Mod_tags->select_parent()->result();
				$this->template->load('templateadmin','admin/tags/post');
			}
		}
		
		
		function edit(){
			if(isset($_POST['submit'])){
				$this->Mod_tags->update();
				redirect('admin/tags');
			}else{
				$id_tags		= $this->uri->segment(4);
				//$data['row']	= $this->db->get_where('tbl_tags',array('id_tags'=>$id_tags))->row_array();
				$data['row']	= $this->Mod_tags->get_tags_by_tags_id($id_tags)->row_array();
				$this->template->load('templateadmin', 'admin/tags/edit', $data);
			}
		}
		
		function delete(){
			$id_tags = $this->uri->segment(4);
			if(!empty($id_tags)){
				$this->Mod_tags->hapus($id_tags);
			}
			redirect('admin/tags');
		}
		
		//==================================================================================================
		
	}