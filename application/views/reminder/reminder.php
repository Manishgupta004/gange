<?php
$this->load->view('comman/header');
?>


<!-- =========================== section banner-->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Reminder</h1>

      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="assets/img/Veda_ERP-2.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>


</section>
<!-- section banner End -->

<!-- =========================== section About-->

<section class="section section-about section-counter " style="padding-top: 0px; padding-bottom: 70px; opacity: 1;">
  <div class="container">
    <div class="row flex vcenter" style="margin-top: 15px; margin-bottom: 50px;">
      <!-- row start 2 -->
      <div class="row extclss">
        <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
          <div class="" style="width: 100%;">
            <img src="<?= base_url() ?>assets/img/reminder-1.png" style="width: 100%; height: auto;" alt="reminder-1">
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center align-items-center" style="font-size: larger;">
          <div class="feature-details aos-init" data-aos="fade-right" data-aos-delay="100">
            <h3 class="section-head section-title-color">Features:</h3>

            <ul class="features-point">
              <li>Payment Reminder</li>
              <li>Meeting Reminder</li>
              <li>Birthday Reminder</li>
              <li>Followup reminder </li>
              <li>Customized Reminder </li>
              <li>Reminder Status </li>
            </ul>
          </div>
        </div>

      </div>
      <!-- row end -->
    </div>
  </div>
</section>

<!-- section About start end -->

<?php $this->load->view('comman/footer'); ?>