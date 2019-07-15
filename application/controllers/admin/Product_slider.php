<?php
	class Product_slider extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('Mod_slider');
			$this->load->model('Mod_product');
			
			if(!$this->session->userdata('user_id')){
				redirect('admin/auth/logout');
			}
		}
		
		function index(){
			$data['record']	= $this->Mod_slider->slider_all()->result();
			$this->template->load('templateadmin', 'admin/product/slider_product', $data);
		}
		
		function post(){
			if(isset($_POST['submit'])){
				$image	= $this->upload_image();
				$this->Mod_slider->simpan($image);
				
				redirect('admin/product_slider');
				
			}else{
				$data['link_product']	= $this->Mod_product->select_all_publish()->result();
				$this->template->load('templateadmin', 'admin/product/slider_product_post', $data);
			}
		}
		
		function edit(){
			if(isset($_POST['submit'])){
				$image	= $this->upload_image();
				$this->Mod_slider->update($image);
				//print_r($this->upload->display_errors()); 
				
				redirect('admin/product_slider');
			}else{
				$id						= $this->uri->segment(4);
				$data['product_slider']	= $this->Mod_slider->edit_slider_by_id($id)->row_array();
				$data['link_product']	= $this->Mod_product->select_all_publish()->result();
				$this->template->load('templateadmin', 'admin/product/slider_product_edit', $data);
			}
		}
		
		function delete(){
			$id = $this->uri->segment(4);
			if(!empty($id)){
				$this->Mod_slider->hapus($id);
			}
			redirect('admin/product_slider');
		}
		
		//================================================================================
		
		function publish(){
			$id 	= $this->uri->segment(4);
			$status	= $this->uri->segment(5);
			if(!empty($id)){
				$this->Mod_slider->publish($id, $status);
			}
			redirect('admin/product_slider');
		}
		
		function upload_image(){
			$config['upload_path']		= "./uploads/slider/";
			$config['allowed_types']	= "jpg|png|jpeg";
			$config['max_size']			= 1024; //1mb
			$this->load->library('upload', $config);
			
			$this->upload->do_upload('userfile');
			$upload	= $this->upload->data();
			return $upload['file_name'];
		}
	}
?>