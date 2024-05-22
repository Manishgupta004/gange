<?php
$this->load->view('comman/header');
?>


<!-- =========================== section banner-->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Cti Integration</h1>

      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="assets/img/Veda_ERP-2.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>


</section>
<!-- section banner End -->

<!-- =========================== section About-->

<section class="section section-about section-counter">
<br><br>
  <div class="container">
    <div class="row flex vcenter">
      <!-- row start 2 -->
      <div class="content" data-aos="fade-left">
        <p>
          Over the years, we have helped our clients keep track of all inbound and outbound calls and make informed decisions. CTI integration helps them in improving the productivity of human agents by connecting computers with telephone systems. It enables them to initiate and manage phone calls using their personal computer or laptop. A CTI integration offers tremendous opportunity to build relationships, manage information and obtain powerful analytics and increase customer relationships throughout your organization.
        </p>
      </div>

      <div class="row extclss">
        <!-- <div class="col-md-1"></div> -->
        <div class="col-md-6" data-aos="fade-left" >
          <div class="feature-images" style="width: 80%;">
            <img src="<?= base_url() ?>assets/img/CTI.png" style="width: 100%; height: auto;" alt="CTI">
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center align-items-center">
          <div class="feature-details" data-aos="fade-right" >
            <h3 class="section-head section-title-color">Features:</h3>
            <ul class="features-point">
              <li>Click to call</li>
              <li>Hide Phone Number</li>
              <li>Incoming call popup</li>
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