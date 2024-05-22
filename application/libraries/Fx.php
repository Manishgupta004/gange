
<?php
class Fx
{


    function checkSession()
    {
        if (!isset($_SESSION['is_logged_in']) ) {
            $this->logout();
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
    // function __construct()
    // {
    //     $this->load->library('session');
    // }
}
?>