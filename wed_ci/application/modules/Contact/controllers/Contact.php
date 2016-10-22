<?php

class Contact extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
    }
    function index()
    {  
       $this->load->view('Header/header');
       $this->load->view('Contact/contact');
       $this->load->view('Footer/footer');
    }
}


?>