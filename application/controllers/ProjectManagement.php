<?php

class ProjectManagement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('project-management/project-management');
    }

}
