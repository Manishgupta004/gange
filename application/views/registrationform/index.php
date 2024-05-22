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


<!-- section banner End -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Registration & Plan</h2>
      <p style="color: black;">Please submit your business information and an Our Business representative
        will follow up with you within 24 hours.</p>
    </div>

    <div class="row">
      <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-9 mb-4">
        <form id="contact_with_plan" class="php-email-form_new needs-validation" novalidate>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="client_name">Your Name</label><span class="error">*</span>
              <input type="text" name="client_name" class="form-control form-control-sm alphabat_only" id="client_name" placeholder="Your Name" aria-describedby="client_nameHelp" maxlength="40" required>
              <div class="invalid-feedback">
                Please Enter Name
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="company_name">Company Name</label><span class="error">*</span> <span id="company_nameErr" class="msg"></span>
              <input type="text" name="company_name" class="form-control form-control-sm alphabat_something" id="company_name" placeholder="Company Name" aria-describedby="company_nameHelp" maxlength="50" required>
              <div class="invalid-feedback">
                Please Enter Company Name
              </div>
            </div>
          </div>

          <div class="row">

            <div class="form-group col-md-6 col-lg-6">
              <input type="hidden" id="is_verified_mobile" name="is_verified_mobile" value="0">
              <label for="phone_no">Phone Number</label><span class="error">*</span>
              <input type="text" name="phone_no" class="form-control form-control-sm numeric_only" id="phone_no" placeholder="Enter Phone Number" aria-describedby="phone_noHelp" maxlength="10" minlength="10" required>
              <span id="chk_icon" class="chk_icon">
                <i class="fa fa-check" aria-hidden="true"></i>
              </span>
              <div class="invalid-feedback">
                Please Enter Phone Number
              </div>
            </div>

            <div class="form-group col-2 col-lg-1 refresh_btn" id="refresh_btn">
              <img src="<?= base_url() ?>assets/img/reload.png" class="img-fluid animated refreshCt" alt="reload" height="25" width="25" onclick="refreshPhoneNumber()">
            </div>

            <div class="form-group col-2 phoneNo_send" id="phoneNo_send">
              <input type="button" class="btn btn-primary  btn-sm " onclick="phoneNoSend(event)" value="Verify">
            </div>

            <div class="form-group col-10 col-md-8 col-lg-3 otp_hide_field" id="otp_hide_field">
              <label for="mobile_verification_code">OTP</label><span class="error">*</span>
              <input type="text" name="mobile_verification_code" class="form-control form-control-sm numeric_only" id="mobile_verification_code" placeholder="Enter Your OTP" maxlength="6" minlength="6" required>
              <div class="invalid-feedback">
                Please Enter OTP
              </div>
            </div>

            <div class="form-group  col-6 col-md-2 phoneNo_OTP" id="phoneNo_OTP">
              <input type="button" class="btn btn-primary  btn-sm" onclick="VerifyPhoneOTP()" value="Verify OTP">
            </div>

          </div>

          <!-- email -->

          <div class="row">

            <div class="form-group col-md-6">
              <input type="hidden" id="is_verified_email" name="is_verified_email" value="0">
              <label for="email">Your Email</label><span class="error">*</span> <span id="emailErr" class="msg"></span>
              <input type="email" class="form-control form-control-sm  " name="email" id="email" placeholder="Email" aria-describedby="emailHelp" maxlength="30" required>
              <span id="chk_icon_email" class="chk_icon">
                <i class="fa fa-check" aria-hidden="true"></i>
              </span>
              <div class="invalid-feedback">
                Please Enter Email
              </div>
            </div>

            <div class="form-group col-2 col-lg-1 refresh_btn" id="refresh_btn_email">
              <img src="<?= base_url() ?>assets/img/reload.png" class="img-fluid animated refreshCt " alt="reload" height="25" width="25" onclick="refreshEmail()">
            </div>

            <div class="form-group col-2 phoneNo_send" id="send_email_btn">
              <input type="button" class="btn btn-primary  btn-sm " onclick="sendEmail(event)" value="Verify">
            </div>

            <div class="form-group  col-10 col-md-8 col-lg-3  otp_hide_field" id="email_otp_field">
              <label for="email_verification_code">OTP</label><span class="error">*</span> <span id="email_otpErr" class="msg"></span>
              <input type="text" name="email_verification_code" class="form-control form-control-sm numeric_only" id="email_verification_code" placeholder="Enter Your OTP" maxlength="6" minlength="6" placeholder="Enter Your OTP" required>
              <div class="invalid-feedback">
                Please Enter OTP
              </div>
            </div>

            <div class="form-group col-6 col-md-2 phoneNo_OTP" id="email_Verify_OTP_btn">
              <input type="button" class="btn btn-primary  btn-sm " onclick="emailVerifyOTP()" value="Verify OTP">
            </div>

          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="pan_no">PAN Number</label><span class="error">*</span>
              <input type="text" name="pan_no" class="form-control form-control-sm  upper_case" id="pan_no" placeholder="Enter You Pan Number" aria-describedby="pan_noHelp" maxlength="10" minlength="10">
              <div class="invalid-feedback">
                Please Enter Pan Number
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="gst_no">GST No</label><span class="error">*</span> <span id="gst_noErr" class="msg"></span>
              <input type="text" name="gst_no" class="form-control form-control-sm upper_case" id="gst_no" placeholder="Enter Your GST Number" maxlength="15" minlength="15">
              <div class="invalid-feedback">
                Please Enter GST No.
              </div>
            </div>

          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="country">Country</label><span class="error">*</span>
              <select id="country" class="form-select form-select-sm" required name="country" onchange="stateList()">
                <option selected value="">-select-</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid Country
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="state">State</label><span class="error">*</span>
              <select id="state" class="form-select form-select-sm" required name="state" required>
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
              <input type="text" id="city" name="city" class="form-control form-control-sm alphabat_only" required placeholder="Please Enter Yor City">
              <div class="invalid-feedback">
                Please Enter City
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="pincode">Pincode</label><span class="error">*</span>
              <input type="text" class="form-control form-control-sm numeric_only" id="pincode" name="pincode" required placeholder="Enter Your Pincode" maxlength="6">
              <div class="invalid-feedback">
                Please Enter Pincode
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="address">Address</label><span class="error">*</span>
            <textarea class="form-control form-control-sm address" name="address" id="address" rows="1" required></textarea>
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
                <input type="text" class="form-control alphabat_and_number" name="captcha_value" id="captcha_value" required placeholder="Enter Your Captcha" minlength="5" maxlength="5">
                <div class="invalid-feedback">
                  Please Enter Captcha
                </div>
              </div>

              <div class="col-6  col-sm-6  col-md-4 col-lg-3 col-xl-3 mt-4">
                <p id="captchaValueErr" class="msg mt-2"></p>
              </div>

            </div>
          </div>

          <div id="overlay">
            <div class="cv-spinner">
              <span class="spinner"></span>
            </div>
          </div>
          <input type="hidden" id="plan_id" name="plan_id" value="<?= $data['plan_id']; ?>">
          <input type="hidden" id="user_id" name="user_id" value="">
          <div class="text-center d-flex mt-3">
            <input type="submit" class="btn btn-primary" onclick="register(event)" value="Submit"></button>
          </div>
        </form>
      </div>

      <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
        <div class="pricing-block shadow new_style">
          <div class="inner-box-new">
            <div class="price-box ">
              <div class="title mb-2"><?= $data['plan_name']; ?></div>
              <h4 class="price"> <img src="<?= base_url() ?>assets/img/rupee.png" class="mb-1" alt="rupee" height="25" width="25"> <?= number_format($data['price']); ?></h4>
            </div>
            <ul class="features">
              <li class="<?php echo ($data['billing_yearly'] == 1) ? "true" : "false"; ?>">Billing Yearly</li>
              <li class="true">Allowed <?= number_format($data['allowed_company']); ?> Company</li>
              <li class="<?php echo ($data['gst_reports'] == 1) ? "true" : "false"; ?>">Generate GST Reports</li>
              <li class="true">Upto <?= number_format($data['allowed_users']); ?> User</li>
              <li class="true">Additional User Charges <?= number_format($data['additional_charges']); ?>*/user/year</li>
              <li class="<?php echo ($data['premium_support'] == 1) ? "true" : "false"; ?>">Premium Support</li>
              <li class="true">Valid for <?= number_format($data['plan_period']) . ' ' . $data['plan_period_type'] ?> </li>
            </ul>
            <div class="btn-box mb-3">
              <a href="<?= base_url('Plans') ?>" class="theme-btn">Change Plan</a>
            </div>
          </div>

        </div>

      </div>

    </div>


  </div>
