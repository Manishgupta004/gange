<?php
$this->load->view('comman/header');
?>


<!-- =========================== section banner-->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Api Integration</h1>

      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="assets/img/Veda_ERP-2.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>


</section>
<!-- section banner End -->

<!-- =========================== section About-->

<section class="section section-about section-counter ">

  <div class="container">
    <div class="row flex vcenter">
      <!-- row start 2 -->
      <div class="row extclss">
        <!-- <div class="col-md-1"></div> -->
        <div class="col-md-6 d-flex justify-content-center align-items-center" >
          <div class="feature-details aos-init" data-aos="fade-right" data-aos-delay="100">
            <h3 class="section-head section-title-color">Features:</h3>
            <ul class="features-point">
              <li>Webbook API</li>
              <li>IndiaMart API</li>
              <li>Just Dial API</li>
              <li>Facebook API</li>
              <li>Google Form</li>
              <li>Dialer API</li>
              <li>TradeIndia</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
          <div class="feature-images" style="width: 80%;">
            <img src="<?= base_url() ?>assets/img/API-Integration.png" style="width: 100%; height: auto;" alt="API-Integration">
          </div>
        </div>

        <!-- <div class="col-md-1"></div> -->

      </div>
      <!-- row end -->

      <br><br>
      <!-- <div class="content mb-2">
        <p style="font-size: 16px; margin-top: 80px;"><b class="section-title-color">Project Management </b> is important to keep project in check, delivering on time, budget, and scope; it unites clients and teams, creates a vision for success and gets everyone on the same page of what’s needed to stay on track for success. When projects are managed properly, there’s a positive impact that reverberates beyond delivery of ‘the stuff’.</p>
      </div> -->
    </div>
  </div>
</section>

<!-- section About start end -->

<?php $this->load->view('comman/footer'); ?>