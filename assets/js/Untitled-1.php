<?php $this->load->view('comman/header'); ?>

<!-- =========================== section banner-->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Registration</h1>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="<?= base_url() ?>assets/img/plan.png" class="img-fluid animated" alt="Contact-us">
      </div>
    </div>
  </div>

</section>

<br><br><br>
<!-- section banner End -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Registration & Plan</h2>
      <p style="color: black;">Please submit your business information and an Our Business representative
        will follow up with you within 24 hours.</p>
    </div>

    <div class="row">
      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form id="contact_with_plan" action="forms/contact.php" method="post" role="form" class="php-email-form_new needs-validation" novalidate>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="form-label">Your Name</label><span class="error">*</span>
              <input type="text" name="client_name" class="form-control form-control-sm alphabat_only" id="client_name" required placeholder="Your Name" aria-describedby="client_nameHelp" maxlength="40">
              <div class="invalid-feedback">
                Please Enter Name
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="pan_number">Pan Number</label><span class="error">*</span>
              <input type="text" name="pan_number" class="form-control form-control-sm alphabat_and_number" id="pan_number" required placeholder="Enter You Pan Number" aria-describedby="pan_numberHelp" maxlength="15" minlength="15">
              <div class="invalid-feedback">
                Please Enter Pan Number
              </div>
            </div>

          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="phone_no">Phone Number</label><span class="error">*</span> <span id="phonenoErr" class="msg"></span>
              <input type="text" name="phone_no" class="form-control form-control-sm numeric_only" id="PhoneNo" required placeholder="Enter Phone Number" maxlength="10" minlength="10" aria-describedby="phone_noHelp" onkeyup="checkOtpNmber()">
              <div class="invalid-feedback">
                Please Enter Phone Number
              </div>
            </div>


            

            <!-- <div class="form-group col-md-6" id="otp_hide_phone">
              <label for="phone_otp">OTP</label><span class="error">*</span> 
              <input type="text" name="phone_otp" class="form-control form-control-sm alphabat_only" id="phone_otp" required placeholder="Enter Your OTP" maxlength="4" minlength="4">
              <div class="invalid-feedback">
                Please Enter OTP
              </div>
            </div> -->

          </div>


          <div class="row">

            <div class="form-group col-md-6">
              <label for="email">Your Email</label><span class="error">*</span> <span id="emailErr" class="msg"></span>
              <input type="email" class="form-control form-control-sm " name="email" id="email" required placeholder="Email" aria-describedby="emailHelp" maxlength="60">
              <div class="invalid-feedback">
                Please Enter Email
              </div>
            </div>

            <div class="form-group col-md-6" id="otp_hide_email">
              <label for="email_otp">OTP</label><span class="error">*</span> <span id="email_otpErr" class="msg"></span>
              <input type="text" name="email_otp" class="form-control form-control-sm alphabat_only" id="email_otp" required placeholder="Enter Your OTP" maxlength="4" minlength="4" placeholder="Enter Your OTP">
              <div class="invalid-feedback">
                Please Enter OTP
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="Company_name">Company Name</label><span class="error">*</span> <span id="Company_nameErr" class="msg"></span>
              <input type="text" name="Company_name" class="form-control form-control-sm alphabat_only" id="Company_name" required placeholder="Company_name" aria-describedby="Company_nameHelp" maxlength="50" oninput="this.value = this.value.replace(/[^A-za-z\s]/g,'');">
              <div class="invalid-feedback">
                Please Enter Company Name
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="gst_no">GST No</label><span class="error">*</span> <span id="gst_noErr" class="msg"></span>
              <input type="text" name="gst_no" class="form-control form-control-sm alphabat_and_number" id="gst_no" required placeholder="Enter Your GST Number" maxlength="15" minlength="15">
              <div class="invalid-feedback">
                Please Enter GST No.
              </div>
            </div>

          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="Country">Country</label><span class="error">*</span>
              <select id="state" class="form-select form-select-sm" required name="state" onchange="country()">
                <option selected value="">-select-</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid Country
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="state">State</label><span class="error">*</span>
              <select id="state" class="form-select form-select-sm" required name="state" required onchange="city()">
                <option selected value="">-select-</option>
              </select>
              <div class="invalid-feedback">
                Please select option
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="city">City</label><span class="error">*</span>
              <select id="city" class="form-select form-select-sm" required name="city">
                <option selected value="">-select-</option>
              </select>
              <div class="invalid-feedback">
                Please select option
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="pincode">Pincode</label><span class="error">*</span>
              <input type="text" name="gst_no" class="form-control form-control-sm alphabat_only" id="pincode" required placeholder="Enter Your Pincode" maxlength="10">
              <div class="invalid-feedback">
                Please Enter Pin code
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="address">Address</label><span class="error">*</span>
            <textarea class="form-control form-control-sm alphabat_and_number" name="address" id="address" rows="1" required></textarea>
            <div class="invalid-feedback">
              Please Enter Address
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
                <input type="text" class="form-control" name="captcha_value" id="captcha_value" required placeholder="Enter Your Captcha">
              </div>

              <div class="col-6  col-sm-6  col-md-4 col-lg-3 col-xl-3 mt-4">
                <p id="captchaValueErr" class="msg mt-2"></p>
              </div>

            </div>
          </div>

          <!-- <div id="preloader"></div> -->

          <div class="text-center d-flex mt-3">
            <!-- <button type="button" class="btn btn-primary" onclick="insertDetails()">Registration</button> -->
            <input type="submit" class="btn btn-primary" onclick="insertDetails()" value="submit"></button>
          </div>

        </form>
      </div>

      <!-- <div class="col-lg-5">
        <?php $data = $obj; ?>
        <div class="pricing-block wow fadeInUp">
          <div class="inner-box animate__animated animate__fadeInUp" style="margin-top: 0px;">
            <div class="price-box">
              <div class="title_new"><?= $data['plan_name']; ?></div>
              <h4 class="price_new "><?= number_format($data['price']); ?></h4>
            </div>
            <ul class="features features_new">
              <li class="<?php echo ($data['billing_yearly'] == 1) ? "true" : "false"; ?>">Billing Yearly</li>
              <li class="true">Allowed <?= number_format($data['allowed_company']); ?> Company</li>
              <li class="<?php echo ($data['gst_reports'] == 1) ? "true" : "false"; ?>">Generate GST Reports</li>
              <li class="true">Upto <?= number_format($data['allowed_users']); ?> User</li>
              <li class="true">Additional User Charges <?= number_format($data['additional_charges']); ?>*/user/year</li>
              <li class="<?php echo ($data['premium_support'] == 1) ? "true" : "false"; ?>">Premium Support</li>
              <li class="true">Valid for <?= number_format($data['plan_period']) . ' ' . $data['plan_period_type'] ?> </li>
            </ul>
            <div class="btn-box_new">
              <a href="<?= base_url('Plans') ?>" class="theme-btn">Change Plan</a>
            </div>
          </div>

        </div>

      </div> -->

    </div>


  </div>
