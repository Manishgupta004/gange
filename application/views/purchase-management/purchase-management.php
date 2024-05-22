<?php
$this->load->view('comman/header');
?>


<!-- =========================== section banner-->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
        <h1>Purchase Management</h1>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="100">
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
      <div class="content mb-2" data-aos="fade-right">
        <p style="font-size: 16px; margin-top: 80px;">Careful purchasing records help you anticipate and plan for the future. They provide key insight into company performance, which gives you the tools you need to examine product trends, market cycles, and company spending.&ZeroWidthSpace; Many businesses invest significant resources into inventory stock yet fail to monitor purchasing. Purchasing activity comprises of more than simply buying stock, With an automated system keeping all your purchasing information in one easy-to-search place, it’s simple to track where the money is going. .</p>
      </div>
      <!-- row start 2 -->
      <div class="row extclss">
        <div class="col-md-6 d-flex justify-content-center align-items-center text-lg" data-aos="fade-right">
          <div class="feature-details aos-init">
            <h3 class="section-title-color">Features:</h3>

            <ul class="features-point">
              <li>Purchase Indent</li>
              <li>Purchase Management</li>
              <li>Purchase Order Management</li>
              <li>Debit Note</li>
              <li>Document Upload</li>
              <li>Serial Number Tracking</li>
            </ul>

          </div>
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <div class="feature-images" style="width: 80%;">
            <img src="<?= base_url() ?>assets/img/Purchase-Management.png" style="width: 100%; height: auto;" alt="Purchase-Management">
          </div>
        </div>

      </div>
      <!-- row end -->
    </div>
  </div>
</section>

<!-- section About start end -->

<?php $this->load->view('comman/footer'); ?>