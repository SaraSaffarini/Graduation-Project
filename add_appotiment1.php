<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "proclinc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$name=$_POST['patient_name'];
$problem=$_POST['problem'];
$time=$_POST['appointment-time'];
$patient_id=$_SESSION['id'];
$doctor_name=$_SESSION['name'];
$department=$_SESSION['department'];
$date=$_SESSION['date'];


$sql = "INSERT INTO appointments (Patient_ID,Patient_Name,Doctor_Name,Department,Appotiment_Date,Appotiment_Time,Problem_Desreption)
       VALUES ('$patient_id','$name','$doctor_name','$department','$date','$time','$problem')";
 if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header("Location:patient-home.php");
     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);


