<?php 

class Delete_template extends CI_Model {
    public function delete_tmpl ($id) {
        $query = $this->db->query("DELETE FROM templates WHERE id='$id'");
        $query = $this->db->query("DELETE FROM comments WHERE template_id='$id'");
        
        if($query !== FALSE){
            return true;
        } else {
            return false;
        }

        
    }
}