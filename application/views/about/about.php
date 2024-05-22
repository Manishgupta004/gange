<?php
$this->load->view('comman/header');
?>


<!-- =========================== section banner-->
<section id="hero" class="d-flex align-items-center" style="padding: 20px 0;">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>About VedaERP</h1>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="<?= base_url() ?>assets/img/About-us.png" class="img-fluid animated" alt="vedaERP">
            </div>
        </div>
    </div>


</section>
<!-- section banner End -->
<!-- =========================== section About-->
<br><br><br>

<section class="section is-sm section-about">
    <div class="container">
        <div class="row flex vcenter">
            <div class="col-lg-6 animate__animated animate__fadeInLeft">
                <img src="<?= base_url() ?>assets/img/Aboutus_New.png" style="width: 100%; height: auto;" alt="Aboutus_New">

            </div>
            <div class="col-lg-6 animate__animated animate__fadeInRight">
                <div class="section-head">
                    <h2 class="section-title" style="text-align: start;">Best Fit For Your Industry</h2>
                    <p class="section-desc">You can manage multiple companies using our VedaERP Lead Management System, Accounting and Inventory Software. VedaERP supports Unlimited Users, and you can manage leads, purchases, sales, export data to Tally, create challans, invoices, returns, and much more.</p>
                    <p>Goods and Services Tax has provided ease to businesses in India, helping them better comply with the law and streamline the taxation process. To make billing with GST Tax easier, we've brought you VedaERP. It is one of the best ERP software that simplifies your business operations. With just some basic knowledge, you can manage bills efficiently.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section About End -->
<!-- =========================== section testimonial-->
<section class="card-details" style="width: 100%; margin-bottom:40px;">
    <div class="swiper" style="width: 70%;">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="card d-flex align-items-center justify-content-center sd" style="width: 35vw; box-shadow: 1px 0px 22px #9f9f9f26; border: none;">
                    <div class="m-3" style="width:90%;">
                        <p>There is no hardware cost; just sign up and start working. Access anywhere, even if I am in the office or not.</p>
                        <div class="row g-0 align-items-center">
                            <div class="col-md-2">
                                <img src="<?= base_url() ?>assets/img/man1.png" style="width: 100%; height: auto;" alt="Aboutus_New">

                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Great Product</h5><br>
                                    <p class="card-text"><small class="text-muted">Anand Kumar</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="card d-flex align-items-center justify-content-center sd" style="width: 35vw; box-shadow: 1px 0px 22px #9f9f9f26; border: none;">
                    <div class="m-3" style="width:90%;">
                        <p>There is no hardware cost; just sign up and start working. Access anywhere, even if I am in the office or not.</p>
                        <div class="row g-0 align-items-center">
                            <div class="col-md-2">
                                <img src="<?= base_url() ?>assets/img/man1.png" style="width: 100%; height: auto;" alt="Aboutus_New">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Easy to use</h5><br>
                                    <p class="card-text"><small class="text-muted">Vishal kumar</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card d-flex align-items-center justify-content-center sd" style="width: 35vw; box-shadow: 1px 0px 22px #9f9f9f26; border: none;">
                    <div class="m-3" style="width:90%;">
                        <p>There is no hardware cost; just sign up and start working. Access anywhere, even if I am in the office or not.</p>
                        <div class="row g-0 align-items-center">
                            <div class="col-md-2">

                                <img src="<?= base_url() ?>assets/img/man1.png" style="width: 100%; height: auto;" alt="man1">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">No need to Install</h5><br>
                                    <p class="card-text"><small class="text-muted">Ritika Sharma</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>



<!-- =========================== section testimonial end-->




<?php $this->load->view('comman/footer'); ?>