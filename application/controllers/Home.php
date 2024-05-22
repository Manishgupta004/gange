<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
        $this->load->library('planapi');
    }

    public function index()
    {
        
        if (isset($dataList['error'])) {
            // Handle error
            echo 'Error: ' . $dataList['error'] . ', Line: ' . $dataList['line'];
            die();
        }
        
        // Print or use the data as needed
        // print_r($dataList);
        
        $dataList = $this->planapi->PlanData();
        
        // Load view with the data
        $this->load->view('Home/index', array('obj' => $dataList));
    
    }
}
