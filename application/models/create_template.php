<?php 

class Create_template extends CI_Model {
    function create($title, $comments, $type) {
        $db = $this->load->database('happytech'); 
        $this->db->query('use happytech');
        $query = $this->db->query("
        INSERT INTO templates (title, type, comment_number)
        VALUES ('$title', '$type','".COUNT($comments)."')");

        // $id = $this->db->query('SELECT id FROM templates WHERE id=MAX(id)');

        foreach( $comments as $key => $n ) {
            $query = $this->db->query("
            INSERT INTO comments (template_id, comment)
            VALUES ((SELECT MAX( id ) FROM templates), '$n')");
          }

        if($query !== FALSE){
            return true;
        } else {
            return false;
        }
    }
}