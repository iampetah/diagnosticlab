<?php
include 'connection/conn.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Appointment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets2/img/image-200x200.jpg" rel="icon">
  <link href="assets2/img/image-1000x1000.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets2/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets2/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets2/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
  .packages input {
    display: inline;

  }

  .tot span {
    font-size: 20px;
    font-weight: 800;
    margin-left: 750px;
  }

  .tot input {
    font-size: 25px;
    height: 50px;
    background-color: rgba(0, 0, 0, 0);
    width: 140px;
    border: none;
    font-weight: 700;
    text-align: right;
    margin-left: 750px;
  }

  .tet {
    margin-top: 26px;
    margin-left: 750px;
    width: 140px;
    height: 50px;
    box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.20);
    position: absolute;
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
</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets2/img/image-200x200.jpg" alt="">
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

      <!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets2/img/user-profile-icon-in-flat-style-member-avatar-illustration-on-isolated-background-human-permission-sign-business-concept-vector.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
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
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
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
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Request Form</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="patient-request.php">
              <i class="bi bi-circle"></i><span>Add Request Form</span>
            </a>
          </li>

          <li>
            <a href="patient-request-table.php">
              <i class="bi bi-circle"></i><span>Request Forms</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Appointments</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="add-appoint-tables-general.php" class="active">
              <i class="bi bi-circle"></i><span>Add Appointment</span>
            </a>
          </li>
          <li>
            <a href="patient-tables-data.php">
              <i class="bi bi-circle"></i><span>Appointments</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <!-- End Contact Page Nav -->

      <!-- End Register Page Nav -->

      <!-- End Login Page Nav -->

      <!-- End Error 404 Page Nav -->

      <!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Appointment</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Appointment</li>
          <li class="breadcrumb-item active">Add Appointment</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Appointment</h5>

              <div class="container">
                <header>Add Appointment</header>
                <form action="add_appoint.php" method="POST">
                  <div class="form first">
                    <div class="details personal">
                      <span class="title">Details</span>
                      <div class="fields">
                        <div class="input-field">
                          <label>Lastame</label>
                          <input type="text" name="appointment_lastname" placeholder="Enter your Lastame" required>
                        </div>
                        <div class="input-field">
                          <label>Firstname</label>
                          <input type="text" name="appointment_firstname" placeholder="Enter your Firstname" required>
                        </div>
                        <div class="input-field">
                          <label>Gender</label>
                          <select name="appointment_gender" required>
                            <option disabled selected>Select gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>

                          </select>
                        </div>
                        <div class="input-field">
                          <label>Date of Birth</label>
                          <input type="date" name="appointment_birthdate" id="dob" placeholder="Enter birth date" required>
                        </div>
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
                        <div class="input-field">
                          <label>Age</label>
                          <input type="number" onmousemove="FindAge()" id="age" name="appointment_age" placeholder="Your age" required>
                        </div>
                        <div class="input-field">
                          <label>Mobile Number</label>
                          <input type="number" name="appointment_phone" pattern="[0-9]{11}" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                          <label>Province</label>
                          <select required name="appointment_province" id="province">
                            <option disabled selected>Select Province</option>


                          </select>
                        </div>
                        <div class="input-field">
                          <label>City</label>
                          <select required name="appointment_city" id="city">
                            <option disabled selected>Select City</option>


                          </select>
                        </div>
                        <div class="input-field">
                          <label>Barangay</label>
                          <select required name="appointment_barangay" id="barangay">
                            <option disabled selected>Select Barangay</option>


                          </select>
                        </div>

                        <div class="input-field">
                          <label>Purok</label>
                          <input type="text" name="appointment_purok" placeholder="Enter your Purok" required>
                        </div>
                        <div class="input-field">
                          <label>Appointment Date</label>
                          <input type="date" name="appointment_date" id="appointment_date" placeholder="Enter your Purok" required>
                        </div>
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

                          document.getElementById("appointment_date").value = c_date;
                        </script>

                        <div class="input-field">
                          <label></label>
                          <input type="hidden" placeholder="Enter your Purok" required>
                        </div>
                      </div>
                    </div>
                    <!--
                        <div class="packages" style="font-size: 18px;">
                          <label for="" style="margin-left: 35px; margin-top: -50px; font-weight: 600;">Request for:</label>
                          <br>
                          <label for="" style="margin-left: 50px;">Check the box to the service you want to avail.</label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 100px;"  name="" id="">
                            <label for="" style="position: absolute; margin-left: -485px ;">CBC</label>
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 220px;" name="" id="">
                            <label for="" style="position: absolute; margin-left: -245px ;">HEMOGLOBIN</label>
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 230px;" name="" id="">
                            <label for="" style="margin-left: 5px;">PLATELET COUNT</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 100px;"  name="" id="">
                            <label for="" style="position: absolute; margin-left: -485px ;">BLOOD TYPING</label>
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 220px;" name="" id="">
                            <label for="" style="position: absolute; margin-left: -245px ;">HBsAg</label>
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 230px;" name="" id="">
                            <label for="" style="margin-left: 5px;">VDRL/Syphilis</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 100px;"  name="" id="">
                            <label for=""style="position: absolute; margin-left: -485px ;">HA1c</label>
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 220px;" name="" id="">
                            <label for="" style="position: absolute; margin-left: -245px ;">TSH</label>
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 230px;" name="" id="">
                            <label for="" style="margin-left: 5px;">T3</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 100px;"  name="" id="">
                            <label for="" style="position: absolute; margin-left: -485px ;">URINALYSIS</label>
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 220px;" name="" id="">
                            <label for="" style="position: absolute; margin-left: -245px ;">FECALYSIS</label>
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 230px;" name="" id="">
                            <label for="" style="margin-left: 5px;" >FBS</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 100px;"  name="" id="">
                            <label for="" style="position: absolute; margin-left: -485px ;">RBS</label>
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 220px;" name="" id="">
                            <label for="" style="position: absolute; margin-left: -245px ;">LIPID PROFILE</label>
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 230px;" name="" id="">
                            <label for="" style="margin-left: 5px;">CHOLESTEROL</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 100px;"  name="" id="">
                            <label for="" style="position: absolute; margin-left: -485px ;">SUA</label>
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 220px;" name="" id="">
                            <label for="" style="position: absolute; margin-left: -245px ;">CREATININE</label>
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 230px;" name="" id="">
                            <label for="" style="margin-left: 5px;">SGPT/ALT </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 100px;"  name="" id="">
                            <label for="" style="position: absolute; margin-left: -485px ;">SGOT/AST</label>
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 220px;" name="" id="">
                            <label for="" style="position: absolute; margin-left: -245px ;">BUN</label>
                            <input class="form-check-input" type="checkbox" id="gridCheck1" style="margin-left: 230px;" name="" id="">
                            <label for="" style="margin-left: 5px;">ELECTROLYTES</label>
                          </div>
                        <div>
                          <br>
                          <label for="" style="margin-left: 50px;">Package Option</label>
                        </div>
                        <div class="package-info" style="margin-left: 100px; width: 200px; font-size: 20px;">
                          <select name="" id="package">
                              <option value="">Package A</option>
                              <option value="">Package B</option>
                          </select>
                      </div>
                      <div class="package-info" style="position: absolute; margin-left: 100px;  width: 200px; font-size: 17px;">
                          <textarea name="" style="height: 100px;" id="" cols="30" rows="10"></textarea>
                      </div>

                        </div>
                        <div class="tet">

                        </div>
                        <div class="tot">
                            <span>Total Amount </span>
                            <label for="" style="position: absolute; margin-top: 28px; margin-left: -130px; font-size: 35px;">&#x20B1;</label>
                            <p>
                                <input type="text" id="amount" name="request_amount" class="request_amount">
                            </p>

                        </div>




                                <div style="margin-left: 690px;">
                                <button class="sumbit">
                                    <span class="btnText">Submit</span>
                                    <i class="uil uil-navigator"></i>
                                </button>
                            </div>

            </div>
          </div>
