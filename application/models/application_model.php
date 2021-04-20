<?php 

class Application_model extends CI_Model{
	
	//fetch all pictures from db
	function get_all_pics(){
		$db = $this->load->database('happytech'); 
        $this->db->query('use happytech');
		$all_pics = $this->db->get('pictures');
		return $all_pics->result();
	}
	//save picture data to db
	function store_pic_data($data){
		$fullname = $data['fullname'];
		$email = $data['email'];

		$address = $data['address'];
		$city = $data['city'];
		$state = $data['state'];
		$work = $data['work'];
		$uni = $data['uni'];
		$fieldofstudy = $data['fieldofstudy'];
		$degree = $data['degree'];

		$file1= $data['file1'];
		$file2 = $data['file2'];
		$db = $this->load->database('happytech'); 
        $this->db->query('use happytech');
		$this->session->set_userdata('data',$data, 300);
		$query = $this->db->query("
        INSERT INTO templates (fullname, email, address, city, state, work, uni, fieldofstudy, degree, file1, file2)
        VALUES ('$fullname', '$email','$address', '$city','$state','$work','$uni','$fieldofstudy','$degree','$file1','$file2' )");
		if($query !== FALSE){
            return true;
        } else {
            return false;
        }
	}
	
}