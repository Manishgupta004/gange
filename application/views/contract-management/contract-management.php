<?php
$this->load->view('comman/header');
?>


<!-- =========================== section banner-->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Contract Management</h1>

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
      <div class="content mb-2" data-aos="fade-left">
        <p style="font-size: 16px; margin-top: 80px;">Contracts are essentials for all transactions and as regulations are becoming more and more stringent, governance is becoming a key success factor for enterprises. When you have a lot of contracts it is hard to manage, contracts are tacitly extended without any consultation. This is especially painful if the partnership wasn’t particularly successful, but also if you wish to extend the cooperation.The expiration date of a contract is the ideal time to review the current contract with the supplier. Usually, both parties benefit from an extension.</p>
        <p></p>
      </div>

      <div class="row extclss">
        <div class="col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-right">
          <div class="feature-details" style="margin-bottom: 150px;"> 
          <h3 class="section-head section-title-color">Features:</h3>
            <ul class="features-point">
              <li>Contract Creation(Monthly/ Quarterly/ Half yearly/ Annually)</li>
              <li>Email/ SMS Reminder</li>
              <li>Upcoming Contract reminder</li>
              <li>Dashboard for expired contract</li>
              <li>Auto Invoicing</li>
            </ul>
          </div>
        </div>

        <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
          <div class="feature-images" style="width: 80%;">
            <img src="<?= base_url() ?>assets/img/Contract-Management.png" style="width: 100%; height: auto;" alt="Contract-Management">
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
  </div>
</section>

<!-- section About start end -->

<?php $this->load->view('comman/footer'); ?>