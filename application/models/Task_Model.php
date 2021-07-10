<?php

class Task_Model extends CI_Model{
    public function count_fetch_data(){ //pangtest lang kung ilan na laman ng table
        $query = $this->db->get('tbl_user'); //change niyo lang table name if user or task table
        return $query->num_rows();
    }
    public function fetch_data($limit,$offset){ //Pagination (Homepage)
        $this->db->limit($limit);
        $this->db->offset($offset);
        $result = $this->db->get('tbluser')->result();
        return $result;
    }
    public function CountAll(){ //Pagination function
        return $this->db->get('tbluser')->num_rows();
    }
    public function show_data(){ //pang show ng laman ng table
        $query = $this->db->get('tbl_user'); //change niyo lang table name if user or task table
        return $query->result();
    }
}
?>