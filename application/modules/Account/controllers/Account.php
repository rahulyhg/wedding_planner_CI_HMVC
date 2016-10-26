<?php

class Account extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
    }
    function index()
    {    
    	$this->load->view('Header/header');
       $this->load->view('Account/account');
        $this->load->view('Footer/footer');
    }
}


?>