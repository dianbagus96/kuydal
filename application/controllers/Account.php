<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function index()
	{
		$this->load->view('front/home');
	}

	public function login()
	{
		if (strtolower($_SERVER['REQUEST_METHOD']) == "post") {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			echo $email . "|" . $password;
		} else {
			$this->load->view('front/login');
		}
	}
}