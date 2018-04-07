<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array(
			'loged_in' 	=> true,
			'role'		=> 1,
			'name'		=> 'Gana Muhibudin Azza'
		);
		$this->load->view('front/home', $data);
	}
}
