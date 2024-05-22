<?php
$this->load->view('comman/header');
?>


<!-- =========================== section banner-->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Gst Report</h1>

      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="assets/img/Veda_ERP-2.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>


</section>
<!-- section banner End -->

<!-- =========================== section About-->

<section class="section section-about section-counter " >
  <div class="container">
    <div class="row flex vcenter">
    <div class="content" data-aos="fade-left" >
        <p style="font-size: 16px; margin-top: 80px;"></p>
        <p style="font-size:16px;margin-top:-8px;"> Experience seamless Billing with GST compliant invoices and quotations which can be created with just a few clicks. You can provide your Chartered Accountant with all relevant information and receipts about your income and expenses through an easy export of file for your GST returns filling. Get tax and accounting data on your fingertips and know your tax liability with instant access to GST reports. </p>
      </div>

      <!-- row start 2 -->
      <div class="row extclss">
        <div class="col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-right">
          <div class="feature-details aos-init">
            <h3 class="section-head section-title-color">Features:</h3>

            <ul class="features-point">
              <li>For Purchase (B2B, B2C)</li>
              <li>For Sale (B2B, B2C) </li>
              <li>HSN Code wise Purchase/ Sales report</li>
              <li>GSTR 1 </li>
              <li>GSTR 3B </li>
            </ul>
          </div>
        </div>

        <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
          <div class="feature-images" style="width: 80%;">
            <img src="<?= base_url() ?>assets/img/GST-Report.png" style="width: 100%; height: auto;" alt="GST-Report">
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
  </div>
</section>
<!-- section About start end -->

<?php $this->load->view('comman/footer'); ?>