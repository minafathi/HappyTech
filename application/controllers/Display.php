<?php
class Display extends CI_Controller
{
	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();

		/*load database libray manually*/
		$this->load->database();

		/*load Model*/
		$this->load->model('DisplayModel');
	}
	/*Display*/
	public function pendingreview()
	{
		$result['data']=$this->DisplayModel->display_candidates();
		$this->load->view('display_candidates',$result);
	}

}
?>
