<?php
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



$patient_id=$_POST['patient_id'];
$color=$_POST['color'];
$apperance=$_POST['apperance'];
$Leukonyce=$_POST['Leukonyce'];
$Protin=$_POST['Protin'];
$blood=$_POST['blood'];
$Gravity=$_POST['Gravity'];
$ketonic=$_POST['ketonic'];


$sql = "INSERT INTO urine_analysis (id,color,Apperance,leukonyce,Protin,blood,gravity,ketonic)
       VALUES ('$patient_id','$color','$apperance','$Leukonyce','$Protin','$blood','$Gravity','$ketonic')";
 if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";

        header('Location:lab.php');

     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);


