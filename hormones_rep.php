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



$patient_id=$_POST['patient_id'];
$T3=$_POST['T3'];
$T4=$_POST['T4'];
$TSH=$_POST['TSH'];
$B12=$_POST['B12'];
$D=$_POST['D'];
;


$sql = "INSERT INTO hormones_analysis (Patient_ID,T3,T4,TSH,Vitmin_B12,Vitmin_D)
       VALUES ('$patient_id','$T3','$T4','$TSH','$B12','$D')";
 if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        
        header('Location:lab.php');

     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);


