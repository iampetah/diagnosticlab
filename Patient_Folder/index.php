<!-- Code by Brave Coder - https://youtube.com/BraveCoder -->
<?php
include 'connection/conn.php';

if(isset($_POST['submit'])){
    $register_username = isset($_POST['register_username']) ? $_POST['register_username'] : '';
    $register_password = isset($_POST['register_password']) ? $_POST['register_password'] : '';
    $user_type = isset($_POST['user_type']) ? $_POST['user_type'] : '';
    

  $query = "SELECT * FROM register_user WHERE register_username = '$register_username' and 
  register_password = '$register_password' and user_type = 'Patient'";
  
  $result = mysqli_query($conn, $query);  
  $count = mysqli_num_rows($result);
  if ($count > 0) {
      //echo "login success";
      header('Location: patient-request.php');
  } else {
    echo '<script>alert("Invalid Email and Password")</script>';
  }
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login Form</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="assets2/img/image-200x200.jpg" rel="icon">
  <link href="assets2/img/image-200x200.jpg" rel="apple-touch-icon">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- form section start -->
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    
                    <div class="w3l_form align-self" style="background-color:paleturquoise;">
                        <div class="left_grid_info">
                            <img src="assets/img/Signin.png" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Login Now</h2>
                        
                        <form action="#" method="post">
                            <input type="email" class="email" name="register_username" placeholder="Enter Your Email" required>
                            <input type="password" class="password" name="register_password" placeholder="Enter Your Password" style="margin-bottom: 2px;" required>
                        
                            <p><a href="forgot-password.php" style="margin-bottom: 15px; display: block; text-align: right;"></a></p>
                            <button name="submit" name="submit" class="btn" type="submit" style="background-color:dodgerblue">Login</button>
                        </form>
                        <div class="social-icons">
                            <p>Create Account! <a href="register.php">Register</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->

    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>

</body>

</html>