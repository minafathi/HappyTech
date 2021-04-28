<?php
class Pending extends CI_Controller
{
	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();

		/*load database libray manually*/
		$this->load->database();

		/*load Model*/
		$this->load->model('PendingModel');
	}
	public function pendingdis()
	{
		$result['data']=$this->Hello_model->pending();
		$this->load->view('pending	',$result);
	}
	public function editpending()
	{
		$id=$this->input->get('id');
		$result['data']=$this->PendingModel->editreviewById($id);
		$this->load->view('edit_review',$result);

		if($this->input->post('edit'))
		{
			$first_name=$this->input->post('id');
			$first_name=$this->input->post('fullname');
			$first_name=$this->input->post('email');
			$first_name=$this->input->post('address');
			$first_name=$this->input->post('fieldofstudy');
			$first_name=$this->input->post('degree');
			$email=$this->input->post('work');
			$this->PendingModel->edit_review($id,$fullname,$email,$address,$fieldofstudy,$degree);
			echo "Data updated successfully !”;
		}
	}
	
}
?>

