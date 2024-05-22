<?php

class ContractManagement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('contract-management/contract-management');
    }

}
