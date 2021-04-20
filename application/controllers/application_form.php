<?php 
//defined('BASEPATH') OR exit('No direct script access allowed');
 
class Application_form extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		//$this->load->model('application_model');
		$this->load->library('form_validation');
		
		//$this->load->view('header');

	}
	
	public function form(){
		$this->load->view('upload_form');
		$this->load->view('footer');
	}
	public function file_data(){
		//validate the form data 

		$this->form_validation->set_rules('fullname', 'Full Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('work', 'Experience', 'required');
		$this->form_validation->set_rules('uni', 'University', 'required');
		$this->form_validation->set_rules('fieldofstudy', 'Field Of Study', 'required');
		$this->form_validation->set_rules('degree', 'Degree', 'required');
		$this->form_validation->set_rules('condition', 'Accept Conditions', 'required');
        if ($this->form_validation->run() == FALSE){
			$this->session->set_userdata('validation_error', 'Validation Error error!', 300);
			redirect(base_url().'/app');
		}else{
			
			//get the form values
			$data['fullname'] = $this->input->post('fullname', TRUE);
			$data['email'] = $this->input->post('email', TRUE);
			$data['address'] = $this->input->post('address', TRUE);
			$data['city'] = $this->input->post('city', TRUE);
			$data['state'] = $this->input->post('state', TRUE);
			$data['work'] = $this->input->post('work', TRUE);

			$data['uni'] = $this->input->post('uni', TRUE);
			$data['fieldofstudy'] = $this->input->post('fieldofstudy', TRUE);
			$data['degree'] = $this->input->post('degree', TRUE);
			$data['file1'] = $this->input->post('file1', TRUE);
            $data['file2'] = $this->input->post('file2', TRUE);

			$terms = $this->input->post('condition' , TRUE);
			//file upload code 
			//set file upload settings 
			$config['upload_path']          = base_url().'assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|pdf|txt|docx';

			$this->load->library('upload', $config);

			 if ( ! $this->upload->do_upload($data['file1'])){
				$this->session->set_userdata('upload1_error', 'Upload 1 Error error!', 300);
				//redirect(base_url().'/app');
			 }else{

			// 	//file is uploaded successfully
			// 	//now get the file uploaded data 
			 	$upload_data = $this->upload->data();

			// 	//get the uploaded file name
			 	$data['file1'] = $upload_data['file_name'];

			// 	//store pic data to the db
			 	//$this->pic_model->store_pic_data($data);

				
			 }

			 if ( ! $this->upload->do_upload($data['file2'])){
			 	$error = array('error' => $this->upload->display_errors());
				$this->session->set_userdata('upload2_error', 'Upload 2 error!', 300);
				//redirect(base_url().'/app');
			 	//$this->load->view('upload_form', $error);

			 }else{

			 	//file is uploaded successfully
			 	//now get the file uploaded data 
			 	$upload_data = $this->upload->data();

			 	//get the uploaded file name
		    	$data['file2'] = $upload_data['file_name'];
				$this->load->model('application_model');
			// 	//store pic data to the db
			 	if($this->application_model->store_pic_data($data)){
					redirect(base_url().'/app');
					
				 } 
				 else {
					redirect(base_url());
					
				 }

			
			// }
			//$this->load->view('footer');
			redirect(base_url().'/app');
		}
	}
}
}
