<?php

class ClientsRate extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('clients-rate/clients-rate');
    }

}
