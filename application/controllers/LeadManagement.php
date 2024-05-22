<?php

class LeadManagement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('lead-management/lead-management');
    }

}
