<?php
include 'connection/conn.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/image-200x200.jpg" rel="icon">
  <link href="assets/img/image-1000x1000.jpg" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
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
<style>
  label{
    font-weight: 00;
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

<!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/user-profile-icon-in-flat-style-member-avatar-illustration-on-isolated-background-human-permission-sign-business-concept-vector.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Information Desk</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Information Desk</h6>
              <span>Staff</span>
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
              <a href="add_reforms-editors.php">
                <i class="bi bi-circle"></i><span>Add Request Form</span>
              </a>
            </li>
            <li>
              <a href="pendinga-forms-elements.php" class="active">
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
        <!-- End Icons Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="users-profile.html">
            <i class="bi bi-person"></i>
            <span>Profile</span>
          </a>
        </li><!-- End Profile Page Nav -->

        <!-- End Contact Page Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="pages-register.html">
            <i class="bi bi-card-list"></i>
            <span>Register</span>
          </a>
        </li>
      </ul><!-- End Blank Page Nav -->

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Personal Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Request Form</li>
          <li class="breadcrumb-item active">Personal Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row align-items-top">
        <div class="col-lg-4">
         
          <?php
          // Assuming you have a database connection established
          // $conn = mysqli_connect("hostname", "username", "password", "database_name");
          
          // Check if the 'updateid' parameter is set in the URL
          if (isset($_GET['updateid'])) {
              $request_ID = $_GET['updateid'];
              
              // SQL query to fetch the specific row based on request_ID
              $sql = "SELECT * FROM `request_form` WHERE request_ID = $request_ID";
              
              // Execute the SQL query
              $result = mysqli_query($conn, $sql);
          
              // Check if the query was successful
              if ($result) {
                  // Fetch the row as an associative array
                  $row = mysqli_fetch_assoc($result);
                  if ($row) {
                      // Assign retrieved values to variables
                      $request_lastname = $row['request_lastname'];
                      $request_firstname = $row['request_firstname'];
                      $request_birthdate = $row['request_birthdate'];
                      $request_age = $row['request_age'];
                      $request_gender = $row['request_gender'];
                      $request_province = $row['request_province'];
                      $request_city = $row['request_city'];
                      $request_barangay = $row['request_barangay'];
                      $request_purok = $row['request_purok'];
                      $request_phone = $row['request_phone'];
                      $request_test = $row['request_test'];
                      $request_status = $row['request_status'];
                      $request_date = $row['request_date'];
                      $request_amount = $row['request_amount'];
          
                 
                      if (isset($_POST['submit'])) {
                        $request_lastname = $_POST['request_lastname'];
                        $request_firstname = $_POST['request_firstname'];
                        $request_birthdate = $_POST['request_birthdate'];
                        $request_age = $_POST['request_age'];
                        $request_gender = $_POST['request_gender'];
                        $request_province = $_POST['request_province'];
                        $request_city = $_POST['request_city'];
                        $request_barangay = $_POST['request_barangay'];
                        $request_purok = $_POST['request_purok'];
                        $request_phone = $_POST['request_phone'];
                        $request_test = $_POST['request_test'];
                        $request_status = $_POST['request_status'];
                        $request_date = $_POST['request_date'];
                        $request_amount = $_POST['request_amount'];

                        $sql = "UPDATE `request_form` SET request_status='Approved' WHERE request_ID = $request_ID";


                          $result = mysqli_query($conn, $sql);
                          if ($result) {
                              //echo "Updated inserted successfully";
                            
                              //echo '<script>alert("Data Updated Successfully")</script>';
                              header('Location:request-forms-layouts.php');
                          } else {
                              die(mysqli_error($conn));
                          }
                      }
                     else if (isset($_POST['reject'])) {
                        $request_lastname = $_POST['request_lastname'];
                        $request_firstname = $_POST['request_firstname'];
                        $request_birthdate = $_POST['request_birthdate'];
                        $request_age = $_POST['request_age'];
                        $request_gender = $_POST['request_gender'];
                        $request_province = $_POST['request_province'];
                        $request_city = $_POST['request_city'];
                        $request_barangay = $_POST['request_barangay'];
                        $request_purok = $_POST['request_purok'];
                        $request_phone = $_POST['request_phone'];
                        $request_test = $_POST['request_test'];
                        $request_status = $_POST['request_status'];
                        $request_date = $_POST['request_date'];
                        $request_amount = $_POST['request_amount'];

                        $sql = "UPDATE `request_form` SET request_status='Reject' WHERE request_ID = $request_ID";


                          $result = mysqli_query($conn, $sql);
                          if ($result) {
                              //echo "Updated inserted successfully";
                             // echo '<script>alert("Data Updated Successfully")</script>';
                              header('Location:request-forms-layouts.php');
                              //echo '<script>alert("Data Updated Successfully")</script>';
                          } else {
                              die(mysqli_error($conn));
                          }
                      }
                    }
                  }
                }
          ?>
          
          <!-- Default Card -->
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/user-profile-icon-in-flat-style-member-avatar-illustration-on-isolated-background-human-permission-s.ico" alt="Profile" class="rounded-circle" style="width: 200px;">
              <div class="col-md-12">
                <input type="text" class="form-control " style="font-weight: 800; font-size: 20px; text-align:center;" id="inputName5" value="<?php echo $request_lastname, ',', $request_firstname; ?>" readonly>
              </div>
              <h3>ID #: </h3>
              <div class="col-md-4">
                <input type="text" class="form-control" style="font-weight: 800; font-size: 20px; text-align:center;" id="inputName5" value="<?php echo $request_ID; ?>" readonly>
              </div>


            </div>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Personal Details</h5>
              <input type="date" class="form-control" id="inputName5" value="<?php echo $request_date?>" readonly>
              <hr>
              <!-- Multi Columns Form -->
              <form action="" method="POST" class="row g-3">
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Lastname</label>
                  <input type="text" class="form-control" id="inputName5" value="<?php echo $request_lastname ?>" readonly>
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Firstname</label>
                  <input type="text" class="form-control" id="inputName5" value="<?php echo $request_firstname ?>" readonly>
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Gender</label>
                  <input type="text" class="form-control" id="inputName5" value="<?php echo $request_gender ?>" readonly>
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Date Of Birth</label>
                  <input type="text" class="form-control" id="inputName5" value="<?php echo $request_birthdate ?>" readonly>
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Age</label>
                  <input type="number" class="form-control" id="inputName5" value="<?php echo $request_age ?>" readonly>
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Mobile Number</label>
                  <input type="text" class="form-control" id="inputName5" value="<?php echo $request_phone ?>" readonly>
                </div>
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Province</label>
                  <input type="text" class="form-control" id="inputName5" value="<?php echo $request_province ?>" readonly>
                </div>
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputName5" value="<?php echo $request_city ?>" readonly>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Barangay</label>
                  <input type="email" class="form-control" id="inputEmail5" value="<?php echo $request_barangay ?>" readonly>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Purok</label>
                  <input type="text" class="form-control" id="inputPassword5" value="<?php echo $request_purok ?>" readonly>
                </div>
                <div class="col-12">
                  <label for="inputName5" class="form-label">Service Avail</label>
                  <input  type="text" class="form-control"  style="height:100px;" id="inputPassword5" value="<?php echo $request_test ?>"  readonly>
                  </div>
                  <div class="col-12">
                  <label for="inputName5" class="form-label">ID</label>
                  <input  type="image" class="form-control" id="inputPassword5"  readonly>
                  </div>
                </div>

                <hr> 
                <div class="text-center">
                 
                  <button type="submit" name="submit" class="btn btn-primary">Approved</button>
                  <button type="submit" name="reject" class="btn btn-danger">Reject</button>
                  
                
                </div>
                <hr>
              </form><!-- End Multi Columns Form -->
             

            </div>
          </div>

        </div>
      </div>
      </div>

    </section>

  </main><!-- End #main -->



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

</body>

</html>