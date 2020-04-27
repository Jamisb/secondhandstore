<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads extends CI_Controller {

	public function add()
	{
		$this->form_validation->set_rules('category', 'Category', 'required|trim|min_length[3]');
		$this->form_validation->set_rules('city', 'Region or city', 'required|trim|min_length[3]');
		$this->form_validation->set_rules('title', 'Title', 'required|trim|min_length[7]');
		$this->form_validation->set_rules('body', 'Information about item', 'required|trim|min_length[10]');
		if($this->form_validation->run() == false){

			$data = array(
				'requires' => validation_errors()
			);
			$this->session->set_flashdata($data);
			$this->load->view('ads/add',$data);
		}else{

			$this->Ads_model->add_items();
			$this->session->set_flashdata('success','Item added');
			redirect(site_url());

		}
	}

}