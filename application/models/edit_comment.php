<?php 

class Edit_comment extends CI_Model {
    public function edit_com($commid, $commtext) {
        $db = $this->load->database('happytech'); 
        $this->db->query('use happytech');
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