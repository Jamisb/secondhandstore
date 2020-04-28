<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
	public function index()
	{
		// $data['first_post'] = $this->Ads_model->get_post(3,0);
		// $data['first_second'] = $this->Ads_model->get_post(6,3);
		// $this->load->view('index',$data);
		$this->load->view('index');

	}
}
