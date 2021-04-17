<?php
class Read_template extends CI_Model {
    // public function read_tmpl() {
    //     $query = $this->db->query('SELECT * FROM templates t
    //     LEFT JOIN comments c 
    //     ON c.template_id=t.id
    //     ORDER BY t.id');
    //     $res = $query->result();        
    //     return $res;
    // }

    public function read_tmpl() {
        $query = $this->db->query('SELECT * FROM templates');
        $res = $query->result();        
        return $res;
    }

    public function read_comm() {
        $query = $this->db->query('SELECT * FROM comments');
        $cres = $query->result();        
        return $cres;
    }
}