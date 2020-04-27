<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
// register function 
	public function register_user()
	{
        $data = array(
            'firstname' => $this->input->post('fname'),
            'lastname' => $this->input->post('lname'),
            'phone' => $this->input->post('phone'),
            'city' => $this->input->post('city'),
            'email' => $this->input->post('email'),
            'password' => sha1($this->input->post('password'))
        );
        $this->db->insert('users',$data);
        return true;
    }
// login function 
    public function login_user($email,$password)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(['email'=>$email, 'password'=>sha1($password)]);
        $results = $this->db->get();
        if($results->num_rows() == 1){
            $user = $results->row();
            return $user->id;
        }else{
            return false;
        }
    }
// Get user information by id function 
    public function get_user_by_id($id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('id'=>$id));
        $results = $this->db->get();
        return $results->row(); 
    }
}