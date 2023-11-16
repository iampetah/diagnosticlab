<?php
include 'connection/conn.php';
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Request Form</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/image-200x200.jpg" rel="icon">
  <link href="assets/img/image-200x200.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<script type="text/javascript">
  // Created by: Jay Rumsey | http://www.nova.edu/~rumsey/
  // This script downloaded from JavaScriptBank.com

  function UpdateCost() {
    var sum = 0;
    var gn, elem;
    for (i = 0; i < 5; i++) {
      gn = 'request_test' + i;
      elem = document.getElementById(gn);
      if (elem.checked == true) {
        sum += Number(elem.value);
      }
    }
    document.getElementById('amount').value = sum.toFixed(2);
  }
</script>
<style>
  .total {

    position: relative;

    margin-top: -70px;
    margin-left: 77%;
    z-index: 1;
  }





  .input-field label {
    font-size: 15px;
  }

  .tbl-scroll {
    overflow: hidden;
    overflow-y: scroll;
    height: 220px;
  }

  th {
    top: 0;
    z-index: 2;
    position: sticky;
    background-color: white;
  }

  td {
    font-weight: 500;
  }
</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/image-200x200.jpg" alt="">
        <span class="d-none d-lg-block">Diagnosys</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

    <!-- End Messages Dropdown Items -->

        <!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/user-profile-icon-in-flat-style-member-avatar-illustration-on-isolated-background-human-permission-s.ico" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Information Desk</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="admin-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="admin-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8c0 2.21-1.79 4-4 4s-4-1.79-4-4 1.79-4 4-4 4 1.79 4 4ZM4 18c0-2.66 5.33-4 8-4s8 1.34 8 4v2H4v-2Z" clip-rule="evenodd"></path>
</svg> &nbsp;<span>Patient</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         
          <li>
            <a href="patient-table.php">
              <i class="bi bi-circle"></i><span>Patient Table</span>
            </a>
          </li>
          <li>
            <a href="medical-record.php">
              <i class="bi bi-circle"></i><span>Medical Record</span>
            </a>
          </li>


        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M19 4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1Z"></path>
  <path d="M12 11h4"></path>
  <path d="M12 8h4"></path>
  <path d="M8 20V4"></path>
</svg> &nbsp;<span>Request Form</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="add_reforms-editors.php" class="active">
              <i class="bi bi-circle"></i><span>Add Request Form</span>
            </a>
          </li>
          <li>
            <a href="pendinga-forms-elements.php">
              <i class="bi bi-circle"></i><span>Pending Request Forms</span>
            </a>
          </li>
          <li>
            <a href="request-forms-layouts.php">
              <i class="bi bi-circle"></i><span>Request Forms</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="appointment-forms-validation.php">
        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M4.25 10.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5Zm0-6c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5Zm0 12c-.83 0-1.5.68-1.5 1.5s.68 1.5 1.5 1.5 1.5-.68 1.5-1.5-.67-1.5-1.5-1.5Zm3 2.5h14v-2h-14v2Zm0-6h14v-2h-14v2Zm0-8v2h14V5h-14Z"></path>
</svg> &nbsp;<span>Appointments</span>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="transaction-logs.php">
        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M19.8 6a.6.6 0 0 1 .6.6v10.8a.6.6 0 0 1-.6.6H4.2a.6.6 0 0 1-.6-.6V6.6a.6.6 0 0 1 .6-.6h15.6ZM4.2 4.8a1.8 1.8 0 0 0-1.8 1.8v10.8a1.8 1.8 0 0 0 1.8 1.8h15.6a1.8 1.8 0 0 0 1.8-1.8V6.6a1.8 1.8 0 0 0-1.8-1.8H4.2Z"></path>
  <path d="M10.8 9a.6.6 0 0 1 .6-.6h6a.6.6 0 0 1 0 1.2h-6a.6.6 0 0 1-.6-.6ZM9.007 7.975a.6.6 0 0 1 0 .85l-1.8 1.8a.6.6 0 0 1-.85 0l-.6-.6a.6.6 0 1 1 .85-.85l.175.176 1.375-1.376a.6.6 0 0 1 .85 0ZM10.8 13.8a.6.6 0 0 1 .6-.6h6a.6.6 0 1 1 0 1.2h-6a.6.6 0 0 1-.6-.6Zm-1.795-1.025a.6.6 0 0 1 0 .85l-1.8 1.8a.6.6 0 0 1-.85 0l-.6-.6a.6.6 0 1 1 .85-.85l.175.177 1.375-1.377a.6.6 0 0 1 .85 0Z"></path>
