<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function register()
	{
		// Form validation
		$this->form_validation->set_rules('fname', 'First name', 'required|trim|min_length[3]');
		$this->form_validation->set_rules('lname', 'Last name', 'required|trim|min_length[3]');
		$this->form_validation->set_rules('phone', 'Phone', 'required|trim|min_length[7]');
		$this->form_validation->set_rules('city', 'City', 'required|trim|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|min_length[3]|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');
		if($this->form_validation->run() == false){

			$data = array(
				'requires' => validation_errors()
			);
			$this->session->set_flashdata($data);
			$this->load->view('users/register',$data);
		}else{

			$this->User_model->register_user();
			$this->session->set_flashdata('success','Account dreated');
			redirect(site_url());

		}
	}
	public function login()
	{
		// Form Validation for Login 
		$this->form_validation->set_rules('email', 'Email', 'required|trim|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

		if($this->form_validation->run() == false){

			$data = array(
				'requires' => validation_errors()
			);
			$this->session->set_flashdata($data);
			$this->load->view('users/login',$data);

		}else{

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if($this->User_model->login_user($email,$password) == false){

				$this->session->set_flashdata('fail','Email or password is inccorect');
				redirect(site_url('user/login'));

			}else{

				$id = $this->User_model->login_user($email,$password);
				$user = $this->User_model->get_user_by_id($id);
				$userdata = array(
					'user_id' =>$user->id,
					'email' =>$user->email,
					'fname' =>$user->firstname,
					'lname' =>$user->lastname,
					'logged' =>true
				);
				$this->session->set_userdata($userdata);
				redirect(site_url());
			}
		}
	}
	public function logout(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('fname');
		$this->session->unset_userdata('lname');
		$this->session->unset_userdata('logged');
		redirect(site_url());


	}
}