<?php

class Product extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
    }
    function index()
    {  
    	$this->load->view('Header/header');
       $this->load->view('Product/product');
       $this->load->view('Footer/footer');
    }
}


?>