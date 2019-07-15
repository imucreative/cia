<?php
class menu extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('mod_menu');
    }
    
    
    function index(){
        $data['record']=  $this->mod_menu->select_all()->result();
        $this->template->load('templateadmin','admin/menu/data',$data);
    }
    
    
    function post(){
        if(isset($_POST['submit'])){
            $this->mod_menu->simpan();
            redirect('admin/menu');
        }else{
            $data['parent']=  $this->mod_menu->select_parent()->result();
            $this->template->load('templateadmin','admin/menu/post',$data);
        }
    }
    
    
    function edit(){
        if(isset($_POST['submit'])){
            $this->mod_menu->update();
            redirect('admin/menu');
        }else{
            $id            = $this->uri->segment(4);
            $data['row']   = $this->db->get_where('tabel_menu',array('menu_id'=>$id))->row_array();
            $data['parent']=  $this->mod_menu->select_parent()->result();
            $this->template->load('templateadmin','admin/menu/edit',$data);
        }
    }
    
    
    function delete(){
		$id = $this->uri->segment(4);
		if(!empty($id)){
            $this->mod_menu->hapus($id);
        }
        redirect('admin/menu');
    }
}
