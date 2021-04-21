<?php
class PendingModel extends CI_Model
{
	/*View*/
	function pending()
	{
		$query=$this->db->query("select * from login");
		return $query->result();
	}

}
