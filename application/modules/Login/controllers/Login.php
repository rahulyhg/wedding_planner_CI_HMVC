<?php

class Login extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
    }
    function index()
    {  
    	$this->load->view('Header/header');
       $this->load->view('Login/login');
       $this->load->view('Footer/footer');
    }
}


?>