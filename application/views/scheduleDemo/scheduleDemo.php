<?php
$this->load->view('comman/header');
?>

<!-- =========================== section banner-->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Schedule Demo</h1>

      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="<?= base_url() ?>assets/img/schedule-demo.png" class="img-fluid animated" alt="schedule-demo">
      </div>
    </div>
  </div>

</section>

<br><br><br>
<!-- section banner End -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Schedule Demo</h2>
      <p style="color: black;">Please submit your business information and an Our Business representative
        will follow up with you within 24 hours.</p>
    </div>

    <div class="row">

      <div class="col-lg-5  d-flex align-items-stretch">
        <div class="info">
          <div class="address"> <a aria-label="View larger map" target="_blank" jstcache="20" href="https://maps.google.com/maps?ll=28.390634,77.066881&amp;z=16&amp;t=m&amp;hl=en&amp;gl=IN&amp;mapclient=embed&amp;cid=6232855617455966337" jsaction="mouseup:placeCard.largerMap"></a>
            <i class="bi bi-geo-alt"></i>
            <h4>Location :</h4>
            <p> 419, 4th Floor, M3M Urbana,<br> Sector 67, Gurugram,Haryana 122018<br>

            </p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>E-mail : </h4>
            <p> sales@sansoftwares.com,<br> support@sansoftwares.com</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call :</h4><span>

              <p>01244310736 <br>
                9810018735

              </p>
            </span>
          </div>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.902930732121!2d77.0643056!3d28.3906337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d18605b9ea947%3A0x567f8d2936c2c881!2sSAN%20Softwares%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1643451843438!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 200px;" allowfullscreen></iframe>
        </div>
      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form id="contact_details" class="php-email-form needs-validation" novalidate>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="client_name">Your Name</label><span class="error">*</span>
              <input type="text" name="client_name" class="form-control form-control-sm alphabat_something" id="client_name" required placeholder="Name" aria-describedby="client_nameHelp" maxlength="70">
              <div class="invalid-feedback">
                Please Enter Name
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="email">Your Email</label><span class="error">*</span> <span id="emailErr" class="msg"></span>
              <input type="email" class="form-control" name="email" id="email" required placeholder="Email" aria-describedby="emailHelp" maxlength="60">
              <div class="invalid-feedback">
                Please Enter Email
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="PhoneNo">Phone Number</label><span class="error">*</span> <span id="phonenoErr" class="msg"></span>
              <input type="text" name="phone_no" class="form-control numeric_only" id="PhoneNo" required placeholder="Enter Phone Number" minlength="10" aria-describedby="phone_noHelp" maxlength="10">
              <div class="invalid-feedback">
                Please Enter Valid Phone Number
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="company_name">Company Name</label><span class="error">*</span> <span id="company_nameErr" class="msg"></span>
              <input type="text" name="company_name" class="form-control alphabat_something" id="company_name" required placeholder="Enter Company Name" minlength="10" aria-describedby="company_nameHelp"  maxlength="10">
              <div class="invalid-feedback">
                Please Enter Company Name
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="message">Tell me about your Queries</label><span class="error">*</span> <span id="messageErr" class="msg"></span>
            <textarea class="form-control" name="message" id="message" rows="2" required></textarea maxlength="120">
            <div class="invalid-feedback">
              Please Enter Queries
            </div>
          </div>

          <div class="container p-0">
            <div class="row">

              <div class="col-8  col-sm-6  col-md-3  col-lg-4 col-xl-4 mt-3">
                <p id="captcha_image"></p>
              </div>

              <div class="col-4  col-sm-6  col-md-1  col-lg-1 col-xl-1 mt-4">
                <img src="<?= base_url() ?>assets/img/reload.png" class="img-fluid animated refreshCt" alt="reload" height="25" width="25" onclick="refreshCaptcha()">
              </div>

              <div class="col-6  col-sm-6  col-md-4  col-lg-4 col-xl-4 mt-3">
                <input type="text" class="form-control" name="captcha_value" id="captcha_value" required placeholder="Enter Your Captcha" maxlength="5" minlength="5">
                <div class="invalid-feedback">
                  Please Enter Valid Captcha
                </div>
              </div>

              <div class="col-6  col-sm-6  col-md-4 col-lg-3 col-xl-3 mt-4">
                <p id="captchaValueErr" class="msg mt-2"></p>
              </div>

            </div>
          </div>

          <div id="preloader"></div>

          <div class="text-center d-flex mt-3">
            <button type="submit" class="btn btn-primary" onclick="scheduleDemo(event)">Save</button>
          </div>

        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->



<!-- Modal message -->
<div class="modal fade modal-centered modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
        <div class="wrapper-1">
          <div class="wrapper-2">
            <h1>Thank you !</h1>
            <p>Thank you for schedule demo. Our support team will contact you shortly. </p>

            <a href="<?= base_url('Home') ?>">
              <button class="go-home">
                go home
              </button>
            </a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


<?php $this->load->view('comman/footer'); ?>

<script>
  $(document).ready(function() {
    refreshCaptcha();
    $(window).on('load', function() {
      fadeInAndFadeOut(['preloader'], 'fadeOut', 'slow');
    });
  });

  function refreshCaptcha() {
    $.ajax({
      url: '<?php echo base_url("Contact/refreshCaptcha"); ?>',
      type: 'POST',
      success: function(response) {
        $('#captcha_image').html(response);
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
      }
    });
  }

  function scheduleDemo(event) {
    var form = $('#contact_details')[0];
    if (!form.checkValidity()) {
      return;
    }
    event.preventDefault();
    let captcha = $('#captcha_value').val();
    var formData = new FormData(form);
    fadeInAndFadeOut(['preloader'], 'fadeIn', 'slow');
    $.ajax({
      type: "POST",
      url: '<?= base_url('Api/scheduleDemo') ?>',
      data: formData,
      contentType: false,
      processData: false,
      dataType: "JSON",
      success: function(data) {
        fadeInAndFadeOut(['preloader'], 'fadeOut', 'slow');
        // console.log(data);
        if (data.statuscode == 400) {
          $.toast({
            heading: 'Error',
            text: data.message,
            position: 'top-right',
            showHideTransition: 'plain',
            icon: 'error'
          });
          fadeInAndFadeOut(['preloader'], 'fadeOut', 'slow');
        } else if (data.statuscode == 200) {
          $.toast({
            heading: 'Success',
            text: data.message,
            position: 'top-right',
            icon: 'success'
          });
          refreshCaptcha();
          form.reset(); // Reset the form
          $(form).removeClass('was-validated'); // Remove validation classes
          // hideAndShow(['staticBackdrop'], 'show');
          $('#staticBackdrop').modal('show');

        }
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
      },
      complete: function() {
        fadeInAndFadeOut(['preloader'], 'fadeOut', 'slow');
      }
    });
  }
</script>