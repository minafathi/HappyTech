<?php 

class Edit_comment extends CI_Model {
    public function edit_com($commid, $commtext) {
        $query = $this->db->query("UPDATE comments
        SET comment = CONCAT(comment , '$commtext')
        WHERE id='$commid'");

        if($query !== FALSE){
            return true;
        } else {
            return false;
        }
    }
}