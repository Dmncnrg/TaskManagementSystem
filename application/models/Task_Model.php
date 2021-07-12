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
        $query = $this->db->get('tbl_user');
        return $query->result();
    }

    public function count_fetch_data(){ //pangtest lang kung ilan na laman ng table
        $query = $this->db->get('tbl_user'); //change niyo lang table name if user or task table
        return $query->num_rows();
    }
    public function fetch_data($limit,$offset,$username){ //Pagination (Homepage)
        $this->db->limit($limit);
        $this->db->offset($offset);
        $this->db->where('user',$username);
        $result = $this->db->get('tbl_task')->result();
        return $result;
    }
    public function CountAll(){ //Pagination function
        return $this->db->get('tbl_user')->num_rows();
    }

    public function fetch_task(){ //fetch changing task status
        $query = $this->db->get('tbl_task');
        return $query->result();
    }
    public function task_status($task){ //automated task_status change
        $isUpdate = false;
        foreach($task['alltasks'] as $tasks){
            if(strtotime($tasks->task_start) <= strtotime(date("Y-m-d")) && strtotime($tasks->task_due) > strtotime(date("Y-m-d"))){
                $tasks->task_status = "On Progress";
                $isUpdate = true;
            }elseif(strtotime($tasks->task_start) <= strtotime(date("Y-m-d")) && strtotime($tasks->task_due) >= strtotime(date("Y-m-d"))){
                $tasks->task_status = "Done";
                $isUpdate = true;
            }
            if($isUpdate){
                $this->update_task_status($tasks);
                $isUpdate = false;
            }
        }
    }
    public function update_task_status($task){
        $this->db->where('id',$task->id);
        $this->db->update('tbl_task',$task);
    } 
    public function show_data(){ //pang show ng laman ng table
        $query = $this->db->get('tbl_user'); //change niyo lang table name if user or task table
        return $query->result();
    }
    public function create_task($data){ //creating task function
        $this->db->insert('tbl_task',$data);
    }
    public function get_task($id){
        $this->db->where('id',$id);
        $query = $this->db->get('tbl_task');
        return $query->result();
    }
    public function update_task($id, $data){
        $this->db->where('id',$id);
        $this->db->update('tbl_task',$data);
    }
}
?>