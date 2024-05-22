<?php

class Bar_Coding extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('bar-coding/bar-coding');
    }

}
