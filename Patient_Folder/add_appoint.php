<?php
include 'connection/conn.php';

if(isset($_POST['submit'])){
    $appointment_date=$_POST['appointment_date'];
    $appointment_phone=$_POST['appointment_phone'];
    $appointment_lastname=$_POST['appointment_lastname'];
    $appointment_firstname=$_POST['appointment_firstname'];
    $appointment_gender=$_POST['appointment_gender'];
    $appointment_birthdate=$_POST['appointment_birthdate'];
    $appointment_age=$_POST['appointment_age'];
    $appointment_province = $_POST['appointment_province'];
    $appointment_city = $_POST['appointment_city'];
    $appointment_barangay=$_POST['appointment_barangay'];
    $appointment_purok=$_POST['appointment_purok'];
    $appointment_amount=$_POST['appointment_amount'];
    $appointment_test=$_POST['appointment_test'];
    $appointment_test1= implode(',', $appointment_test);
    
   
    

    $sql = "INSERT INTO `appointment` (appointment_date, appointment_phone, appointment_lastname, appointment_firstname, appointment_gender, appointment_birthdate, appointment_age, 
      appointment_province, appointment_city, appointment_barangay, appointment_purok, appointment_amount, appointment_test )
    VALUES ('$appointment_date','$appointment_phone','$appointment_lastname', '$appointment_firstname', '$appointment_gender', '$appointment_birthdate', '$appointment_age', 
      '$appointment_province', '$appointment_city','$appointment_barangay', '$appointment_purok', '$appointment_amount', '$appointment_test1')";


    $result=mysqli_query($conn, $sql);
    if($result){
        //echo "Data inserted successfully";
         header('Location: patient-tables-data.php');
        // echo '<script>alert("Data Inserted Successfully")</script>';
    }else{
        die(mysqli_error($conn));
    }
}

?>