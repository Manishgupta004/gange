<?php

class SalesTargetManagement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('sales-target-management/sales-target-management');
    }

}
