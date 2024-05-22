<?php

class Payment_failed extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('Razorpay/failed');
    }

}
