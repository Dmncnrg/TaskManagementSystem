<?php
/*

*******************************NOTES***************************************
- Website URL: localhost/taskmanagementsystem
- call niyo lang si Task_Model if mag-access ng Model (no need na yung $this->load->model('Task_Model');)
- no need na ideclare yung mga $this->load->library('session'); / $this->load->library('form_validation'); / $this->load->helper(array('form', 'url'));

*/
class TaskManager extends CI_Controller{
    public function index(){ //first screen natin yung login

        $this->load->view('login');
    }
    public function register(){
        $this->load->view('register');
    }
    public function tasks($offset=0){
        print($this->Task_Model->fetch_data());
        $config['base_url']=base_url().'/TaskManager/tasks/';
        $config['total_rows']= $this->Task_Model->CountAll();
        $config['per_page']=4;

        $config['first_link'] = 'FIRST';
        $config['first_tag_open'] = '<li class="page-link">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'LAST';
        $config['last_tag_open'] = '<li class="page-link">';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = 'NEXT&gt';
        $config['next_tag_open'] = '<li class="page-link">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&ltPREV';
        $config['prev_tag_open'] = '<li class="page-link">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="page-link" style="background-color:#17349e;color:white;">';
        $config['cur_tag_close'] = '</li>';
        
        $config['num_tag_open'] = '<li class="page-link">';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        
        $data['list'] = $this->Admin_Model->fetch_data($config['per_page'],$offset);
        $this->load->view('AdminView',$data);
    }

    public function check_table(){ //run this para macheck yung table (localhost/taskmanagementsystem/taskmanager/check_table)
        echo "Count: ".$this->Task_Model->count_fetch_data()."<br>"; //change table niyo na lang sa model if user or task table
        $data['info'] = $this->Task_Model->show_data(); //change table niyo na lang sa model if user or task table
        $this->load->view('table_content',$data);
    }
}
?>