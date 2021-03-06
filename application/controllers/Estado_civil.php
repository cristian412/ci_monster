<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estado_civil extends CI_Controller {

	private $tabla = 'estado_civil';

	public function index(){
		$data['update'] = $this -> Request_model -> update();
		$data['fields'] = $this -> Request_model -> form($this->tabla,'new',URL.$this->tabla);
		$data['lista']  = $this -> Request_model -> grid($this->tabla);
		$data['yield_data'] = $this->load->view('tables/'.$this->tabla.'/list',$data,true);
	    $this->load->view('layout/adminlte/index',$data);	
	}
	public function show(){
		$id = $this->uri->segment(3);
		$data['update'] = $this -> Request_model -> update();
		$data['fields'] = $this -> Request_model -> form($this->tabla,$id);
		$data['lista']  = $this -> Request_model -> item($this->tabla,$id);
		$data['yield_data'] = $this->load->view('tables/'.$this->tabla.'/show',$data,true);
		$this->load->view('layout/adminlte/index',$data);
	}
	public function edit(){
		$id = $this->uri->segment(3);
		if(empty($id)) $id = 'new';
		$data['fields'] = $this -> Request_model -> form($this->tabla,$id);
		$data['yield_data'] = $this->load->view('tables/'.$this->tabla.'/edit',$data,true);
		$this->load->view('layout/adminlte/index',$data);
	}

}
