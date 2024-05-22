<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers:Accept");
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
    public $url;

    public function __construct()
    {
        parent::__construct();
        $this->url = 'http://192.168.4.235/SanAcc/crm/Api/';
    }

    public function index()
    {
        echo "No";
        die;
    }

    function validateApi($data)
    {
        foreach ($data as $key => $value) {
            $key = $this->security->xss_clean($key);
            $value = $this->security->xss_clean($value);
            $_POST[$key] = $value;
        }
    }

    public function response($success, $message, $data = array(), $status_code = 200)
    {
        $message = strip_tags($message);
        echo json_encode(array('success' => $success, 'message' => $message, 'result' => empty($data) ? new stdClass() : $data, 'statuscode' => $status_code));
        exit;
    }

    public function curl_data($func_name, $jsonData)
    {
        $url = $this->url . $func_name;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_ENCODING, '');
        curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
        curl_setopt($curl, CURLOPT_TIMEOUT, 0);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($jsonData));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'token: ad2355a9d54335e27e2c3a3ed5b6e381'
        ));

        $response = curl_exec($curl);
        if ($response === false) {
            $error = curl_error($curl);
            $this->response(FALSE, 'cURL error: ' . $error, [], 500);
            return;
        }

        curl_close($curl);
        echo $response;
    }

    public function contactForm()
    {
        $captcha = $this->input->post('captcha_value');
        if ($captcha) {
            try {
                $captcha_session = $this->session->userdata('captchaword');

                if (!empty($captcha) && $captcha == $captcha_session) {
                    $post = $this->input->post();

                    $config = array(
                        array(
                            'field' => 'client_name',
                            'label' => 'Client Name',
                            'rules' => 'required|trim'
                        ),
                        array(
                            'field' => 'email',
                            'label' => 'Email',
                            'rules' => 'required|trim|valid_email',
                        ),
                        array(
                            'field' => 'phone_no',
                            'label' => 'Phone No ',
                            'rules' => 'required|trim'
                        ),
                        array(
                            'field' => 'message',
                            'label' => 'Message ',
                            'rules' => 'required|trim'
                        )
                    );

                    $this->form_validation->set_rules($config);

                    if ($this->form_validation->run() == FALSE) {
                        $this->response(FALSE, validation_errors(), [], 400);
                        return;
                    }
                    $this->curl_data('insertDetails', $post);
                } else {
                    $this->response(FALSE, 'Wrong Captcha !', [], 400);
                }
            } catch (Exception $e) {
                $this->response(FALSE, $e->getMessage(), [], 500);
            }
        } else {
            $this->response(FALSE, 'Please Enter Captcha', [], 400);
        }
    }

    public function scheduleDemo()
    {
        $captcha = $this->input->post('captcha_value');
        if ($captcha) {
            try {
                $captcha_session = $this->session->userdata('captchaword');

                if (!empty($captcha) && $captcha == $captcha_session) {
                    $post = $this->input->post();

                    $config = array(
                        array(
                            'field' => 'client_name',
                            'label' => 'Client Name',
                            'rules' => 'required|trim'
                        ),
                        array(
                            'field' => 'email',
                            'label' => 'Email',
                            'rules' => 'required|trim|valid_email',
                        ),
                        array(
                            'field' => 'phone_no',
                            'label' => 'Phone No ',
                            'rules' => 'required|trim'
                        ),
                        array(
                            'field' => 'phone_no',
                            'label' => 'Phone No ',
                            'rules' => 'required|trim'
                        ),
                        array(
                            'field' => 'message',
                            'label' => 'Message ',
                            'rules' => 'required|trim'
                        )
                    );

                    $this->form_validation->set_rules($config);

                    if ($this->form_validation->run() == FALSE) {
                        $this->response(FALSE, validation_errors(), [], 400);
                        return;
                    }
                    $this->curl_data('scheduleDemo', $post);
                } else {
                    $this->response(FALSE, 'Wrong Captcha !', [], 400);
                }
            } catch (Exception $e) {
                $this->response(FALSE, $e->getMessage(), [], 500);
            }
        } else {
            $this->response(FALSE, 'Please Enter Captcha', [], 400);
        }
    }

    public function phoneNumberSend()
    {
        try {
            $data = $this->input->post();
            // print_r($data);die;
            if (empty($data)) {
                echo json_encode(array('success' => false, 'statuscode' => 400, 'message' => 'Please Enter Required field'));
                return;
            }

            $config = array(
                array(
                    'field' => 'client_name',
                    'label' => 'Client Name',
                    'rules' => 'trim'
                ),
                array(
                    'field' => 'company_name',
                    'label' => 'Company Name',
                    'rules' => 'trim'
                ),
                array(
                    'field' => 'phone_no',
                    'label' => 'Phone Number',
                    'rules' => 'required|trim'
                )
            );

            $this->form_validation->set_data($data);
            $this->form_validation->set_rules($config);

            if ($data['client_name'] || $data['company_name']) {

                if ($this->form_validation->run() == FALSE) {
                    $this->response(FALSE, validation_errors(), [], 400);
                    return;
                }
                $this->curl_data('verifyPhoneEmail', $data);
            } else {
                $this->form_validation->set_rules('client_name', 'Please Provide Either Your Name or the Name of Your Company', 'callback_check_at_least_one_filled');
            }
        } catch (Exception $e) {
            echo json_encode(array('success' => false, 'statuscode' => 500, 'message' => $e->getMessage()));
        }
    }

    //email
    public function sendEmail()
    {
        try {
            $data = $this->input->post();
            // print_r($data);die;
            $config = array(
                array(
                    'field' => 'client_name',
                    'label' => 'Client Name',
                    'rules' => 'trim'
                ),
                array(
                    'field' => 'company_name',
                    'label' => 'Company Name',
                    'rules' => 'trim'
                ),
                array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required|trim'
                )
            );

            $this->form_validation->set_data($data);
            $this->form_validation->set_rules($config);

            if ($this->form_validation->run() == FALSE) {
                $this->response(FALSE, validation_errors(), [], 400);
                return;
            }

            if ($data['client_name'] || $data['company_name']) {

                if ($this->form_validation->run() == FALSE) {
                    $this->response(FALSE, validation_errors(), [], 400);
                    return;
                }
                $this->curl_data('verifyPhoneEmail', $data);
            } else {
                $this->form_validation->set_rules('client_name', 'Please Provide Either Your Name or the Name of Your Company', 'callback_check_at_least_one_filled');
            }
        } catch (Exception $e) {
            echo json_encode(array('success' => false, 'statuscode' => 500, 'message' => $e->getMessage()));
        }
    }

    public function verify_sms_otp()
    {
        try {
            $data = $this->input->post();
            if ($data['mobile_verification_code'] != '') {
                $config = array(
                    array(
                        'field' => 'mobile_verification_code',
                        'label' => 'Phone OTP',
                        'rules' => 'required|trim'
                    )
                );
                $this->form_validation->set_rules($config);
                if ($this->form_validation->run() == FALSE) {
                    $this->response(FALSE, validation_errors(), [], 400);
                    return;
                }
                $this->curl_data('verifyOTP', $data);
            } else {
                echo json_encode(array('success' => false, 'statuscode' => 400, 'message' => 'Please Enter OTP'));
            }
        } catch (Exception $e) {
            echo json_encode(array('success' => false, 'statuscode' => 500, 'message' => $e->getMessage()));
        }
    }

    public function verify_email_otp()
    {
        try {
            $data = $this->input->post();
            // print_r($data);die;
            if ($data['email_verification_code'] != '') {
                $config = array(
                    array(
                        'field' => 'email_verification_code',
                        'label' => 'Email OTP',
                        'rules' => 'required|trim'
                    )
                );
                $this->form_validation->set_rules($config);
                if ($this->form_validation->run() == FALSE) {
                    $this->response(FALSE, validation_errors(), [], 400);
                    return;
                }
                $this->curl_data('verifyOTP', $data);
            } else {
                echo json_encode(array('success' => false, 'statuscode' => 400, 'message' => 'Please Enter OTP'));
            }
        } catch (Exception $e) {
            echo json_encode(array('success' => false, 'statuscode' => 500, 'message' => $e->getMessage()));
        }
    }


    public function countryData()
    {
        try {

            // Token to be sent in the header
            $token = 'ad2355a9d54335e27e2c3a3ed5b6e381';

            $curl = curl_init();

            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10); // Set connection timeout to 10 seconds
            curl_setopt($curl, CURLOPT_TIMEOUT, 30); // Set overall timeout to 30 seconds
            curl_setopt($curl, CURLOPT_URL, 'http://192.168.4.235/SanAcc/crm/Api/getCountry');

            // Set the custom headers including the token
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'token: ' . $token,
            ));

            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($curl);

            if (curl_errno($curl)) {
                echo 'Error: ' . curl_error($curl);
                die();
            }

            curl_close($curl);

            $str_json_format = json_decode($result, true);


            $country_get = $str_json_format['success'];

            echo json_encode(array('success' => true, 'statuscode' => 200, 'data' => $country_get));

        } catch (Exception $e) {
            return array('error' => $e->getMessage(), 'line' => $e->getLine());
        }
    }


    public function stateData()
    {
        try {
            $data = $this->input->post();
            // print_r($data);die;
            if ($data['country_code'] != '') {
                $config = array(
                    array(
                        'field' => 'country_code',
                        'label' => 'Country',
                        'rules' => 'required|trim'
                    )
                );
                $this->form_validation->set_rules($config);
                if ($this->form_validation->run() == FALSE) {
                    $this->response(FALSE, validation_errors(), [], 400);
                    return;
                }
                $this->curl_data('getStatesByCountryCode', $data);
            } else {
                $this->response(FALSE, 'Please Select Country', [], 400);
            }
        } catch (Exception $e) {
            echo json_encode(array('success' => false, 'statuscode' => 500, 'message' => $e->getMessage()));
        }
    }

    public function registrationWithPlan()
    {
        // $data = $this->input->post();
    

        $captcha = $this->input->post('captcha_value');
        // print_r($captcha);die;

        if ($captcha) {
            try {
                $captcha_session = $this->session->userdata('captchaword');

                if (!empty($captcha) && $captcha == $captcha_session) {
                    $post = $this->input->post();
        
                    $config = array(
                        array(
                            'field' => 'client_name',
                            'label' => 'Client Name',
                            'rules' => 'trim'
                        ),
                        array(
                            'field' => 'company_name',
                            'label' => 'Company Name',
                            'rules' => 'trim',
                        ),
                        array(
                            'field' => 'phone_no',
                            'label' => 'Phone No ',
                            'rules' => 'required|trim'
                        ),
                        array(
                            'field' => 'is_verified_mobile',
                            'label' => 'Phone Verify',
                            'rules' => 'trim'
                        ),
                        
                        array(
                            'field' => 'mobile_verification_code',
                            'label' => 'Mobile Code',
                            'rules' => 'trim'
                        ),
                        
                        array(
                            'field' => 'is_verified_email',
                            'label' => 'Email Verify',
                            'rules' => 'trim'
                        ),
                        array(
                            'field' => 'email',
                            'label' => 'Email',
                            'rules' => 'required|trim|valid_email',
                        ),

                        array(
                            'field' => 'email_verification_code',
                            'label' => 'Email Code',
                            'rules' => 'trim'
                        ),

                        array(
                            'field' => 'pan_no',
                            'label' => 'PAN Number',
                            'rules' => 'required|trim'
                        ),
                        
                        array(
                            'field' => 'country',
                            'label' => 'Country Name ',
                            'rules' => 'required|trim'
                        ),

                        array(
                            'field' => 'state',
                            'label' => 'State ',
                            'rules' => 'required|trim'
                        ),

                        array(
                            'field' => 'city',
                            'label' => 'City Name ',
                            'rules' => 'required|trim'
                        ),

                        array(
                            'field' => 'pincode',
                            'label' => 'Pincode ',
                            'rules' => 'required|trim'
                        ),

                        array(
                            'field' => 'address',
                            'label' => 'Address ',
                            'rules' => 'required|trim'
                        ),
                        array(
                            'field' => 'captcha_value',
                            'label' => 'Captcha_value ',
                            'rules' => 'required|trim'
                        )
                    );
                    // print_r($post);die;
                    $this->form_validation->set_rules($config);

                    if ($this->form_validation->run() == FALSE) {
                        $this->response(FALSE, validation_errors(), [], 400);
                        return;
                    }
                    $this->curl_data('insertBuyPlan', $post);
                } else {
                    $this->response(FALSE, 'Wrong Captcha !', [], 400);
                }
            } catch (Exception $e) {
                $this->response(FALSE, $e->getMessage(), [], 500);
            }
        } else {
            $this->response(FALSE, 'Please Enter Captcha', [], 400);
        }
    }


    public function paymentResponse()
    {
        try {
            $data = $this->input->post();
            // print_r($data);die;
            if ($data != '') {
                $this->curl_data('paymentResponse', $data);
            } else {
                echo json_encode(array('success' => false, 'statuscode' => 400, 'message' => 'Something went Worng'));
            }
        } catch (Exception $e) {
            echo json_encode(array('success' => false, 'statuscode' => 500, 'message' => $e->getMessage()));
        }
    }








    


}
