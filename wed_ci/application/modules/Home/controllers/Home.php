<?php

class Home extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
    }
    function index()
    {  
    	$this->load->view('Header/header');
       $this->load->view('Home/home');
       $this->load->view('Footer/footer');
    }
}


?>