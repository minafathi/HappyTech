<?php

class Edit_template extends CI_Model{
    public function retrieve_tmpl($id){
        $db = $this->load->database('happytech'); 
        $this->db->query('use happytech');
        $query = $this->db->query("SELECT * FROM templates WHERE id = '$id'");
        $res = $query->result();  
        return $res;
    }
    
    public function retrieve_comment($id) {
        $db = $this->load->database('happytech'); 
        $this->db->query('use happytech');
        $query = $this->db->query("SELECT * FROM comments WHERE template_id = '$id'");      
        $res = $query->result(); 
        return $res;
    }

    public function edit_tmpl($id, $title, $comments, $type) {
        $db = $this->load->database('happytech'); 
        $this->db->query('use happytech');
        $query = $this->db->query("UPDATE templates
        SET title = '$title',
            type = '$type'
        WHERE id='$id'");

        $query2 = $this->db->query("SELECT id FROM comments WHERE template_id = '$id'");      
        $res = $query2->result(); 
        
                // $cmid = retrieve_comment($id);
        $c = $res[0]->id;
        foreach( $comments as $key => $n ) {
            $query = $this->db->query("UPDATE comments
            SET comment = '$n'
            WHERE id='$c'");
            $c = $c + 1;
        }
        
        if($query !== FALSE){
            return true;
        } else {
            return false;
        }
    }
    
}