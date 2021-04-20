<?php
class Read_template extends CI_Model {

    public function read_tmpl() {
        $db = $this->load->database('happytech'); 
        $this->db->query('use happytech');
        $query = $this->db->query('SELECT * FROM templates');
        $res = $query->result();        
        return $res;
    }

    public function read_comm() {
        $db = $this->load->database('happytech'); 
        $this->db->query('use happytech');
        $query = $this->db->query('SELECT * FROM comments');
        $cres = $query->result();        
        return $cres;
    }
}