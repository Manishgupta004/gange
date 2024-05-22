<?php

class Payment_success extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('Razorpay/success');
    }

}
