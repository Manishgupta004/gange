<?php
$this->load->view('comman/header'); ?>

<!-- =========================== section banner-->
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Plans</h1>

      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="<?= base_url() ?>assets/img/plan.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>
</section>
<br><br><br>
<!-- section banner End -->
<!-- =========================== section About-->

<section id="pricing" class="pricing">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Our Exclusive Plans</h2>
    </div>
  </div>

  <div class="outer-box">
    <div class="row" style="margin: 0; padding: 0;">
      <input type="hidden" id="plan_id">
      <!-- Pricing Block -->
      <?php
      $data = $obj['result']['data'];
      // echo '<prev>'; print_r($data);die;
      $first_three_data = array_slice($data, 0, 4);?>
      <?php
      $isre = 0;
      foreach ($first_three_data as $key => $value) { 
        
        ?>
        <div class="pricing-block col-lg-<?= floor(12 / count($first_three_data)) ?> col-md-6 col-sm-12 wow fadeInUp ">
          <div class=" <?php echo ($value['recommended'] == 1  && $isre == 0) ? "recmd" : " "; ?>">
            <div class="Recommed col-sm-12 col-md-12 col-lg-12 ">
              <p class="<?php echo ($value['recommended'] == 1  && $isre == 0) ? "high_light" : " "; ?>">
              <?php echo ($value['recommended'] == 1  && $isre == 0) ? "Recommended" : ""; ?>
            </p>
            </div>
            <div class="inner-box animate__animated animate__fadeInUp" style="margin-top: -30px;">
              <div class="price-box">
                <div class="title"><?= $value['plan_name']; ?></div>
                <h4 class="price amount"><img src="<?= base_url() ?>assets/img/rupee.png" class="mb-1" alt="reload" height="25" width="25"> <?= number_format($value['price']); ?></h4>
              </div>
              <ul class="features li_style">
                <li class="true">Valid for <?= number_format($value['plan_period']) . ' ' . $value['plan_period_type'] ?> </li>
                <li class="<?php echo ($value['billing_yearly'] == 1) ? "true" : "false"; ?>">Billing Yearly</li>
                <li class="true">Allowed <?= number_format($value['allowed_company']); ?> Company</li>
                <li class="<?php echo ($value['gst_reports'] == 1) ? "true" : "false"; ?>">Generate GST Reports</li>
                <li class="true">Upto <?= number_format($value['allowed_users']); ?> User</li>
                <li class="true">Additional User Charges <?= number_format($value['additional_charges']); ?>*/user/year</li>
                <li class="<?php echo ($value['premium_support'] == 1) ? "true" : "false"; ?>">Premium Support</li>
              </ul>
              <div class="btn-box">
                <a href="<?= base_url('BuyPlan/PlanData/').$value['plan_id'] ?>"  class="theme-btn" 
                value="<?= $value['plan_id']; ?>">Buy Plan</a>
              </div>
            </div>
          </div>
        </div>
      <?php
    if($value['recommended'] == 1){
      $isre = 1;
    }

    } ?>

    </div>
  </div>

  <div class="price-bottom-note">
    <p style="font-size:14px;">
      <span style="font-size:13px;">*</span> Customization/Integration charges will be charge extra.
    </p>
    <p style="font-size:14px;">
      <span style="font-size:13px;">*</span> Price may vary on the basis of module selection.
    </p>
    <p style="font-size:14px;">
      <span style="font-size:13px;">*</span> Price are Exclusive of GST or Taxes.
    </p>
  </div>
</section>

<!-- End Pricing Section -->
<?php $this->load->view('comman/footer'); ?>
