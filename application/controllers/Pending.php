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
	/*Display*/
	public function pending()
	{
		$result['data']=$this->PendingModel->pending();
		$this->load->view('pending',$result);
	}

}
?>
