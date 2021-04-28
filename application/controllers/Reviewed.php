<?php
class Reviewed extends CI_Controller
{
	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();

		/*load database libray manually*/
		$this->load->database();

		/*load Model*/
		$this->load->model('ReviewedModel');
	}
	/*Display*/
	public function reviewed()
	{
		$result['data']=$this->ReviewedModel->reviewed();
		$this->load->view('reviewed',$result);
	}

}
?>
