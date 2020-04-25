<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function register()
	{
		$this->load->view('users/register');
	}
	public function login()
	{
		$this->load->view('users/login');
	}

}