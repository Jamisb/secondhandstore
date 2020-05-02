<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads_model extends CI_Model {
    // Adding data to ads database function 
    public function add_items(){
        $date = new DateTime; 
        $finnish_date = new DateTimeZone('Europe/Helsinki');
        $date->setTimezone($finnish_date);
        $image = $this->upload_image();
        if($image == "image_not_supported"){
            $this->session->set_flashdata('fail','File type is not supported');
			redirect(base_url().'ads/add');
        }elseif($image == "size_not_supported"){
            $this->session->set_flashdata('fail','File size is not supported');
			redirect(base_url().'ads/add');
        }else{
            $data = array(
                'user_id' => $this->session->userdata('user_id'),
                'category' => $this->input->post('category'),
                'city' => $this->input->post('city'),
                'title' => $this->input->post('title'),
                'price' => $this->input->post('price'),
                'body' => $this->input->post('body'),
                'created_item' => $date->format('Y-m-d H:i:s'),
                'image' => $image
            );
            $this->db->insert('ads',$data);
            return true;
        }

    }
    // Testing and uploading immage requirement function 
    public function upload_image(){
        $target_dir = './assets/uploads';
        $target_file = $target_dir.basename($_FILES["photo"]["name"]);
        $file_type = pathinfo($target_file,PATHINFO_EXTENSION);
        $allowed_files = array('png','jpg','jpeg','JPG');
        if(empty($_FILES["photo"]["size"])){
            return "user.png";
        }elseif(!in_array($file_type,$allowed_files)){
            return "image_not_supported";
        }else if ($_FILES["photo"]["size"] > 2000000){
            return "size_not_supported";
        }else{
            $tmp_name = $_FILES["photo"]["tmp_name"];
            $name = basename($_FILES["photo"]["name"]);
            move_uploaded_file($tmp_name, "$target_dir/$name");
            // move_uploaded_file($_FILES["photo"]["tmp_name"],"$target_file");
            return $_FILES["photo"]["name"];
        }

    }
    // Showing new posts on carousel function
    public function get_ads($limit,$start){
        $this->db->select('*');
        $this->db->from('ads');
        $this->db->order_by('created_item','desc');
        $this->db->limit($limit,$start);  
        $ads = $this->db->get();
        return $ads->result();
    }
// Getting offer details from ads table and user detail from user table using joints
    public function get_offer_info($id){
        $this->db->select('a.*,u.*');
        $this->db->from('ads as a');
        $this->db->join('users as u','u.id = a.user_id');
        $this->db->where(array('a.id'=>$id));  
        $offer = $this->db->get();
        return $offer->row();
    }
    public function get_next_ad($limit,$start){
        $this->db->where('id >',$start);
        $this->db->limit($limit);
        $offer = $this->db->get('ads');
        if ($offer->num_rows() > 0){
            $row = $offer->row();
            return $row;
        }else{
            return false;
        }
    }
    public function get_previous_ad($limit,$start){
        $this->db->where('id',$start-1);
        $this->db->limit($limit);
        $offer = $this->db->get('ads');
        if ($offer->num_rows() > 0){
            $row = $offer->row();
            return $row;
        }else{
            return false;
        }
    }
}