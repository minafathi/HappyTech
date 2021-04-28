<?php
class PendingModel extends CI_Model
{
	/*Display*/
	function pending()
	{
		$query=$this->db->query("select * from application");
		return $query->result();
	}
	function pendingById($id)
	{
		$query=$this->db->query("select * from form where id='".$id.”’”);
		return $query->result();
	}
	/*Update*/
	function edit_review($fullname,$email,$email,$address,$degree,$work,)
	{
		$query=$this->db->query("update form SET email='$email' where id='$id’”);
	}
	
}
