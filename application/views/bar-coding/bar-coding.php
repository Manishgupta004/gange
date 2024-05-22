<?php
$this->load->view('comman/header');
?>


<!-- =========================== section banner-->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Bar Coding</h1>
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
  <div class="container">
    <div class="row flex vcenter">
      <!-- row start 2 -->
      <div class="row extclss">
        <div class="col-md-6 d-flex justify-content-center align-items-center" style="font-size: larger;">
          <div class="feature-details aos-init" data-aos="fade-right" data-aos-delay="100">
            <h2 class="section-head section-title-color">Bar Code</h2>
            <p class="section-desc">A barcode is a square or rectangular image consisting of a series of parallel black lines and white spaces of varying widths that can be read by a scanner. Barcodes are applied to products as a means of quick identification. They are used in retail stores as part of the purchase process, in warehouses to track inventory, and on invoices to assist in accounting, among many other uses.</p>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <div class="feature-images" style="width: 100%;">
            <img src="<?= base_url() ?>assets/img/barcode.png" style="width: 100%; height: auto;" alt="barcode">
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
  </div>
</section>

<!-- section About start end -->

<?php $this->load->view('comman/footer'); ?>