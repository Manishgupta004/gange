<?php
class Plans extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('planapi');
    }

    public function index()
    {
        $dataList = $this->planapi->PlanData();
        // print_r($dataList);die;

        if (isset($dataList['error'])) {
            // Handle error
            echo 'Error: ' . $dataList['error'] . ', Line: ' . $dataList['line'];
            die();
        }

        // Print or use the data as needed
        // print_r($dataList);

        // Load view with the data
        $this->load->view('plans/plans', array('obj' => $dataList));
    }
}
?>