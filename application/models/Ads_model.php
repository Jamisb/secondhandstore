<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads_model extends CI_Model {
    public function add_items(){
        $date = new DateTime; 
        $finnish_date = new DateTimeZone('Europe/Helsinki');
        $date->setTimezone($finnish_date);
        $image = $this->upload_image();
        if($image == "image_not_supported"){
            $this->session->set_flashdata('fail','File type is not supported');
			redirect(site_url().'ads/ad');
        }elseif($image == "size_not_supported"){
            $this->session->set_flashdata('fail','File size is not supported');
			redirect(site_url().'ads/ad');
        }else{
            $data = array(
                'user_id' => $this->session->userdata('user_id'),
                'category' => $this->input->post('category'),
                'city' => $this->input->post('city'),
                'title' => $this->input->post('title'),
                'price' => $this->input->post('price'),
                'body' => $this->input->post('body'),
                'created' => $date->format('Y-m-d H:i:s'),
                'image' => $image
            );
            $this->db->insert('ads',$data);
            return true;
        }

    }
    public function upload_image(){
        $target_dir="./assets/uploads/";
        $target_file = $target_dir.basename($_FILES['photo']['name']);
        $file_type = pathinfo($target_file,PATHINFO_EXTENSION);
        $allowed_files = array('png','jpg','jpeg');
        if(empty($_FILES['photo']['size'])){
            return "camera.png";
        }elseif(!in_array($file_type,$allowed_files)){
            return "image_not_supported";
        }else if ($_FILES['photo']['size'] > 2000000){
            return "size_not_supported";
        }else{
            move_uploaded_file($_FILES['photo']['tmp_name'],$target_file);
            return $_FILES['photo']['name'];
        }

    }

    
}