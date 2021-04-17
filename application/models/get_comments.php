<?php 

class Get_comments extends CI_Model{

    public function get_comment($commid){
        $arr = [];
        foreach($commid as $cm){
            $this->db->where('id', $cm);
            $query = $this->db->get('comments');
            $result = $query->result_array();
            array_push($arr, $result[0]['comment']);
        }
        
        return $arr;
    }
}
?>