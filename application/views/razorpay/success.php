<?php
$this->load->view('comman/header');
?>
<!-- <div class="row">
    <div class="col-lg-12">
        <h1>Thank you</h1>  
        <p style="color:#11a656;">Thank You, Your payment has been processed successfully.</p>   
    </div> 
    <div class="col-lg-12"> 
        <a href="<?php base_url('Home'); ?>" class="pull-right btn btn-info btn-xs" style="margin: 2px;">
        <i class="fa fa-mail-reply"></i> Back To Home</a>                
    </div>  
</div> -->
<!-- /.row -->



<!-- Content Start -->
<section id="hero" class="d-flex align-items-center" style="padding: 20px 0;">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            </div>
        </div>
    </div>


</section>


<table cellpadding="0" cellspacing="0" cols="1" bgcolor="#d7d7d7" align="center" style="max-width: 600px;     margin-top: 20px;">

    <!-- This encapsulation is required to ensure correct rendering on Windows 10 Mail app. -->
    <tr bgcolor="#d7d7d7">
        <td style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;">
            <!-- Seperator Start -->
            <table cellpadding="0" cellspacing="0" cols="1" bgcolor="#d7d7d7" align="center" style="max-width: 600px; width: 100%;">
                <tr bgcolor="#d7d7d7">
                    <td height="10" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                </tr>
            </table>
            <!-- Seperator End -->

            <!-- Generic Pod Left Aligned with Price breakdown Start -->
            <table align="center" cellpadding="0" cellspacing="0" cols="3" bgcolor="white" class="bordered-left-right" style="border-left: 10px solid #d7d7d7; border-right: 10px solid #d7d7d7; max-width: 600px; width: 100%;">
                <tr height="10">
                    <td colspan="3" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                </tr>
                <tr align="center">
                    <td width="36" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    <td class="text-primary" style="color: #F16522;  font-size: 14px; line-height: 16px; vertical-align: top;">
                      
                         <img src="<?= base_url() ?>assets/img/tick.png" class="img-fluid animated refreshCt" alt="GO"  width="50"  style="border: 0; font-size: 0; margin: 0; max-width: 100%; padding: 0;">
                        
                    </td>
                    <td width="36" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                </tr>
                <tr height="17">
                    <td colspan="3" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                </tr>
                <tr align="center">
                    <td width="36" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    <td class="text-primary" style="color: #F16522;  font-size: 14px; line-height: 16px; vertical-align: top;">
                        <h1 style="color: #F16522;  font-size: 30px; font-weight: 700; line-height: 34px; margin-bottom: 0; margin-top: 0;">Payment received</h1>
                    </td>
                    <td width="36" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                </tr>
                <tr height="30">
                    <td colspan="3" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                </tr>
                <tr align="left">
                    <td width="36" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    <td style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;">
                        <p style="color: #464646;  font-size: 14px; line-height: 22px; margin: 0;">
                            Hi [name],
                        </p>
                    </td>
                    <td width="36" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                </tr>
                <tr height="10">
                    <td colspan="3" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                </tr>
                <tr align="left">
                    <td width="36" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    <td style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;">
                        <p style="color: #464646;  font-size: 14px; line-height: 22px; margin: 0;">Your transaction was successful!</p>
                        <br>
                        <p style="color: #464646;  font-size: 14px; line-height: 22px; margin: 0; "><strong>Payment Details:</strong><br />

                            Amount: €$moneyFormatter.format(${amount}) <br />
                            Account: ${accountNumber}.<br /></p>
                        <br>
                        <p style="color: #464646;  font-size: 14px; line-height: 22px; margin: 0;">We advise to keep this email for future reference.&nbsp;&nbsp;&nbsp;&nbsp;<br /></p>
                    </td>
                    <td width="36" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                </tr>
                <tr height="30">
                    <td style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    <td style="border-bottom: 1px solid #D3D1D1; color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    <td style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                </tr>
                <tr height="30">
                    <td colspan="3" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                </tr>
                <tr align="center">
                    <td width="36" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    <td style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;">
                        <p style="color: #464646;  font-size: 14px; line-height: 22px; margin: 0;"><strong>Transaction reference: ${authorizationCode}</strong></p>
                        <p style="color: #464646;  font-size: 14px; line-height: 22px; margin: 0;">Order date: [time] [date]</p>
                        <p style="color: #464646;  font-size: 14px; line-height: 22px; margin: 0;"></p>
                    </td>
                    <td width="36" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                </tr>

                <tr height="20">
                    <td colspan="3" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                </tr>

                <tr align="center">
                    <td width="36" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                    <td style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;">
                        <a class="btn btn-sm btn-success" href="<?= base_url('Home') ?>" >
                            <i class="fa fa-mail-reply"></i> Back To Home</a>
                    </td>
                    <td width="36" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>


                </tr>

                <tr height="10">
                    <td colspan="3" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                </tr>

            </table>
            <!-- Generic Pod Left Aligned with Price breakdown End -->

            <!-- Seperator Start -->
            <table cellpadding="0" cellspacing="0" cols="1" bgcolor="#d7d7d7" align="center" style="max-width: 600px; width: 100%;">
                <tr bgcolor="#d7d7d7">
                    <td height="10" style="color: #464646;  font-size: 14px; line-height: 16px; vertical-align: top;"></td>
                </tr>
            </table>
            <!-- Seperator End -->

        </td>
    </tr>
</table>
<!-- Content End -->

<?php
$this->load->view('comman/footer');
?>