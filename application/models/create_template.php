<?php 

class Create_template extends CI_Model {
    function create($title, $comments, $type) {
        $query = $this->db->query("
        INSERT INTO templates (title, type, comment_number)
        VALUES ('$title', '$type','3')");
        foreach( $comments as $key => $n ) {
            $query = $this->db->query("
            INSERT INTO comments (template_id, comment)
            VALUES ('$title', '$n')");
          }

        if($query !== FALSE){
            return true;
        } else {
            return false;
        }
    }
}