<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads extends CI_Controller {

	public function add()
	{
		$this->form_validation->set_rules('category', 'Category', 'required|trim|min_length[3]');
		$this->form_validation->set_rules('city', 'Region or city', 'required|trim|min_length[3]');
		$this->form_validation->set_rules('title', 'Title', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('price', 'Price', 'required|trim|min_length[1]');
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

	public function offer(){
		$id = $this->uri->segment(3);
		// $this->load->view('ads/offer');
		$data['offer'] = $this->Ads_model->get_offer_info($id);
		if(empty($data['offer'])){
			redirect(site_url());
		}
		$data['next']= $this->Ads_model->get_next_ad(1,$id);
		$data['previous']= $this->Ads_model->get_previous_ad(1,$id);
		$this->load->view('ads/offer',$data);
	}
	public function category(){

		$data['offers']= $this->Ads_model->get_offers_by_category($this->uri->segment(3));
		$this->load->view('ads/categories' , $data);

	}

}