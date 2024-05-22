<?php

class Dymanic_Form extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('dymanic-form/dymanic-form');
    }

}
