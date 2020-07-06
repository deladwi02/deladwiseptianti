<?php

class M_mahasiswa extends ci_Model{
	public function view_mhs(){
		return $this->db->get('tb_mahasiswa');
	}
}