---->
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
                                          <h5>Select service</h5>
                                          <div class="form-group">
                                            <select class="form-select" id="test1" name="appointment_test[]" aria-label="Default select example">
                                              <option value="">Choose Test</option>
                                              <?php
                                              $service = mysqli_query($conn, "SELECT * FROM service_offered");
                                              while ($c = mysqli_fetch_array($service)) {
                                              ?>
                                                <option value="<?php echo $c['Test'] ?>" data-price="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                              <?php } ?>
                                            </select>
                                          </div>
                                        </div>



                                        <div class="col-sm-6">
                                          <br>
                                          <div class="form-group">
                                            <select class="form-select" id="test2" name="appointment_test[]" aria-label="Default select example">
                                              <option value="">Choose Test</option>
                                              <?php
                                              $service = mysqli_query($conn, "SELECT * FROM service_offered");
                                              while ($c = mysqli_fetch_array($service)) {
                                              ?>
                                                <option value="<?php echo $c['Test'] ?>" data-price="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                              <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <select class="form-select" id="test3" name="appointment_test[]" aria-label="Default select example">
                                              <option value="">Choose Test</option>
                                              <?php
                                              $service = mysqli_query($conn, "SELECT * FROM service_offered");
                                              while ($c = mysqli_fetch_array($service)) {
                                              ?>
                                                <option value="<?php echo $c['Test'] ?>" data-price="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                              <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <select class="form-select" id="test4" name="appointment_test[]" aria-label="Default select example">
                                              <option value="">Choose Test</option>
                                              <?php
                                              $service = mysqli_query($conn, "SELECT * FROM service_offered");
                                              while ($c = mysqli_fetch_array($service)) {
                                              ?>
                                                <option value="<?php echo $c['Test'] ?>" data-price="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                              <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <select class="form-select" id="test5" name="appointment_test[]" aria-label="Default select example">
                                              <option value="">Choose Test</option>
                                              <?php
                                              $service = mysqli_query($conn, "SELECT * FROM service_offered");
                                              while ($c = mysqli_fetch_array($service)) {
                                              ?>
                                                <option value="<?php echo $c['Test'] ?>" data-price="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                              <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <select class="form-select" id="test6" name="appointment_test[]" aria-label="Default select example">
                                              <option value="">Choose Test</option>
                                              <?php
                                              $service = mysqli_query($conn, "SELECT * FROM service_offered");
                                              while ($c = mysqli_fetch_array($service)) {
                                              ?>
                                                <option value="<?php echo $c['Test'] ?>" data-price="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                              <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <select class="form-select" id="test7" name="appointment_test[]" aria-label="Default select example">
                                              <option value="">Choose Test</option>
                                              <?php
                                              $service = mysqli_query($conn, "SELECT * FROM service_offered");
                                              while ($c = mysqli_fetch_array($service)) {
                                              ?>
                                                <option value="<?php echo $c['Test'] ?>" data-price="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                              <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <select class="form-select" id="test8" name="appointment_test[]" aria-label="Default select example">
                                              <option value="">Choose Test</option>
                                              <?php
                                              $service = mysqli_query($conn, "SELECT * FROM service_offered");
                                              while ($c = mysqli_fetch_array($service)) {
                                              ?>
                                                <option value="<?php echo $c['Test'] ?>" data-price="<?php echo $c['Price'] ?>"><?php echo $c['Test'] ?></option>
                                              <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                </div>

                                <div class="row mb-3">
                                  <label for="inputNumber" class="col-sm-8 col-form-label">Upload Image of your ID</label>
                                  <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile">
                                  </div>
                                </div>


                              </div>
                            </div>

                            <div class="total">
                              <div class="row mb-3">
                                <label for="" style=" margin-top: 35px;  font-size: 30px;">Total Amount</label>
                                <label for="" style="position: absolute; margin-top: 80px;  font-size: 40px;">&#x20B1;</label>
                                <div class="col-sm-10">
                                  <input type="text" name="appointment_amount" style=" font-size: 35px; text-indent: 45px;" id="total" class="form-control" readonly>

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
          </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets2/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/vendor/chart.js/chart.umd.js"></script>
  <script src="assets2/vendor/echarts/echarts.min.js"></script>
  <script src="assets2/vendor/quill/quill.min.js"></script>
  <script src="assets2/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets2/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets2/js/main.js"></script>
  <script src="assets2/js/script3.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Loop through test1 to test8
      for (var i = 1; i <= 8; i++) {
        var select = document.getElementById("test" + i);
        select.addEventListener("change", function() {
          updateTotalPrice();
        });
      }

      function updateTotalPrice() {
        var total = 0;
        for (var i = 1; i <= 8; i++) {
          var select = document.getElementById("test" + i);
          var selectedOption = select.options[select.selectedIndex];
          var selectedPrice = parseFloat(selectedOption.getAttribute("data-price"));
          if (!isNaN(selectedPrice)) {
            total += selectedPrice;
          }
        }
        var totalInput = document.getElementById("total");
        totalInput.value = total.toFixed(2);
      }

      // Initial calculation
      updateTotalPrice();
    });
  </script>

</body>

</html>