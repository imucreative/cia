<?php
class mod_menu extends ci_model{
    
    function select_all(){
        return $this->db->get_where('tabel_menu',array('status_delete'=>0));
    }
    
    function select_parent(){
        return $this->db->get_where('tabel_menu',array('parent'=>0, 'status_delete'=>0));
    }
    
    
    function simpan(){
		$data=array(
			'menu_title'     =>  $this->input->post('nama'),
			'parent'            =>  $this->input->post('parent'),
			'link'              =>  $this->input->post('link'),
			'icon'              =>  $this->input->post('icon'),
			'menu_title_seo' =>  seo_title($this->input->post('nama')));
        $this->db->insert('tabel_menu',$data);
    }
    
    
    function update(){
        $data=array(
			'menu_title'        =>  $this->input->post('nama'),
			'parent'            =>  $this->input->post('parent'),
			'link'              =>  $this->input->post('link'),
			'icon'              =>  $this->input->post('icon'),
			'menu_title_seo'    =>  seo_title($this->input->post('nama')));
        $this->db->where('menu_id',$this->input->post('id'));
        $this->db->update('tabel_menu',$data);
    }
	
	function hapus($id) {
        $data = array(
            'status_delete'    => "1"
        );
        $this->db->where('menu_id', $id);
        $this->db->update('tabel_menu', $data);
    }
}