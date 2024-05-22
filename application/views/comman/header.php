<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .navbar_lst li a.selected {
      color: #73c5eb;
      font-weight: bold;
    }
  </style> 
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VedaERP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link  href="<?= base_url('assets/img/favicon.png') ?>" rel="icon"> 
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
  
  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  
  <link  href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
  <link  href="<?= base_url('assets/css/animation_style.css') ?>" rel="stylesheet">
  <link  href="<?= base_url('assets/libraries/jquery.toast.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/fontawesome-liberay/css/all.css') ?>" rel="stylesheet">
  
<!-- start -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">
<!-- End -->


  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/custom_mediaQuery.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/animate.min.css') ?>" rel="stylesheet">
</head>

<body>
  <!--======= Header =======-->
  <header id="header" class="fixed-top ">
    <div class="d-flex align-items-center justify-content-around">
      <div class="logo_header">
        <h1 class="logo me-auto"><a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/img/Ved-ERP-Logo-2-1.png" alt="VedaERP-logo"></a></h1>
      </div>
   
    
      <nav id="navbar" class="navbar">
        
        <ul class="navbar_lst">
          
          <li>
          <span class="dot"></span>
            <a class="nav-link dt scrollto active"  href="<?= base_url() ?>">
          Home</a></li>
          <li>
            <span class="dot"></span>
            <a class="nav-link scrollto" href="<?= base_url('about') ?>">About VedaERP</a></li>

          <li class="dropdown" id="sub-list">
          <span class="dot"></span>
            <a class="nav-link feature" href="<?= base_url('features') ?>"><span>Features</span> <i class="bi bi-chevron-down" style="width: auto;"></i></a>
            <ul class="sub-menu" id="lst-drop-down">
              <li id="menu-item-161" class="menu-item menu-item-type-post_type menu-item-object-features current-menu-item menu-item-161">
                <a href="<?= base_url('LeadManagement') ?>" aria-current="page">Lead Management</a>
              </li>
              <li class="sub-item"><a href="<?= base_url('ProjectManagement') ?>">Project Management</a></li>
              <li class="sub-item"><a href="<?= base_url('PurchaseManagement') ?>">Purchase Management</a></li>
              <li class="sub-item"><a href="<?= base_url('ApiIntegration') ?>">API Integration</a></li>
              <li class="sub-item"><a href="<?= base_url('SalesTargetManagement') ?>">Sales Management</a></li>
              <li class="sub-item"><a href="<?= base_url('ContractManagement') ?>">Contract Management</a></li>
              <li class="sub-item"><a href="<?= base_url('CtiIntegration') ?>">CTI Integration</a></li>
              <li class="sub-item"><a href="<?= base_url('GstReport') ?>">GST Report</a></li>
              <li class="sub-item"><a href="<?= base_url('ClientsRate') ?>">Client Rates</a></li>
              <li class="sub-item"><a href="<?= base_url('Reminder') ?>">Reminder</a></li>
              <li class="sub-item"><a href="<?= base_url('LeaveManagement') ?>">Leave Management</a></li>
              <li class="sub-item"><a href="<?= base_url('E_Invoice') ?>">E-Invoice</a></li>
              <li class="sub-item"><a href="<?= base_url('Bar_Coding') ?>">Bar Coding</a></li>
              <li class="sub-item"><a href="<?= base_url('Dymanic_Form') ?>">Dymanic Form</a></li>
            </ul>
          </li>
          <li>
          <span class="dot"></span>
            <a class="nav-link " href="<?= base_url('plans') ?>">Plans</a></li>
          <li>
            <span class="dot"></span>
            <a class="nav-link " href="<?= base_url('Contact') ?>">Contact Us </a></li>
          <li><a class="getstarted scrollto link_redirect" href="<?= base_url('ScheduleDemo') ?>">Schedule Demo</a></li>
          <li><a download class="getstarted scrollto link_redirect" href="<?= base_url('assets/pdf/VedaERP.pdf') ?>">Download Brochure</a></li>
          <li><a  class="getstarted scrollto link_redirect" href="https://acc.vedaerp.com/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>

  </header>
  <!-- End Header -->

<script>
 


</script>