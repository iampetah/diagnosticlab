<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medical Record</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/image-200x200.jpg" rel="icon">
  <link href="assets/img/image-200x200.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Inter', sans-serif;
  }

  .formbold-mb-3 {
    margin-bottom: 15px;
  }

  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 570px;
    width: 100%;
    background: white;

  }

  .formbold-img {
    display: block;
    margin: 0 auto 45px;
  }

  .formbold-input-wrapp>div {
    display: flex;
    gap: 20px;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }

  .formbold-input-flex>div {
    width: 50%;
  }

  .formbold-form-input {
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
  }

  .formbold-form-input::placeholder,
  select.formbold-form-input,
  .formbold-form-input[type='date']::-webkit-datetime-edit-text,
  .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
  .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
  .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
    color: rgba(83, 99, 135, 0.5);
  }

  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold-form-label {
    color: #07074D;
    font-weight: 500;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-form-file-flex {
    display: flex;
    align-items: center;
    gap: 20px;
  }

  .formbold-form-file-flex .formbold-form-label {
    margin-bottom: 0;
  }

  .formbold-form-file {
    font-size: 14px;
    line-height: 24px;
    color: #536387;
  }

  .formbold-form-file::-webkit-file-upload-button {
    display: none;
  }

  .formbold-form-file:before {
    content: 'Upload file';
    display: inline-block;
    background: #EEEEEE;
    border: 0.5px solid #FBFBFB;
    box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.25);
    border-radius: 3px;
    padding: 3px 12px;
    outline: none;
    white-space: nowrap;
    -webkit-user-select: none;
    cursor: pointer;
    color: #637381;
    font-weight: 500;
    font-size: 12px;
    line-height: 16px;
    margin-right: 10px;
  }

  .formbold-btn {
    text-align: center;
    width: 100%;
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #6a64f1;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }

  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold-w-45 {
    width: 45%;
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
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M19 4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1Z"></path>
  <path d="M12 11h4"></path>
  <path d="M12 8h4"></path>
  <path d="M8 20V4"></path>
</svg> &nbsp;<span>Patient</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">

          <li>
            <a href="patient-table.php">
              <i class="bi bi-circle"></i><span>Patient Table</span>
            </a>
          </li>
          <li>
            <a href="medical-record.php" class="active">
              <i class="bi bi-circle"></i><span>Medical Record</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M4.25 10.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5Zm0-6c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5Zm0 12c-.83 0-1.5.68-1.5 1.5s.68 1.5 1.5 1.5 1.5-.68 1.5-1.5-.67-1.5-1.5-1.5Zm3 2.5h14v-2h-14v2Zm0-6h14v-2h-14v2Zm0-8v2h14V5h-14Z"></path>
</svg> &nbsp;<span>Request Form</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="add_reforms-editors.php">
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
  <path d="M19.8 6a.6.6 0 0 1 .6.6v10.8a.6.6 0 0 1-.6.6H4.2a.6.6 0 0 1-.6-.6V6.6a.6.6 0 0 1 .6-.6h15.6ZM4.2 4.8a1.8 1.8 0 0 0-1.8 1.8v10.8a1.8 1.8 0 0 0 1.8 1.8h15.6a1.8 1.8 0 0 0 1.8-1.8V6.6a1.8 1.8 0 0 0-1.8-1.8H4.2Z"></path>
  <path d="M10.8 9a.6.6 0 0 1 .6-.6h6a.6.6 0 0 1 0 1.2h-6a.6.6 0 0 1-.6-.6ZM9.007 7.975a.6.6 0 0 1 0 .85l-1.8 1.8a.6.6 0 0 1-.85 0l-.6-.6a.6.6 0 1 1 .85-.85l.175.176 1.375-1.376a.6.6 0 0 1 .85 0ZM10.8 13.8a.6.6 0 0 1 .6-.6h6a.6.6 0 1 1 0 1.2h-6a.6.6 0 0 1-.6-.6Zm-1.795-1.025a.6.6 0 0 1 0 .85l-1.8 1.8a.6.6 0 0 1-.85 0l-.6-.6a.6.6 0 1 1 .85-.85l.175.177 1.375-1.377a.6.6 0 0 1 .85 0Z"></path>
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
      </li><!-- End Blank Page Nav -->

    </ul><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Medical Record</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Patient</li>
          <li class="breadcrumb-item active">Medical Record</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <h3>Patient information</h3>
              <div class="row mb-3">

                <div class="col-sm-12">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>--------Select Patient---------</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
              <img src="assets/img/user-profile-icon-in-flat-style-member-avatar-illustration-on-isolated-background-human-permission-s.ico" alt="Profile" class="rounded-circle" style="width: 200px;">

            </div>
          </div>
        </div>
        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <table class="table table-bordered">

                <tbody>
                  <tr>
                    <td scope="row">Firstname</td>
                    <th>Brandon </th>
                    <td>Family name</td>
                    <th>Jacob</th>
                  </tr>
                  <tr>
                    <td scope="row">Address</td>
                    <th>Panabo City, Davao del Norte </th>
                    <td>Age/Gender</td>
                    <th>22/Male</th>
                  </tr>
                  <tr>
                    <td scope="row">Date Performed</td>
                    <th>June 11, 2023 </th>
                    <td>Physician</td>
                    <th>MD</th>
                  </tr>
                  <tr>
                    <td scope="row">Mode of Test</td>
                    <th> </th>
                    <td>Time</td>
                    <th></th>
                  </tr>
                  <tr>
                    <td scope="row">Examination Test</td>
                    <th> </th>
                    <td>Specimen</td>
                    <th></th>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>
        </div>
        
          <div class="col-xl-12">
              <div class="container-fluid">
            <div class="card mt-1">
                <div class="card-header">
                    Input Result
                </div>
                <div class="card-body">
                    <form id="input-form">
                        <div id="product_row1" class="row">
                            <div class="col-md-5">
                                <label>Test</label>
                                <input id="name1" type="text" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label>Result</label>
                                <input id="price1" type="number" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label>Normal Value</label>
                                <input id="price1" type="number" class="form-control">
                            </div>
                            <div class="col-md-1">
                                <br>
                                <button onclick="delete_row('1')" type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-end">
                    <button onclick="add_more()" class="btn btn-dark">Add More</button>
                    <button onclick="submit_form()" class="btn btn-info">Save</button>
                </div>
            </div>
              </div>
        </div>

              </div>
          </div>
          </div>
</section>
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
 <script>
  var counter = 1;
function add_more() {
    counter++
    var newDiv = `<div id="product_row${counter}" class="row">
                    <div class="col-md-5">
                        <label>Test</label>
                        <input id="name${counter}" type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label>Result</label>
                        <input id="price${counter}" type="number" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>Normal Value</label>
                        <input id="price${counter}" type="number" class="form-control">
                    </div>
                    <div class="col-md-1">
                        <br>
                        <button onclick="delete_row('${counter}')" type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div>`
    var form = document.getElementById('input-form')
    form.insertAdjacentHTML('beforeend', newDiv);
}

function delete_row(id) {
    document.getElementById('product_row'+id).remove()
}

function submit_form() {
    var productData = []
    for (var i = 1; i <= counter; i++){
        var product_row = document.getElementById('product_row'+i)
        if (product_row) {
            var product_name = document.getElementById('name' + i).value
            var price = document.getElementById('price' + i).value
            var data = {
                name: product_name,
                price: price
            }
            productData.push(data)
        }
    }

    axios.post('/dynamicinput/submitform.php', {
        productData: productData
    }).then(resp => {
        window.location.reload()
    })
}
 </script>
      

</body>

</html>