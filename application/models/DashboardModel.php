<?php
class DashboardModel extends CI_Model
{
	/*View*/
	function dashboard()
	{
		$query=$this->db->query("select * from reg");
		return $query->result();
	}

}
