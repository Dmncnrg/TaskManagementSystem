<?php

class Task_Model extends CI_Model{
    public function count_fetch_data(){ //pangtest lang kung ilan na laman ng table
        $query = $this->db->get('tbl_user'); //change niyo lang table name if user or task table
        return $query->num_rows();
    }
    public function show_data(){ //pang show ng laman ng table
        $query = $this->db->get('tbl_user'); //change niyo lang table name if user or task table
        return $query->result();
    }
}
?>