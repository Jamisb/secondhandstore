<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads extends CI_Controller {

	public function add()
	{
		$this->load->view('ads/add');
	}

}