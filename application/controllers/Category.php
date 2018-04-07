<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function index()
	{
		$this->load->view('front/home');
	}

	public function all()
	{
		$this->load->model('category_model');
		$category = $this->category_model->all();
		$data = array(
			'loged_in' 	=> true,
			'role'		=> 1,
			'name'		=> 'Gana Muhibudin Azza',
			'category'	=> $category
		);
		$this->load->view('back/category_all', $data);
	}

	public function setCategory($type)
	{
		$this->load->model('category_model');
		if (strtolower($_SERVER['REQUEST_METHOD']) == "post") {
			$response = $this->category_model->set($type);
			echo $response;
		}
	}
}