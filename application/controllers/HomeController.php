<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
	public function index()
	{
		$data['first_ad'] = $this->Ads_model->get_ads(3,0);
		$data['second_ad'] = $this->Ads_model->get_ads(3,3);
		$this->load->view('index',$data);

	}
}
