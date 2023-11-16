<?php 

include 'connection/conn.php';

if(isset($_POST['submit'])){
  $register_username = $_POST['register_username'];
  $register_password = $_POST['register_password'];
  

  $query = "SELECT * FROM register_user WHERE register_username = '$register_username' and 
  register_password = '$register_password' and user_type = 'Information Desk'";
  
  $result = mysqli_query($conn, $query);  
  $count = mysqli_num_rows($result);
  if ($count > 0) {
      //echo "login success";
      header('Location: dashboard.php');
  }
   else 
   {
    $query = "SELECT * FROM register_user WHERE register_username = '$register_username' and 
    register_password = '$register_password' and user_type = 'Cashier'";
    
    $result = mysqli_query($conn, $query);  
    $count = mysqli_num_rows($result);
    if ($count > 0) {
      //echo "login success";
      header('Location: cashier-request-modal.php');
  }
}
}

  session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="assets/img/image-200x200.jpg" rel="icon">
  <link href="assets/img/image-200x200.jpg" rel="apple-touch-icon">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-top: 30px;
      box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.20);
    }
    
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      margin-bottom: 5px;
    }
    
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 3px;
    }
    
    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #1877f2;
      border: none;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
      border-radius: 3px;
    }
    
    .user-type-group {
      margin-bottom: 20px;
    }
    
    .user-type-group label {
      display: block;
      margin-right: 10px;
    }
    .user-type-group select{
        height: 40px;
        text-align: center;
        width: 360px;
    
    }
    .logo{
      position: relative;
      text-align: center;
    }
    .logo img{
      width: 200px;
      position: absolute;
      margin-left: -100px;
      margin-top: 10px;
      
    }
    .container p{
     text-align: center;
     font-size: 20px;
     font-weight: 500;
     margin-top: -35px;
   
    }
   
  </style>
</head>
<body style="background:linear-gradient(90deg, #7DF9FF, skyblue);">
<div class="logo">
      <img src="assets/img/logo01.png" alt="">
     
    </div>

  <div class="container">
    <br>
    <br><br><br><br><br><br><br> <br>
    <p>Diagnostic Lab Management System</p>
  
    
    <h2>Admin Login</h2>
    <form method="POST">
        <img src="/assets/img/team-2.jpg" alt="">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="register_username" name="register_username" class="form-control" placeholder="Enter your username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="register_password" name="register_password" class="form-control" placeholder="Enter your password">
      </div>
      
     
      <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
      </div>
     
    </form>
  </div>
 
</body>
</html>
