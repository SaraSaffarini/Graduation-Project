<?php
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "e-care";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$name= $_SESSION['name'];
$sql = "DELETE FROM patients  WHERE Full_Name ='$name'";
 if (mysqli_query($conn, $sql)) {
        header("Location:index.php");
     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);


