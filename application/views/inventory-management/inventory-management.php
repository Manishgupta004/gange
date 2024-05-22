<?php
$this->load->view('comman/header');
?>


<!-- =========================== section banner-->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>Inventory Management</h1>

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

            <!-- row start 2 -->
            <div class="row extclss">
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="feature-images" style="width: 80%;">
                        <img src="https://www.vedaerp.com/wp-content/uploads/2021/01/inventory-management.png" alt="veda erp feature" style="width: 89vw; max-width: 100%;">
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center text-lg">

                    <div class="feature-details aos-init" data-aos="fade-right" data-aos-delay="100">
                        <h3 class="section-head">Features:</h3>

                        <ul class="features-point">
                            <li>Item wise inventory management</li>
                            <li>Serial No. wise inventory management</li>
                            <li>Stock Transfer</li>
                            <li>Challan Entry</li>
                            <li>Branch wise entry</li>
                            <li>Stock issue to sales team.</li>
                            <li>Barcoding</li>
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