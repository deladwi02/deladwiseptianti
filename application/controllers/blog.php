<?php
class Blog extends CI_Controller {
	public function index(){
		$this->load->view('blog/artikel');
	}
	
	public function artikel(){
		$this->load->view('artikel');
	}

	public function tabel(){
		$this->load->view('boostrap/table');
	}
}