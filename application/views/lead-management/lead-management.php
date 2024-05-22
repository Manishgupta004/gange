<?php
$this->load->view('comman/header');
?>


<!-- =========================== section banner-->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Lead Management</h1>

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
    <div class="content mb-2" data-aos="fade-left" data-aos-delay="100">
        <p style="font-size: 16px; margin-top: 80px;">The CRM adoption rate is on rise among small businesses. The sales team is the most mobile team within an organization and the success of the business depends upon their performance in acquiring business. The <b> Customer Relatioship Management software </b> for will let them manage, update and view their contacts in organized way. It’ll offer insight on the data gathered by them and let them make sense out of it. It let them have better understanding of a customer requirement based on his buying pattern, prepare customized quotes and pitch appropriate services.</p>
      </div>

      <!-- row start  3-->
      <div class="row extclss mt-4" style="margin-top: 80px;">
        <div class="col-md-5 aos-init" data-aos="fade-right" data-aos-delay="100">
          <div class="feature-images">
            <img src="<?= base_url() ?>assets/img/Computer-Screen.png" style="width: 100%; height: auto;" alt="Aboutus_New">
          </div>
        </div>

        <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="feature-details aos-init" data-aos="fade-left" data-aos-delay="100">
            <h3 class="section-head section-title-color">Features:</h3>
            <p class="font-15">
              This automates leave request process, making it hassle-free for both the management and employees. This is robust system which handles the entire request related to leave management process: application, approval/rejection, filing leave, managing leave and analysis.
            </p>

            <ul class="features-point">
              <li>Lead Dashboard</li>
              <li>Create Lead</li>
              <li>Assign Lead</li>
              <li>Dynamic Field</li>
              <li>Lead Scoring</li>
              <li>Lead Scheduling</li>
              <li>Team Tracking</li>
              <li>Portal</li>
              <li>Online Lead/Portal Management</li>
              <li>Call Log</li>
            </ul>


          </div>
        </div>
      </div>
      <!-- row end -->
      <br><br><br>
     
    </div>
  </div>
</section>


<?php $this->load->view('comman/footer'); ?>