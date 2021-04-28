<?php
class Dashboard extends CI_Controller
{
	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();

		/*load database libray manually*/
		$this->load->database();

		/*load Model*/
		$this->load->model('DashboardModel');
	}
	/*Display*/
	public function dashboard()
	{
		$result['data']=$this->DashboardModel->dashboard();
		$this->load->view('dashboard',$result);
	}

}
?>
