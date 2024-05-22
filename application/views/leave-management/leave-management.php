<?php
$this->load->view('comman/header');
?>


<!-- =========================== section banner-->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1 section-head>Leave Management</h1>
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
    <div class="row flex vcenter" >
      <!-- row start 2 -->
      <div class="row extclss">
        <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
          <div class="feature-images" style="width: 80%;">
            <img src="<?= base_url() ?>assets/img/leave-management.png" style="width: 100%; height: auto;" alt="leave-management">
          </div>
        </div>


        <div class="col-md-6" style="display: flex; justify-content: center; align-items: center; font-size: larger;">
          <div class="feature-details aos-init" data-aos="fade-right" data-aos-delay="100">
            <h3 class="section-head section-title-color">Features:</h3>
            <ul class="features-point">
              <li>Week off roster management</li>
              <li>Apply leave from mobile app</li>
              <li>Leave approve/ reject</li>
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
  </div>
</section>
<!-- section About start end -->

<?php $this->load->view('comman/footer'); ?>