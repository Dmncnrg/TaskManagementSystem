<?php
/*

*******************************NOTES***************************************
- Website URL: localhost/taskmanagementsystem
- call niyo lang si Task_Model if mag-access ng Model (no need na yung $this->load->model('Task_Model');)
- no need na ideclare yung mga $this->load->library('session'); / $this->load->library('form_validation'); / $this->load->helper(array('form', 'url'));

*/
class TaskManager extends CI_Controller{
    // login screen
    public function index(){ 
        $this->form_validation->set_rules('user', 'Username', 'trim|required|callback_login_user_check');
        $this->form_validation->set_rules('pw', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('login');
        }else{
            $user = $this->Task_Model->get_user($this->input->post('user'));
            $this->session->set_userdata(array('userinfo' => $user));
            redirect(base_url()."TaskManager/tasks");
        }
    }
    // check if user and password is correct
    public function login_user_check(){
        if ($this->Task_Model->login_user_exist())  
        {  
            return true;  
        } else {  
            $this->form_validation->set_message('login_user_check', 'Invalid username or password!');  
            return false;  
        }  
    }
    // register screen
    public function register(){
        $this->form_validation->set_rules('fname', 'First name', 'trim|required|callback_alpha_space');
        $this->form_validation->set_rules('lname', 'Last name', 'trim|required|callback_alpha_space');
        $this->form_validation->set_rules('user', 'Username', 'trim|required|min_length[5]|alpha_numeric|callback_register_user_check');
        $this->form_validation->set_rules('pw', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('cpw', 'Password Confirmation', 'trim|required|matches[pw]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[8]|valid_email');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('register');
        }else{
             $data = array(
                'fname'=>$this->input->post('fname'),
                'lname'=>$this->input->post('lname'),
                'username'=>$this->input->post('user'),
                'password'=>$this->input->post('pw'),
                'email'=>$this->input->post('email')
            );
            $this->Task_Model->insert_user_data($data);
            redirect(base_url()); 
        }
    }
    // check if username already exist when registering
    public function register_user_check(){
        if ($this->Task_Model->register_user_exist())  
        {  
            return true;  
        } else {  
            $this->form_validation->set_message('register_user_check', 'Username already exist');  
            return false;  
        }  
    }
    // form validation that accepts alphabets and space
    function alpha_space($str)
    {
        $this->form_validation->set_message('alpha_space', 'The %s field may only contain letters and spaces');
        return ( ! preg_match("/^([a-z ])+$/i", $str)) ? FALSE : TRUE;
    } 
    public function tasks($offset=0){
        $config['base_url']=base_url().'/TaskManager/tasks/';
        //$config['total_rows']= $this->Task_Model->CountAll();
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
        
        //$data['list'] = $this->Admin_Model->fetch_data($config['per_page'],$offset);
        //$this->load->view('AdminView',$data);
        $this->load->view('task_list');
    }
    public function create_task(){

    }
    public function edit_task(){ //loads edit task screen
        $this->load->view('update_task');
    }
    public function delete_task(){ //delete task
        
    }
    public function check_table(){ //run this para macheck yung table (localhost/taskmanagementsystem/taskmanager/check_table)
        echo "Count: ".$this->Task_Model->count_fetch_data()."<br>"; //change table niyo na lang sa model if user or task table
        $data['info'] = $this->Task_Model->show_data(); //change table niyo na lang sa model if user or task table
        $this->load->view('table_content',$data);
    }
    public function profile(){
        $data['info'] = $this->Task_Model->show_data();
        $this->load->view('view_profile',$data);
    }
    // if logout button clicked
    public function logout(){
        $this->session->unset_userdata('userinfo');
        redirect(); 
    }
}
?>