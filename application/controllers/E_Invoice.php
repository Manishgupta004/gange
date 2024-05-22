<?php

class E_Invoice extends CI_Controller
{
    function __construct()
    {
        parent::__construct();   
    }

    public function index()
    {
        $this->load->view('e-invoice/e-invoice');
    }
}
