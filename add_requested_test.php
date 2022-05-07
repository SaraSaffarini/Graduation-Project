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



$name=$_POST['name'];
$id=$_POST['patient_id'];
$test=$_POST['test'];

$sql = "INSERT INTO requested_tests (Doctor_Name,Patient_Id,Test_Type)
       VALUES ('$name','$id','$test')";
 if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header('Location:doctor-home.php');
     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);


