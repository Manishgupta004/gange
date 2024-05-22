<?php

class Term_condition extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('term-condition/term-condition');
    }

}
