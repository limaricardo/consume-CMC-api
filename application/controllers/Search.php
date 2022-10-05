<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	public function index()
	{	
		$this->load->view('pages/search');
	}

	public function pesquisar()
	{	
		$this->load->model("api_model");
		$term = implode($_POST);
		$term = strtoupper($term);
		$data["result"] = $this->api_model->busca($_POST, $term);
		

		$this->load->view('pages/result', $data);
	}
}