</section><!-- End Contact Section -->

<?php $this->load->view('comman/footer'); ?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  let state_id = '';
  // ready
  $(document).ready(function() {
    refreshCaptcha();
    $('.new_style').css('border-top', 'solid 3px #47b2e4');
    $('.new_style').css('border-bottom', 'solid 3px #47b2e4');
    $('#overlay').fadeOut('slow');
    fadeInAndFadeOut(['preloader'], 'fadeOut', 'slow');
    hideAndShow(['phoneNo_OTP', 'refresh_btn', 'otp_hide_field', 'chk_icon', 'email_Verify_OTP_btn', 'refresh_btn_email', 'email_otp_field', 'chk_icon_email'], 'hide');
  });

  // captcha
  function refreshCaptcha() {
    $.ajax({
      url: '<?php echo base_url("BuyPlan/refresh_captcha"); ?>',
      type: 'POST',
      success: function(response) {
        $('#captcha_image').html(response);
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
      }
    });
  }

  // phone check
  // function phoneNoSend(event) {
  //   event.preventDefault();
  //   // var user_id = $('#user_id').val();
  //   // var user_id = $('#user_id').val();

  //   var digit = $('#phone_no').val();
  //   var phone_no = digit.replace(/\D/g, '');
  //   var client_name = $('#client_name').val();
  //   var company_name = $('#company_name').val();
  //   if ((client_name != '' || company_name != '')) {
  //     var formdata = $('#contact_with_plan');
  //     var formData = new FormData(formdata[0]);
  //     fadeInAndFadeOut(['overlay'], 'fadeIn', 'slow');
  //     $.ajax({
  //       type: "POST",
  //       url: '<?= base_url('Api/phoneNumberSend') ?>',
  //       data: formData,
  //       contentType: false,
  //       processData: false,
  //       dataType: "JSON",
  //       success: function(response) {
  //         if (response.statuscode == 400) {
  //           $('#overlay').fadeOut('slow');
  //           toster(response.message, 0);
  //         } else if (response.statuscode == 200) {
  //           $('#user_id').val(response.result.id);
  //           fadeInAndFadeOut(['overlay'], 'fadeOut', 'slow');
  //           toster(response.message);
  //           $("#phone_no").prop('readonly', true);
  //           hideAndShow(['refresh_btn', 'otp_hide_field', 'phoneNo_OTP'], 'show');
  //           hideAndShow(['phoneNo_send'], 'hide');
  //         } else if (response.statuscode == 201) {
  //           // hideAndShow(['refresh_btn'], 'show');
  //           $('#user_id').val(response.result.id);
  //           emptyInputFields(['email_verification_code', 'mobile_verification_code']);
  //           var data = response.result
  //           $("#country").val(data.country).trigger('change');
  //           state_id = data.state;
  //           if (data.is_verified_mobile == 1) {
  //             hideAndShow(['chk_icon', 'refresh_btn'], 'show');
  //             hideAndShow(['otp_hide_field', 'email_Verify_OTP_btn', 'email_otp_field'], 'hide');
  //             $('#is_verified_mobile').val(1);
  //             $("#phone_no").prop('readonly', true);
  //           } else {
  //             hideAndShow(['chk_icon'], 'hide');
  //             hideAndShow(['refresh_btn'], 'show');
  //             $('#is_verified_mobile').val(0);
  //           }
  //           if (data.is_verified_email == 1) {

  //             hideAndShow(['chk_icon_email', 'refresh_btn_email'], 'show');
  //             hideAndShow(['send_email_btn'], 'hide');
  //             $('#is_verified_email').val(1);
  //             $("#email").prop('readonly', true);
  //           } else {
  //             hideAndShow(['chk_icon_email'], 'hide');
  //             hideAndShow(['refresh_btn_email'], 'show');
  //             $('#is_verified_email').val(0);
  //           }
  //           fadeInAndFadeOut(['overlay'], 'fadeOut', 'slow');
  //           toster(response.message);
  //           hideAndShow(['phoneNo_send'], 'hide');
  //           $.each(data, function(i, item) {
  //             var fld = $('#contact_with_plan').find('*[name="' + i + '"]');
  //             var type = fld.attr('type');
  //             $(fld).val(item);
  //           });
  //         }

  //       },
  //       error: function(xhr, status, error) {
  //         console.log(error, 'error');
  //       }
  //     });
  //   } else {
  //     toster('Please Provide Either Your Name or the Name of Your Company', 0);
  //     hideAndShow(['phoneNo_OTP'], 'hide');
  //   }
  // }

  function phoneNoSend(event) {
    event.preventDefault();

    var digit = $('#phone_no').val();
    var phone_no = digit.replace(/\D/g, '');
    var client_name = $('#client_name').val();
    var company_name = $('#company_name').val();

    if ((client_name != '' || company_name != '')) {
      var formdata = $('#contact_with_plan')[0];
      var formData = new FormData(formdata);

      // Append the typeCheck key-value pair to the formData object
      formData.append('typeCheck', 'phone');

      fadeInAndFadeOut(['overlay'], 'fadeIn', 'slow');
      $.ajax({
        type: "POST",
        url: '<?= base_url('Api/phoneNumberSend') ?>',
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(response) {
          if (response.statuscode == 400) {
            $('#overlay').fadeOut('slow');
            toster(response.message, 0);
          } else if (response.statuscode == 200) {
            console.log(response.result);
            // $('#user_id').val(response.result.user_id);
            $('#user_id').val(response.result.user_id);
            fadeInAndFadeOut(['overlay'], 'fadeOut', 'slow');
            toster(response.message);
            $("#phone_no").prop('readonly', true);
            hideAndShow(['refresh_btn', 'otp_hide_field', 'phoneNo_OTP'], 'show');
            hideAndShow(['phoneNo_send'], 'hide');
          } else if (response.statuscode == 201) {
            $('#user_id').val(response.result.id);
            emptyInputFields(['email_verification_code', 'mobile_verification_code']);
            var data = response.result;
            $("#country").val(data.country).trigger('change');
            state_id = data.state;
            if (data.is_verified_mobile == 1) {
              hideAndShow(['chk_icon', 'refresh_btn'], 'show');
              hideAndShow(['otp_hide_field', 'email_Verify_OTP_btn', 'email_otp_field'], 'hide');
              $('#is_verified_mobile').val(1);
              $("#phone_no").prop('readonly', true);
            } else {
              hideAndShow(['chk_icon'], 'hide');
              hideAndShow(['refresh_btn'], 'show');
              $('#is_verified_mobile').val(0);
            }
            if (data.is_verified_email == 1) {
              hideAndShow(['chk_icon_email', 'refresh_btn_email'], 'show');
              hideAndShow(['send_email_btn'], 'hide');
              $('#is_verified_email').val(1);
              $("#email").prop('readonly', true);
            } else {
              hideAndShow(['chk_icon_email'], 'hide');
              hideAndShow(['refresh_btn_email'], 'show');
              $('#is_verified_email').val(0);
            }
            fadeInAndFadeOut(['overlay'], 'fadeOut', 'slow');
            toster(response.message);
            hideAndShow(['phoneNo_send'], 'hide');
            $.each(data, function(i, item) {
              var fld = $('#contact_with_plan').find('*[name="' + i + '"]');
              var type = fld.attr('type');
              $(fld).val(item);
            });
          }
        },
        error: function(xhr, status, error) {
          console.log(error, 'error');
        }
      });
    } else {
      toster('Please Provide Either Your Name or the Name of Your Company', 0);
      hideAndShow(['phoneNo_OTP'], 'hide');
    }
  }






  //blank phone Number
  function refreshPhoneNumber() {
    $('#phone_no').removeAttr('readonly');
    hideAndShow(['otp_hide_field', 'phoneNo_OTP', 'chk_icon'], 'hide');
    hideAndShow(['phoneNo_send'], 'show');
    emptyInputFields(['phone_no', 'user_id', 'otp_hide_field', 'mobile_verification_code']);
  }

  //blank email
  function refreshEmail() {
    $('#email').removeAttr('readonly');
    emptyInputFields(['email_verification_code', 'email', 'user_id']);
    hideAndShow(['email_otp_field', 'email_Verify_OTP_btn', 'chk_icon_email'], 'hide');
    hideAndShow(['send_email_btn'], 'show');
  }

  //verify OTP 
  function VerifyPhoneOTP() {
    let phoneValue = $('#phone_no').val();
    var Ph_OTP = $('#mobile_verification_code').val();
    var user_id = $('#user_id').val();
    var phone_no = phoneValue.replace(/\D/g, '');

    if (Ph_OTP.length === 6) {
      fadeInAndFadeOut(['overlay'], 'fadeIn', 'slow');
      $.ajax({
        type: "POST",
        url: '<?= base_url('Api/verify_sms_otp') ?>',
        data: {
          phone_no: phone_no,
          mobile_verification_code: Ph_OTP,
          verification_type: 'sms',
          id: user_id,
        },
        dataType: "JSON",
        success: function(response) {
          if (response.statuscode == 400) {
            toster(response.message, 0);
            fadeInAndFadeOut(['overlay'], 'fadeOut', 'slow');
          } else if (response.statuscode == 200) {

            $('email_verification_code').val(1);
            emptyInputFields(['email_verification_code', 'mobile_verification_code']);

            hideAndShow(['otp_hide_field', 'refresh_btn', 'phoneNo_OTP'], 'hide');
            hideAndShow(['chk_icon', ], 'show');
            fadeInAndFadeOut(['overlay'], 'fadeOut', 'slow');
            $('#is_verified_mobile').val(1);
            toster(response.message);
          }
        },
        error: function(xhr, status, error) {
          toster('Api is not correct', 0);
        }
      });
    }
  }

  //send sendEmail
  function sendEmail(event) {
    event.preventDefault();
    var client_name = $('#client_name').val();
    var company_name = $('#company_name').val();
    var email = $('#email').val();
    if ((client_name != '' || company_name != '')) {
      fadeInAndFadeOut(['overlay'], 'fadeIn', 'slow');
      var formdata = $('#contact_with_plan');
      var formData = new FormData(formdata[0]);

      formData.append('typeCheck', 'Email');

      $.ajax({
        type: "POST",
        url: '<?= base_url('Api/sendEmail') ?>',
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(response) {
          if (response.statuscode == 400) {
            fadeInAndFadeOut(['overlay'], 'fadeOut', 'slow');
            toster(response.message, 0);
          } else if (response.statuscode == 200) {
            console.log(response);
            // $('#user_id').val(response.result.id);
            $('#user_id').val(response.result.user_id);
            hideAndShow(['send_email_btn'], 'hide');
            hideAndShow(['refresh_btn_email', 'email_otp_field', 'email_Verify_OTP_btn'], 'show');
            fadeInAndFadeOut(['overlay'], 'fadeOut', 'slow');
            toster(response.message);
            $("#email").prop('readonly', true);
          } else if (response.statuscode == 201) {
            $('#user_id').val(response.result.id);
            emptyInputFields(['email_verification_code', 'mobile_verification_code']);
            toster(response.message);
            hideAndShow(['send_email_btn', 'phoneNo_send', 'otp_hide_field', 'phoneNo_OTP'], 'hide');
            hideAndShow(['chk_icon_email', 'refresh_btn_email'], 'show');
            fadeInAndFadeOut(['overlay'], 'fadeOut', 'slow');
            var data = response.result;

            if (data.is_verified_mobile == 1) {
              hideAndShow(['refresh_btn', 'chk_icon'], 'show');
              $('#is_verified_mobile').val(1);
              $("#phone_no").prop('readonly', true);
            } else {
              hideAndShow(['chk_icon'], 'hide');
              $('#is_verified_mobile').val(0);
            }
            if (data.is_verified_email == 1) {
              hideAndShow(['chk_icon_email', 'refresh_btn_email'], 'show');
              hideAndShow(['send_email_btn'], 'hide');
              $("#email").prop('readonly', true);
              $('#is_verified_email').val(1);
            } else {
              hideAndShow(['chk_icon_email'], 'hide');
              $('#is_verified_email').val(0);
            }

            $.each(data, function(i, item) {
              var fld = $('#contact_with_plan').find('*[name="' + i + '"]');
              var type = fld.attr('type');
              $(fld).val(item);
            });
          }

        }
      });
    } else {
      toster('Please Provide Either Your Name or the Name of Your Company', 0);
      hideAndShow(['otp_hide_field'], 'hide');
      hideAndShow(['refresh_btn_email'], 'show');
    }
  }

  //send emailVerifyOTP
  function emailVerifyOTP() {
    var email = $('#email').val();
    var email_otp = $('#email_verification_code').val();
    var user_id = $('#user_id').val();
    if (email_otp.length === 6) {
      fadeInAndFadeOut(['overlay'], 'fadeIn', 'slow');
      $.ajax({
        type: "POST",
        url: '<?= base_url('Api/verify_email_otp') ?>',
        data: {
          email: email,
          email_verification_code: email_otp,
          verification_type: 'email',
          id: user_id,
        },
        dataType: "JSON",
        success: function(data) {
          if (data.statuscode == 400) {
            fadeInAndFadeOut(['overlay'], 'fadeOut', 'slow');
            toster(data.message, 0);
          } else if (data.statuscode == 200) {
            emptyInputFields(['email_verification_code', 'mobile_verification_code']);
            fadeInAndFadeOut(['overlay'], 'fadeOut', 'slow');
            $('#is_verified_email').val(1);
            toster(data.message);
            hideAndShow(['email_otp_field', 'email_Verify_OTP_btn'], 'hide');
            hideAndShow(['chk_icon_email', 'refresh_btn_email'], 'show');
          }
        }
      });
    } else {
      toster('Please Enter 6 digit OTP', 0);
    }
  }

  //country
  function countryData() {
    $.ajax({
      method: "POST",
      url: '<?= base_url('Api/countryData') ?>',
      datatype: 'JSON',
      success: function(result) {
        var CountryData = JSON.parse(result);
        var CountryDatanew = CountryData.data;

        var dropdown = $('#country');
        dropdown.empty();

        dropdown.append($('<option selected value="IND">India</option>')).trigger('change');

        $.each(CountryDatanew.countries, function(index, CountryDatanew) {
          var option = $('<option ></option>').val(CountryDatanew.country_code).text(CountryDatanew.country_name);
          dropdown.append(option);
        });
      }
    });
  }
  countryData();

  //state
  function stateList() {
    let country_code = $('#country').val();
    $.ajax({
      type: "POST",
      url: '<?= base_url('Api/stateData') ?>',
      data: {
        country_code: country_code,
      },
      dataType: "JSON",
      success: function(data) {
        var stateDatanew = data.result;
        var dropdown = $('#state');
        dropdown.empty();
        dropdown.append($('<option></option>').val("").text("select"));
        $.each(stateDatanew.states, function(index, stateDatanew) {
          let option = '';
          if (state_id != '' && state_id == stateDatanew.state_id) {
            option = $('<option selected ></option>').val(stateDatanew.state_id).text(stateDatanew.state_name);
            state_id = '';
          } else {
            option = $('<option></option>').val(stateDatanew.state_id).text(stateDatanew.state_name);
          }
          dropdown.append(option);
        });
      },
      error: function(xhr, status, error) {
        toster('Api is not correct', 0);
      }
    });
  }

  //checkfinalvalid
  function finalValidate() {
    $('#mobile_verification_code').removeAttr('required');
    $('#email_verification_code').removeAttr('required');
    var formData = $('#contact_with_plan');
    formData[0].classList.add('was-validated');
    $('#plan_id').val('<?= $data['plan_id']; ?>');
    return formData[0].checkValidity();
  }

  //final submit
  function register(event) {
    // alert('HERE');
    let condition = finalValidate();
    console.log(condition);
    if (condition) {
      event.preventDefault();
      var client_verify = $('#is_verified_mobile').val();
      var company_verify = $('#is_verified_email').val();
      if (client_verify != '' && company_verify != '') {
        fadeInAndFadeOut(['overlay'], 'fadeIn', 'slow');
        $.ajax({
          type: "POST",
          url: '<?= base_url('Api/registrationWithPlan') ?>',
          data: new FormData($('#contact_with_plan')[0]),
          contentType: false,
          processData: false,
          dataType: "JSON",
          success: function(response) {
            // console.log(response);
            var data = response.result;
            if (response.statuscode == 400) {
              fadeInAndFadeOut(['overlay'], 'fadeOut', 'slow');
              toster(response.message, 0);
            } else if (response.statuscode == 200) {
              fadeInAndFadeOut(['overlay'], 'fadeOut', 'slow');
              toster(response.message);
              $("#phone_no").prop('readonly', true);
              hideAndShow(['refresh_btn', 'otp_hide_field', 'phoneNo_OTP'], 'show');
              hideAndShow(['phoneNo_send'], 'hide');
              paymentGayway(data);
            }
          },
          error: function(xhr, status, error) {
            // Handle error response
            toster('Api is not correct when registration', 0);
          }
        });
      } else {
        toster('Please verify both the Email Address and the Phone Number', 0);
      }
    }
  }

  //paymentGateway
  function paymentGayway(data) {
    if (data.res == 'success') {
      var paymentOption = "";
      if ('success' == 'success') {
        var orderID = data.order_number;
        var orderNumber = data.order_number;
        var options = {
          "key": data.razorpay_key, // Enter the Key ID generated from the Dashboard
          "amount": data.userData.amount, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
          "currency": "INR",
          "name": "San Softwares", //your business name
          "description": data.userData.description,
          "image": "https://www.tutorialswebsite.com/wp-content/uploads/2022/02/cropped-logo-tw.png",
          "order_id": data.userData.rpay_order_id, //This is a sample Order ID. Pass 
          "handler": function(response) {
            PaymentResponse(response);
          },
          "modal": {
            "ondismiss": function() {
              window.location.replace("<?= base_url('Plans') ?>");
            }
          },
          "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
            "name": data.userData.name, //your customer's name
            "email": data.userData.email,
            "contact": data.userData.mobile //Provide the customer's phone number for better conversion rates 
          },
          "notes": {
            "address": "San Softwares"
          },
          "config": {
            "display": {
              "blocks": {
                "banks": {
                  "name": 'Pay using ' + paymentOption,
                  "instruments": [

                    {
                      "method": paymentOption
                    },
                  ],
                },
              },
              "sequence": ['block.banks'],
              "preferences": {
                "show_default_blocks": true,
              },
            },
          },
          "theme": {
            "color": "#3399cc"
          }
        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function(response) {

          window.location.replace("<?= base_url('Payment_failed') ?>");


        });
        rzp1.open();
        // e.preventDefault();
      }

    }

  }

  //payment Response
  function PaymentResponse(response) {
    var user_id = $('#user_id').val();
    $.ajax({
      type: "POST",
      url: '<?= base_url('Api/paymentResponse') ?>',
      data: {
        response: response,
        user_id: user_id
      },
      dataType: "JSON",
      success: function(resp) {
        console.log(resp);
        if (resp) {
          window.location.href = "<?= base_url('Payment_success') ?>"
        }

      }
    });
  }
</script>