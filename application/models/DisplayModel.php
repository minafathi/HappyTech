<?php
class DisplayModel extends CI_Model
{
	/*View*/
	function display_candidates()
	{
		$query=$this->db->query("select * from login");
		return $query->result();
	}

}
