<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $vals = array(
            'img_path'      => './captcha-images/',
            'img_url'       => base_url() . 'captcha-images/',
            'font_path'     => './path/to/fonts/captcha0.ttf',
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

        $this->session->set_userdata('captchaword', $captchaword);
        $this->load->view('contact/index', ['captcha_image' => $image]);
    }


    public function refreshCaptcha()
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
