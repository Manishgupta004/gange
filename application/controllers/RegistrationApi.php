
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegistrationApi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function Registration_form()
    {
        $captcha = $this->input->post('captcha_value');
        $captcha_session = $this->session->userdata('captchaword');

        ///check both captcha
        if ($captcha != '') {
            if ($captcha == $captcha_session) {
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
                        'rules' => 'required|trim',
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
                    $this->load->view('registration/index');
                } else {
                    $form_data = $this->input->post();
                    $url = 'http://192.168.4.235/SanAcc/crm/Api/insertDetails';
                    $mainData = json_encode($form_data);

                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => $url,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => $mainData,
                        CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/json',
                            'token: ad2355a9d54335e27e2c3a3ed5b6e381'
                        ),
                    ));

                    $response = curl_exec($curl);

                    if ($response === false) {
                        // Handle cURL error
                        echo 'cURL error: ' . curl_error($curl);
                    } else {
                        echo $response;
                    }

                    curl_close($curl);
                }
            } else {
                echo json_encode(array('success' => false, 'statuscode' => 400, 'message' => 'Wrong Captcha ! ! !'));
            }
        } else {
            echo json_encode(array('success' => false, 'statuscode' => 400, 'message' => 'Please Enter Your Captcha'));
        }
    }


    //city==============================================
    // public function selectCity()
    // {
    //     // print_r($_POST);die;
    //     $state_id = $this->input->post('id');
    //     $city_id = $this->input->post('city_id');
    //     $city = $this->ItemModel->getCity($state_id);
    //     // print_r($city);die;
    //     $output = "<option value=''>-select-</option>";
    //     foreach ($city as $city) {
    //         $sid = $city['id'];
    //         $sname = $city['name'];
    //         $selected = (!empty($city_id) && $city_id == $sid) ? "selected" : "";
    //         $output .= "<option $selected value='" . $sid . "'>" . $sname . "</option>";
    //     }
    //     echo $output;
    // }


    // //state==============================================
    // public function selectState()
    // {

    //     $states = $this->ItemModel->getStates();
    //     $output = "<option value=''>-select-</option>";
    //     foreach ($states as $state) {
    //         $sid = $state['id'];
    //         $sname = $state['name'];
    //         $output .= "<option value='" . $sid . "'>" . $sname . "</option>";
    //     }
    //     echo $output;
    // }

    // public function response($success, $message, $data = array(), $status_code = 200)
    // {
    //     $message = strip_tags($message);
    //     echo json_encode(array('success' => $success, 'message' => $message, 'result' => empty($data) ? new stdClass() : $data, 'status_code' => $status_code));
    //     exit;
    // }


    // function phoneNumberSend()
    // {
    //     $Phone_no = $this->input->post('phone_no');
    //     if ($Phone_no != '') {
    //         $config = array(
    //             array(
    //                 'field' => 'phone_no',
    //                 'label' => 'Phone Number',
    //                 'rules' => 'required|trim'
    //             )
    //         );

    //         $this->form_validation->set_rules($config);

    //         if ($this->form_validation->run() == FALSE) {
    //             $this->response(FALSE, validation_errors());
    //         } else {
    //             $Phone_no = $this->input->post();

    //             $mainData = json_encode($Phone_no);
    //             // $postDataString = http_build_query($postData);
    //             // print_r($postData);die;

    //             $url = 'http://192.168.4.235/SanAcc/crm/Api/send_verification_code';
    //             // $mainData = json_encode($Phone_no);

    //             $curl = curl_init();
    //             curl_setopt_array($curl, array(
    //                 CURLOPT_URL => $url,
    //                 CURLOPT_RETURNTRANSFER => true,
    //                 CURLOPT_ENCODING => '',
    //                 CURLOPT_MAXREDIRS => 10,
    //                 CURLOPT_TIMEOUT => 0,
    //                 CURLOPT_FOLLOWLOCATION => true,
    //                 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //                 CURLOPT_CUSTOMREQUEST => 'POST',
    //                 CURLOPT_POSTFIELDS => $mainData,
    //                 CURLOPT_HTTPHEADER => array(
    //                     'Content-Type: application/json',
    //                     'token: ad2355a9d54335e27e2c3a3ed5b6e381'
    //                 ),
    //             ));

    //             $response = curl_exec($curl);

    //             if ($response === false) {
    //                 // Handle cURL error
    //                 echo 'cURL error: ' . curl_error($curl);
    //             } else {
    //                 echo $response;
    //             }

    //             curl_close($curl);
    //         }
    //     } else {
    //         echo json_encode(array('success' => false, 'statuscode' => 400, 'message' => 'Please Enter Phone Number'));
    //     }
    // }












    // function emailSend()
    // {
    //     $Phone_no = $this->input->post('phone_no');

    //     if ($Phone_no != '') {
    //         $config = array(
    //             array(
    //                 'field' => 'phone_no',
    //                 'label' => 'Phone Number',
    //                 'rules' => 'required|trim'
    //             )
    //         );


    //         $this->form_validation->set_rules($config);

    //         if ($this->form_validation->run() == FALSE) {
    //             $this->response(FALSE, validation_errors());
    //         } else {
    //             $postData = array(
    //                 'phone_no' => $Phone_no
    //             );
    //             $postDataString = http_build_query($postData);

    //             $url = 'http://192.168.4.235/SanAcc/crm/Api/send_verification_code';


    //             $curl = curl_init();
    //             curl_setopt_array($curl, array(
    //                 CURLOPT_URL => $url,
    //                 CURLOPT_RETURNTRANSFER => true,
    //                 CURLOPT_ENCODING => '',
    //                 CURLOPT_MAXREDIRS => 10,
    //                 CURLOPT_TIMEOUT => 0,
    //                 CURLOPT_FOLLOWLOCATION => true,
    //                 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //                 CURLOPT_CUSTOMREQUEST => 'POST',
    //                 CURLOPT_POSTFIELDS => $postDataString,
    //                 CURLOPT_HTTPHEADER => array(
    //                     'Content-Type: application/json',
    //                     'token: ad2355a9d54335e27e2c3a3ed5b6e381'
    //                 ),
    //             ));

    //             $response = curl_exec($curl);

    //             if ($response === false) {
    //                 // Handle cURL error
    //                 echo 'cURL error: ' . curl_error($curl);
    //             } else {
    //                 echo $response;
    //             }

    //             curl_close($curl);
    //         }
    //     } else {
    //         echo json_encode(array('success' => false, 'statuscode' => 400, 'message' => 'Please Enter Phone Number'));
    //     }
    // }
}
