<?php

class TaskManager extends CI_Controller{
    public function index(){ //first screen natin yung login

        $this->load->view('login');
    }
    public function register(){
        $this->load->view('register');
    }
}
?>