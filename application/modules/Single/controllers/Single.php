<?php

class Single extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
    }
    function index()
    {  
    	$this->load->view('Header/header');
       $this->load->view('Single/single');
       $this->load->view('Footer/footer');
    }
}


?>