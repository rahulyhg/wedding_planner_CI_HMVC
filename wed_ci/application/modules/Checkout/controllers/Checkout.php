<?php

class Checkout extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
    }
    function index()
    {
      $this->load->view('Header/header');
       $this->load->view('Checkout/checkout');
       $this->load->view('Footer/footer');
    }
}


?>