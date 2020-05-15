<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function send()
	{
		// Form validation
		$this->form_validation->set_rules('name', 'Name', 'required|trim|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|min_length[3]');
		$this->form_validation->set_rules('body', 'Message', 'required|trim|min_length[10]');
		if($this->form_validation->run() == false){

			$data = array(
				'requires' => validation_errors()
			);
			$this->session->set_flashdata($data);
			$this->load->view('contact/message',$data);
		}else{

			$this->Contact_model->send_message();
			$this->session->set_flashdata('success','Message sent');
			redirect(site_url('contact/send'));

		}
	}

}