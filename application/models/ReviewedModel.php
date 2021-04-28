<?php
class ReviewedModel extends CI_Model
{
	/*View*/
	function reviewed()
	{
		$query=$this->db->query("select * from application");
		return $query->result();
	}

}
