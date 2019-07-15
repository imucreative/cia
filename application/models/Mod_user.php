<?php
class Mod_user extends CI_Model{
    
	public $table	= "tbl_users";
	
	function chek_login($username, $password){
		$this->db->where('status_delete',0);
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$user	= $this->db->get($this->table);
		return $user;
	}
	
	function update_profil() {
		$data = array(
			'password'	=> md5($this->input->post('password', TRUE))
		);
		$id_user = $this->input->post('user_id');
		$this->db->where('user_id', $id_user);
		$this->db->update($this->table, $data);
	}
    
}
