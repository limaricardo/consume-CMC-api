<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	public function index()
	{
		$this->load->view('pages/search');
	}

	public function quote()
	{
		$this->load->model("api_model");
		$data["result"] = $this->api_model->search($_POST);

		$this->load->view('pages/result', $data);
	}
}
