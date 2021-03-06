<?php
require_once('db_config.php');
require_once('model.php');
?>
<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require("headlinks.php"); ?>
  <title>
    Saved | Follow up & Prayer Requests
  </title>
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <!-- <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="/resources/pages/dashboard.html">
              Saved
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="/resources/pages/dashboard.html">
                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="/resources/pages/profile.html">
                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                    Profile
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="/resources/pages/sign-up.html">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    Sign Up
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="/resources/pages/sign-in.html">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    Sign In
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/product/material-dashboard" class="btn btn-sm mb-0 me-1 bg-gradient-dark">Free download</a>
                </li>
              </ul>
            </div>
          </div>
        </nav> -->
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-success h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('/resources/home.png'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                <div class="card-body" style="font-size:22px; text-align:center;">
                Welcome
                </div>
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder text-success">Saved</h4>
                  <p class="mb-0">Follow up and prayer request form</p>
                  <?php
                    if(isset($flash_message)){
                      echo $flash_message;
                    } 
                  ?>
                </div>
                <div class="card-body">
                  <form role="form" method="POST">
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" name="fullname" required>
                    </div>
                    <label class="form-label">Gender</label>
                    <div class="form-check input-group input-group-outline mb-3">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" id="optionsRadios1" value="Male" style="border-color:green;" checked>
                        Male
                        </label><pre>  </pre>
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" id="optionsRadios2" value="Female" style="border-color:green;">
                        Female
                        </label>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Phone</label>
                      <input type="text" class="form-control" name="phone" required>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Location</label>
                      <input type="text" class="form-control" name="location" required>
                    </div>
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input bg-success" style="border-color:white;" type="checkbox"id="flexCheckDefault"checked required>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="#" title="By submitting this form, I have received Jesus Christ as my Saviour and Lord. And desire to walk in Him: Rooted and built up in Him, and established in the faith, as taught by the Word of God (Bible), abounding therein with thanksgiving." class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-success btn-lg w-100 mt-4 mb-0" name="register">Sign Up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="/sign-in.php" class="text-success text-gradient font-weight-bold">Sign in</a>
                  </p>
                  <rest_nav class="small text-dark">
                      <a href="#">About</a> | 
                      <a href="#">IT & Cloud Operations</a> | 
                      <a href="http://saved.com.ng/elearning/index.php/forum/">Elearning</a> <!--| 
                      <!--<a href="#">Software</a> | -->
                      <!--<a href="#">Technology</a>-->
                    </rest_nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include('footer.php'); ?>
  <!--   Core JS Files   -->
  <script src="/resources/assets/js/core/popper.min.js"></script>
  <script src="/resources/assets/js/core/bootstrap.min.js"></script>
  <script src="/resources/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/resources/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/resources/assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>