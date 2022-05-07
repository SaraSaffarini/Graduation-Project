<?php
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "e-care";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$name=$_POST['doctor_name'];
$date=$_POST['dob'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$spec=$_POST['specialzation'];
$password=$_POST['password'];
$email=$_POST['email'];
$address=$_POST['address'];
$doctor_details=$_POST['doctor_details'];
$duty_time=$_POST['duty_time'];
$department=$_POST['department'];


$sql = "UPDATE doctors
        SET Full_Name = '$name',Date_of_Birth= '$date',Phone_Number='$phone',Gender='$gender',Address='$address',Specialzation='$spec',Doctor_Details='$doctor_details'
        ,Duty_Time='$duty_time',Department='$department',email='$email' ,password='$password'
        WHERE Full_Name = '$name'";
$result = mysqli_query($conn, $sql);
header('Location:index.php');


    echo $result;
    echo $name;
    echo "failed";

    mysqli_close($conn);