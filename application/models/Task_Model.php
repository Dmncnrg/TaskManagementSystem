<?php

class Task_Model extends CI_Model{
    // insert from register
    public function insert_user_data($data){
        $this->db->insert('tbl_user',$data);
    }
    // check if login and password is correct
    public function login_user_exist(){
        $this->db->where('username', $this->input->post('user'));  
        $this->db->where('password', $this->input->post('pw'));  
        $query = $this->db->get('tbl_user');  
        if ($query->num_rows() == 1)  
        {  
            return true;  
        } else {  
            return false;  
        }  
    }
    // check if the username already exist
    public function register_user_exist(){
        $this->db->where('username', $this->input->post('user'));
        $query = $this->db->get('tbl_user');  
        if ($query->num_rows() == 1)  
        {  
            return false;  
        } else {  
            return true;  
        } 
    }
    //save user on session after login
    public function get_user($user){
        $this->db->where('username',$user);
        return $this->db->get('tbl_user')->result();
    }


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