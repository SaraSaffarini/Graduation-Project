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
$username=$_POST['username'];
$duty_time=$_POST['duty_time'];
$department=$_POST['department'];


$sql = "INSERT INTO doctors (Full_Name,Date_Of_Birth,Phone_Number,Gender,email,Address,Duty_Time,Department,Specialzation,username)
       VALUES ('$name','$date','$phone','$gender','$email','$address','$duty_time','$department','$spec','$username')";
$sql2="INSERT INTO access_system (username,password,user_level) VALUES ('$username','$password','2')";
 if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        if (mysqli_query($conn, $sql2)) {
        header('Location:index.php');
        }
     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);


