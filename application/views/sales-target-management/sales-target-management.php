<?php
$this->load->view('comman/header');
?>


<!-- =========================== section banner-->
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Sales Management</h1>
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
    <div class="row flex vcenter" >

    <div class="content" data-aos="fade-right">
        <p style="font-size: 16px; margin-top: 80px;">Comprehensive analytics is essential for improved business planning. Implementing a good sales management software system can help a business assess sales cycle, target characteristics, competitive positioning, and the effectiveness of sales campaigns and tools.<br>
          Taxpayers/transporters need not visit any tax officers/checkposts for generation of e-way Bill/movement of goods across States.
      </div>
      <!-- row start 2 -->
      <div class="row extclss">
        <div class="col-md-6" data-aos="fade-left">
          <div class="feature-images" style="width: 80%;">
            <img src="<?= base_url() ?>assets/img/Sale-Managment.png" style="width: 100%; height: auto;" alt="Sale-Managment">
          </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-right">
          <div class="feature-details aos-init">
            <h3 class="section-head section-title-color">Features:</h3>

            <ul class="features-point">
              <li>Sale Order</li>
              <li>Invoice</li>
              <li>Credit Note</li>
              <li>E-Way Bill Generation</li>
              <li>Bar Coding</li>
              <li>Serial Number </li>
              <li>Dynamic Field</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
  </div>
</section>

<?php $this->load->view('comman/footer'); ?>