</svg> &nbsp;<span>Transaction Logs</span>
        </a>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="archive.php">
        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="m20.54 5.23-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27ZM12 17.5 6.5 12H10v-2h4v2h3.5L12 17.5ZM5.93 4l-.81 1h13.75l-.94-1h-12Z" clip-rule="evenodd"></path>
</svg> &nbsp; &nbsp;
          <span>Archive</span>
        </a>


      </li><!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="registered.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <!-- End Error 404 Page Nav -->

      <!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Request Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Request Form</li>
          <li class="breadcrumb-item active">Add Request Form</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        
          <div class="card">
            <div class="card-body">
              <hr>


              <div class="container">
                <header>Add Request Form</header>
                <form action="add_reqform.php" method="POST">
                  <div class="form first">
                    <div class="details personal">
                    
                      <label>Date</label>
                      <input type="text" name="request_date" class="form-control" id="inputName5" readonly>
                      <script>
                          var d = new Date()
                          var yr = d.getFullYear();
                          var month = d.getMonth() + 1

                          if (month < 10) {
                            month = '0' + month
                          }
                          var date = d.getDate();
                          if (date < 10) {
                            date = '0' + date
                          }
                          var c_date = yr + "-" + month + "-" + date;

                          document.getElementById("inputName5").value = c_date;
                        </script>

                      <div class="fields">
                        <div class="input-field">
                          <label>Lastame</label>
                          <input type="text" id="lastname" name="request_lastname" placeholder="Enter your Lastame" required>
                        </div>
                        <div class="input-field">
                          <label>Firstname</label>
                          <input type="text" id="firstname" name="request_firstname" placeholder="Enter your Firstname" required>
                        </div>
                        <div class="input-field">
                          <label>Gender</label>
                          <select name="request_gender" required>
                            <option disabled selected>Select gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option>Others</option>
                          </select>
                        </div>
                        <div class="input-field">
                          <label>Date of Birth</label>
                          <input type="date" id="dob" name="request_birthdate" placeholder="Enter birth date" required>
                        </div>
                        <div class="input-field">
                          <label>Age</label>
                          <input type="number" id="age" onmousemove="FindAge()" name="request_age" placeholder="Enter Age" required>
                        </div>
                        <div class="input-field">
                          <label>Mobile Number</label>
                          <input type="number" name="request_phone" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                          <label>Province</label>
                          <select name="request_province" id="province" required>
                            <option value="#province">Select Province</option>

                          </select>
                        </div>
                        <div class="input-field">
                          <label>City</label>
                          <select name="request_city" id="city" required>
                            <option value="#city">Select City</option>

                          </select>
                        </div>
                        <div class="input-field">
                          <label>Select Barangay</label>
                          <select name="request_barangay" id="barangay" required>
                            <option value="#barangay">Select Barangay</option>

                          </select>
                        </div>

                        <div class="input-field">
                          <label>Purok</label>
                          <input type="text" name="request_purok" placeholder="Enter your Purok" required>
                        </div>



                      </div>
                    </div>

                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="card">
                            <div class="card-body">


                              <br>

                              <div class="row mb-3">
                                <div class="col-sm-5">

                                  <div class="card">
                                    <div class="card-body">
                                      <h5>Price:</h5>
                                      <div class="tbl-scroll">
                                        <table class="table">
                                          <thead>
                                            <tr>

                                              <th scope="col">Test</th>
                                              <th scope="col">Price</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <?php

                                            $sql = "SELECT * FROM `service_offered`";
                                            $result = mysqli_query($conn, $sql);
                                            if ($result) {
                                              while ($row = mysqli_fetch_assoc($result)) {
                                                $Test = $row['Test'];
                                                $Price = $row['Price'];

                                                echo '<tr>   
                                              <td>' . $Test . '</th>
                                              <td>' . $Price . '</td>
                                           </tr>';
                                              }
                                            }
                                            ?>
                                            </td>

                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-7">
                                  <div class="card">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <h5>Select service </h5>
                                          <div class="form-group">
                                            <select class="form-select" name="request_test[]" aria-label="Default select example">
                                              <option value="">Choose Test</option>
                                              <?php
                                              $service = mysqli_query($conn, "SELECT * FROM service_offered");
                                              while ($c = mysqli_fetch_array($service)) {
                                              ?>
                                                <option value="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                              <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <br>
                                          <div class="form-group">
                                            <select class="form-select" name="request_test[]" aria-label="Default select example">
                                              <option value="">Choose Test</option>
                                              <?php
                                              $service = mysqli_query($conn, "SELECT * FROM service_offered");
                                              while ($c = mysqli_fetch_array($service)) {
                                              ?>
                                                <option value="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                              <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <select class="form-select" name="request_test[]" aria-label="Default select example">
                                              <option value="">Choose Test</option>
                                              <?php
                                              $service = mysqli_query($conn, "SELECT * FROM service_offered");
                                              while ($c = mysqli_fetch_array($service)) {
                                              ?>
                                                <option value="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                              <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <select class="form-select" name="request_test[]" aria-label="Default select example">
                                              <option value="">Choose Test</option>
                                              <?php
                                              $service = mysqli_query($conn, "SELECT * FROM service_offered");
                                              while ($c = mysqli_fetch_array($service)) {
                                              ?>
                                                <option value="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                              <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <select class="form-select" name="request_test[]" aria-label="Default select example">
                                              <option value="">Choose Test</option>
                                              <?php
                                              $service = mysqli_query($conn, "SELECT * FROM service_offered");
                                              while ($c = mysqli_fetch_array($service)) {
                                              ?>
                                                <option value="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                              <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <select class="form-select" name="request_test[]" aria-label="Default select example">
                                              <option value="">Choose Test</option>
                                              <?php
                                              $service = mysqli_query($conn, "SELECT * FROM service_offered");
                                              while ($c = mysqli_fetch_array($service)) {
                                              ?>
                                                <option value="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                              <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <select class="form-select" name="request_test[]" aria-label="Default select example">
                                              <option value="">Choose Test</option>
                                              <?php
                                              $service = mysqli_query($conn, "SELECT * FROM service_offered");
                                              while ($c = mysqli_fetch_array($service)) {
                                              ?>
                                                <option value="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                              <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <select class="form-select" name="request_test[]" aria-label="Default select example">
                                              <option value="">Choose Test</option>
                                              <?php
                                              $service = mysqli_query($conn, "SELECT * FROM service_offered");
                                              while ($c = mysqli_fetch_array($service)) {
                                              ?>
                                                <option value="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                              <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                </div>




                              </div>

                            </div>
                          </div>
                          <div class="total">
                          <div class="row mb-3">
                            <label for="" style=" margin-top: 35px;  font-size: 30px;">Total Amount</label>
                            <label for="" style="position: absolute; margin-top: 80px;  font-size: 40px;">&#x20B1;</label>
                            <div class="col-sm-10">
                              <input type="text" style="  font-size: 35px;" class="form-control" readonly>

                            </div>

                          </div>
                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>



                        </div>


                        </div>
                      

                      </div>


                    </div>
                  </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
      </div>





    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/script3.js"></script>

</body>

<script>
  function FindAge() {
    var day = document.getElementById("dob").value;
    var DOB = new Date(day);
    var today = new Date();
    var Age = today.getTime() - DOB.getTime();
    Age = Math.floor(Age / (1000 * 60 * 60 * 24 * 365.25));
    document.getElementById("age").value = Age;
  }
</script>
<script>
  // Get references to the container and the button
  var inputContainer = document.getElementById('container');
  var addButton = document.getElementById('add-input-link');

  // Counter to keep track of the number of input fields
  var inputCount = 1; // Start with one input field

  // Function to add a new input field
  function addInputField() {
    inputCount++;

    // Create a new select element
    var selectDiv = document.createElement('div');
    selectDiv.className = 'form-group';
    selectDiv.innerHTML = `
      <div class="form-group"> 
                                  <select class="form-select" id="test" name="request_test${inputCount}" aria-label="Default select example">
                                    <?php
                                    $service = mysqli_query($conn, "SELECT * FROM   service_offered");
                                    while ($c = mysqli_fetch_array($service)) {
                                    ?>
                                      <option id="opt-test" value="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                    <?php } ?>
                                  </select>
                                  </div>
      `;

    // Append the input elements to the container

    inputContainer.appendChild(selectDiv);
  }

  addLink.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default behavior of the link (e.g., navigating to a new page)
    addInputField(); // Call the function to add input fields
  });
</script>

</html>