</section><!-- End Contact Section -->

<?php $this->load->view('comman/footer'); ?>

<script>
  $(document).ready(function() {
    refreshCaptcha();
    $('#otp_hide_phone').hide();
    $('#otp_hide_email').hide();
    $('#otp').hide();
  });

  function refreshCaptcha() {
    $.ajax({
      url: '<?php echo base_url("Contact/refresh_captcha"); ?>',
      type: 'POST',
      success: function(response) {
        $('#captcha_image').html(response);
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
      }
    });
  }

  function checkOtpNmber() {
    var PhoneNo = $('#PhoneNo').val();
    console.log(PhoneNo);
    if (PhoneNo.length >= 10) {
      $('#otp_hide_phone').show();
      // $.ajax({
      //   type: "POST",
      //   url: '<?= base_url('Contact/phoneNo_verification') ?>',
      //   data: formData,
      //   contentType: false,
      //   processData: false,
      //   dataType: "JSON",
      // });
    } else {
      $('#otp_hide_phone').hide();
    }
  }

  // function insertDetails() {
  //   var formElem = document.getElementById('contact_with_plan');
  //   var formData = new FormData(formElem);
  //   // let checkValidation = validation();
  //   let checkValidation = true;
  //   if (checkValidation == true) {
  //     $.ajax({
  //       type: "POST",
  //       url: '<?= base_url('Contact/insertDetails') ?>',
  //       data: formData,
  //       contentType: false,
  //       processData: false,
  //       dataType: "JSON",
  //       success: function(data) {
  //         console.log(data);
  //         if (data.statuscode == 400) {
  //           $('#error_captcha').html(data.message);
  //         } else if (data.statuscode == 200) {
  //           $("#contact_details").trigger("reset");
  //         }
  //       }
  //     });
  //   }
  // }


  // $('#otp_hide_phone').show();
  // $('#otp_hide_email').show();

  // function validation() {
  //   let validation = true;
  //   var name = document.getElementById("name").value;
  //   var nameErr = document.getElementById("nameErr");
  //   const checkname = regex = /^[a-zA-Z ]{2,30}$/;
  //   if (name.trim() === '') {
  //     nameErr.innerHTML = "This feild is required ";
  //     $('#nameErr').show().fadeOut(3000);
  //     return validation = false;
  //   } else if (!name.match(checkname)) {
  //     nameErr.innerHTML = "Fill proprerly";
  //     $('#nameErr').show().fadeOut(3000);
  //     return validation = false;
  //   } else {
  //     nameErr.textContent = "";
  //   };

  //   var email = document.getElementById("email").value;
  //   var emailErr = document.getElementById("emailErr");
  //   const checkemail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  //   if (email.trim() === '') {
  //     emailErr.innerHTML = "This feild is required ";
  //     $('#emailErr').show().fadeOut(3000);
  //     return validation = false;
  //   } else if (!email.match(checkemail)) {
  //     emailErr.innerHTML = "Fill proprerly";
  //     $('#emailErr').show().fadeOut(3000);
  //     return validation = false;
  //   } else {
  //     emailErr.textContent = "";
  //   };

  //   var phoneno = document.getElementById("PhoneNo").value;
  //   var phonenoErr = document.getElementById("phonenoErr");
  //   const phonenoCheck = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  //   if (phoneno.trim() === '') {
  //     phonenoErr.innerHTML = " This feild is required ";
  //     $('#phonenoErr').show().fadeOut(3000);
  //     return validation = false;
  //   } else if (!email.match(phonenoCheck)) {
  //     phonenoErr.innerHTML = "Fill proprerly";
  //     $('#phonenoErr').show().fadeOut(3000);
  //     return validation = false;
  //   } else {
  //     phonenoErr.textContent = "";
  //   };

  //   var query = document.getElementById("Query").value;
  //   var queryErr = document.getElementById("queryErr");
  //   const checkQuery = regex = /^[a-zA-Z ]{2,30}$/;
  //   if (query.trim() === '') {
  //     queryErr.innerHTML = "required ";
  //     $('#queryErr').show().fadeOut(3000);
  //     return validation = false;
  //   } else {
  //     queryErr.textContent = "";
  //   };

  //   var message = document.getElementById("message").value;
  //   var messageErr = document.getElementById("messageErr");
  //   const checkMessage = regex = /^[a-zA-Z ]{2,30}$/;
  //   if (message.trim() === '') {
  //     messageErr.innerHTML = "This feild is required ";
  //     $('#messageErr').show().fadeOut(3000);
  //     return validation = false;
  //   } else if (!message.match(checkMessage)) {
  //     messageErr.innerHTML = "Fill proprerly";
  //     $('#messageErr').show().fadeOut(3000);
  //     return validation = false;
  //   } else {
  //     messageErr.textContent = "";
  //   };

  //   var captchaValue = document.getElementById("captcha_value").value;
  //   var captchaValueErr = document.getElementById("captchaValueErr");
  //   if (captchaValue.trim() === '') {
  //     captchaValueErr.innerHTML = "This feild is required ";
  //     $('#captchaValueErr').show().fadeOut(3000);
  //     return validation = false;
  //   } else {
  //     captchaValueErr.textContent = "";
  //   };
  //   return validation;
  // }






  
  <?php

  ?>
</script>