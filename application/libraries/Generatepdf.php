<?php
defined('BASEPATH') or exit('No direct script access allowed');
error_reporting(0);
require_once    FCPATH. 'vendor\autoload.php';
class Generatepdf
{
    public function __construct(){
        $this->CI = &get_instance();  
    }

    function downloadPDF($invoice, $html, $margin = 0,$mode = 'F'){
        // print_r($html);die;
        $mpdf = new \Mpdf\Mpdf();
        foreach ($html as $key => $content) {
            if ($key > 0) {
                $mpdf->AddPage();
            }
            $mpdf->WriteHTML($content);
        }
        if( $mode =='F') {
            return $mpdf->Output($invoice, $mode);
        } else {
            return $mpdf->Output($invoice, $mode);
           
        }
    }

}
