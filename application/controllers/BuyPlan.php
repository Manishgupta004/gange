<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BuyPlan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ContactModel'); // Assuming you have a model named ContactModel
        $this->load->helper(array('captcha', 'url'));
        $this->load->library('planapi');
    }

    public function index()
    {
        // Load necessary data or operations if required for index view
        $this->load->view('registrationform/index');
    }

    public function PlanData($plan_id)
    {
        $this->load->helper('captcha');
        $this->load->library('session');

        // Generate captcha
        $captcha_config = array(
            'img_path'      => './captcha-images/',
            'img_url'       => base_url() . 'captcha-images/',
            'font_path'     => './path/to/fonts/texb.ttf',
            'img_width'     => 150,
            'img_height'    => 35,
            'expiration'    => 7200,
            'word_length'   => 5,
            'font_size'     => 12,
            'img_id'        => 'Imageid',
            'pool'          => '123456789abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ',
            'colors' => array(
                'background' => array(69, 141, 213),
                'border' => array(69, 141, 213),
                'text' => array(255, 255, 255),
                'grid' => array(69, 141, 213)
            ),
        );

        $captcha = create_captcha($captcha_config);
        $captcha_word = $captcha['word'];
        $this->session->set_userdata('captchaword', $captcha_word);

        $dataList = $this->planapi->PlanData(); // Assuming PlanData() method exists in planapi library
        $data = $dataList['result']['data'];

        $selected_plan = null;
        foreach ($data as $item) {
            if ($item['plan_id'] == $plan_id) {
                $selected_plan = $item;
                break;
            }
        }
// print_r($selected_plan);die;
        if ($selected_plan) {
            $this->load->view('registrationform/index', ['captcha_image' => $captcha['image'], 'data' => $selected_plan]);
        } else {
            // Handle case where plan is not found
            echo json_encode(['statuscode' => 404, 'message' => 'Plan not found']);
        }
    }

    public function refresh_captcha()
    {
        $vals = array(
            'img_path'      => './captcha-images/',
            'img_url'       => base_url() . 'captcha-images/',
            'font_path'     => './path/to/fonts/texb.ttf',
            'img_width'     => '200',
            'img_height'    => 40,
            'expiration'    => 60,
            'word_length'   => 5,
            'font_size'     => 15,
            'img_id'        => 'Imageid',
            'pool'          => '123456789abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ',
       
            'colors'        => array(
				'background'    => array(255, 255, 255), // Set background color to white
				'border'        => array(250, 250, 250),
				'text'          => array(0, 0, 0),
				'grid'          => array(238, 197, 254)
			),

        );
     


        $cap = create_captcha($vals);
        $image = $cap['image'];
        $captchaword = $cap['word'];
        $this->session->unset_userdata('captchaword');
        $this->session->set_userdata('captchaword', $captchaword);
        echo  $image;
        
    }

}
