<?php 
//defined('BASEPATH') OR exit('No direct script access allowed');
 
class Application_form extends CI_Controller{
	

	public function file_data(){
		//validate the form data 
		$this->load->library('form_validation');
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
			// $data['file1'] = $this->input->post('file1', TRUE);
            // $data['file2'] = $this->input->post('file2', TRUE);

			$terms = $this->input->post('condition' , TRUE);
			//file upload code 
			//set file upload settings 
			$upload_path = realpath(APPPATH . '../assets/uploads');
			$config['upload_path'] = $upload_path;
			$config['allowed_types'] = 'gif|jpg|png|pdf|txt|docx';
			$this->session->set_userdata('data', $data, 300);
			$this->load->library('upload', $config);

			 if ( ! $this->upload->do_upload('file1')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_userdata('upload1_error', 'Failed to upload cover letter! Try again!' , 300);
				redirect(base_url().'/app');
			 }else{

			// 	//file is uploaded successfully
			// 	//now get the file uploaded data 
			 	$upload_data_file1 = $this->upload->data();

			// 	//get the uploaded file name
			 	$data['file1'] = $upload_data_file1['file_name'];

			// 	//store pic data to the db
			 	//$this->pic_model->store_pic_data($data);

				
			 }

			 if ( ! $this->upload->do_upload('file2')){
			 	$error = array('error' => $this->upload->display_errors());
				$this->session->set_userdata('upload2_error', 'Failed to upload CV! Try again!', 300);
				//redirect(base_url().'/app');
			 	//$this->load->view('upload_form', $error);

			 }else{

			 	//file is uploaded successfully
			 	//now get the file uploaded data 
			 	$upload_data_file2 = $this->upload->data();

			 	//get the uploaded file name
		    	$data['file2'] = $upload_data_file2['file_name'];
				$this->load->model('application_model');
			// 	//store pic data to the db
			 	 if($this->application_model->store_pic_data($data)){
				 	$this->session->set_flashdata('Successful_apply', 'Congratulations! Your application is submitted!', 300);
				 	redirect(base_url().'/app');
					
				  } 
				  else {
				 	$this->session->set_flashdata('Successful_apply', 'Your application submition has failed! Try again!', 300);
				 	redirect(base_url().'/app');
					
				  }
                    
			
			}
			//$this->load->view('footer');
			redirect(base_url().'/app');
		}
	}
}
// }
