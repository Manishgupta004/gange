<?php

class Privacy_policy extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('Privacy_policy/Privacy_policy');
    }

}
