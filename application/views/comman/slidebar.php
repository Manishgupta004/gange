<?php
// session_start();
// if (!isset($_SESSION['id'])) {
//   header('Location: ../loginfile/login.php');
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- latest bootstrap link -->
  <link rel="stylesheet" href=" <?=base_url('assets/libraries/bootstrap.css')?>">
  
  <link rel="stylesheet" href=" <?=base_url('assets/style/slidebar.css')?>">

  <link rel="import" href=" <?=base_url('assets/libraries/js/jquery.js')?>">
  <!-- style login -->
  <link rel="stylesheet" href=" <?=base_url('assets/style/login_style.css')?>">
  
  <!-- dashboard -->
  <link rel="stylesheet" href=" <?=base_url('assets/style/dashboard.css')?>">


  <link rel="stylesheet"  href=" <?=base_url('assets/libraries/jquerui_query-ui.min.css')?>">
 
 
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css
" rel="stylesheet">

  <link rel="stylesheet" href=" <?=base_url('assets/libraries/jquery.auto-complete.min.css')?>">
  
  <link rel="stylesheet"  href=" <?=base_url('assets/libraries/jquery-confirm.min.css')?>">


</head>

<body>
  <div class="loader">
    <div class="spinner-border m-5" role="status">
      <span class="sr-only"></span>
    </div>
  </div>

  <div class="shadow  sidebar close">
    <div id="small_logo" class="logo-details">
      <!-- <i class='bx bxl-c-plus-plus'></i> -->
      <a href="<?= base_url('dashboard') ?>"><img id="small_logo" src="<?= base_url('assets/images/sidebarlogo.png') ?>" alt="sidelogo" style="width: 50px; margin-left: 15px"></span></a>
      <img id="big_logo" src="<?= base_url('assets/images/sidebarlogo1.png') ?>" alt="sidelogo" style="width: 20px; margin-left: 29px"></span>
    </div>

    <ul class="nav-links">
      <li onclick="switchTab(this)" id="dashboard">
        <div class="iocn-link">
          <a href="<?= base_url('dashboard') ?>">
            <img src="<?= base_url('assets/images/dashbaord-icon.png') ?>" style="width: 26px; margin : 23px">
            <span class="link_name">Dashboard</span>
          </a>
          <!-- <i class='bx bxs-chevron-down arrow'></i> -->
        </div>
        <!-- <ul class="sub-menu">
          <li><a href="../loginfile/dashboard.php">Dashboard</a></li>
        </ul> -->
      </li>
      <li onclick="switchTab(this)" id="usermaster">
        <div class="iocn-link">
          <a href="<?= base_url('usermaster') ?>">
          
            <img src="<?= base_url('assets/images/user-master-icon.png') ?>" style="width: 26px; margin : 23px">
            <span class="link_name">User Master</span>
          </a>
          <!-- <i class='bx bxs-chevron-down arrow'></i> -->
        </div>
        <!-- <ul class="sub-menu">
          <li><a href="../UserMaster/usermaster.php">User Master</a></li>
        </ul> -->
      </li>
      <li onclick="switchTab(this)" id="client">
        <div class="iocn-link">
          <a href="<?= base_url('clientmaster') ?>">
          
            <img src="<?= base_url('assets/images/service.png') ?>" style="width: 26px; margin : 23px">
            <span class="link_name">Client Master</span>
          </a>
          <!-- <i class='bx bxs-chevron-down arrow'></i> -->
        </div>
        <!-- <ul class="sub-menu">
          <li><a href="../ClientMaster/clientmaster.php">Client Master</a></li>
        </ul> -->
      </li>
      <li onclick="switchTab(this)" id="item">
        <div class="iocn-link">
          <a href="<?= base_url('itemMaster') ?>">
          
            <img src="<?= base_url('assets/images/item-icon.png') ?>" style="width: 26px; margin : 23px">
            <span class="link_name">Item Master</span>
          </a>
          <!-- <i class='bx bxs-chevron-down arrow'></i> -->
        </div>
        <!-- <ul class="sub-menu">
          <li><a href="../ItemMaster/itemMaster.php">Item Master</a></li>
        </ul> -->
      </li>
      <li onclick="switchTab(this)" id="invoice">
        <div class="iocn-link">
          <a href="<?= base_url('InvoiceMaster') ?>">
          
            <img src="<?= base_url('assets/images/report-icon.png') ?>" style="width: 26px; margin : 23px">
            <span class="link_name">Invoice</span>
          </a>
          <!-- <i class='bx bxs-chevron-down arrow'></i> -->
        </div>
        <!-- <ul class="sub-menu">
          <li><a href="../Invoice/invoice.php">Invoice</a></li>
        </ul> -->
      </li>


    </ul>
  </div>

  <section class="home-section">
    <nav class="d-flex bg-primary navbar-expand-lg nav__bar">
      <div class="home-content container-fluid ">
        <!-- <i id="ty" class='bx bx-menu'></i> -->
        <img class='bx bx-menu' src="<?= base_url('assets/images/horizontal.png') ?>" style="width: 45px; height: 45px;" alt="navigation">
        <!-- <span class="text"></span> -->
      </div>
      <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown ">
          <a href="#" class="dw nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <img class="rounded-circle me-lg-2" src="<?= base_url('assets/images/user.png') ?>" alt="Admin_Pic" style="width: 45px; height: 45px;">
            <span class="d-none d-lg-inline-flex">
              <?php
                                                  echo  $_SESSION['name'];
                                                  ?>
                                                  </span>
          </a>
          <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
            <a href="<?= base_url('login/logout') ?>" class="dropdown-item">Log Out</a>
            
          </div>
        </div>
      </div>
    </nav>

    <script>
      //main
      let arrow = document.querySelectorAll(".arrow");
      for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
          let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
          arrowParent.classList.toggle("showMenu");
          // $("#big_logo").addClass();

        });
      }
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".bx-menu");
      // let img = document.querySelector(".logo-details");
      // console.log(sidebarBtn);
      sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
        $('')
        $("#small_logo").toggle();

      });
    </script>
    <!-- Add 'active' class to the initially selected menu item -->