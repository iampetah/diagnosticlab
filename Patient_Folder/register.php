<?php
include 'connection/conn.php';

if (isset($_POST['submit'])) {
    $register_lastname = $_POST['register_lastname'];
    $register_firstname = $_POST['register_firstname'];
    $register_username = $_POST['register_username'];
    $register_password = $_POST['register_password'];
    $user_type = $_POST['user_type'];


    $sql = "INSERT INTO `register_user` (register_lastname, register_firstname, register_username, register_password, user_type)
        values('$register_lastname', '$register_firstname', '$register_username', '$register_password', '$user_type')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        //echo "Data inserted successfully";
        header('Location: index.php');
    } else {
        die(mysqli_error($conn));
    }
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Registration Form</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Login Form" />
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
                            <img src="assets/img/up.png" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Register Now</h2>


                        <form action="#" method="post">
                            <input type="text" class="name" name="register_lastname" placeholder="Enter Lastname" value="" required>
                            <input type="text" class="name" name="register_firstname" placeholder="Enter Firstname" value="" required>
                            <input type="email" class="email" name="register_username" placeholder="Enter Your Email" value="" required>
                            <input type="password" class="password" name="register_password" placeholder="Enter Your Password" required>
                           <select style="display: none;" name="user_type" name="" id="">
                            <option value="Patient">Patient</option>
                           </select>

                              

                                <button name="submit" class="btn" type="submit" style="background-color:dodgerblue">Register</button>
                        </form>
                        <div class="social-icons">
                            <p>Have an account? <a href="index.php">Login</a>.</p>
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
        $(document).ready(function(c) {
            $('.alert-close').on('click', function(c) {
                $('.main-mockup').fadeOut('slow', function(c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>

</body>

</html>