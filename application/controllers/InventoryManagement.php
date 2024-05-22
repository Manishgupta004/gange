<?php

class InventoryManagement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('inventory-management/inventory-management');
    }

}
