<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  ContactModel extends  CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function inputData($data) {
    //     print_r($data);die;

    //     $this->db->select('*');
    //     $this->db->from('contact');
    //     $this->db->where('phone', $data['PhoneNo']);
    //     $duplicateResult = $this->db->get();
    //     // print_r($this->db->last_query());die;
    //     if ($duplicateResult->num_rows() > 0) {
    //         $res = false;
    //     } else {
    //         // $res = $this->db->insert("usermaster", $new_member_insert_data);
    //         $this->db->insert('contact_details', $data);
    //     }

    }

}
