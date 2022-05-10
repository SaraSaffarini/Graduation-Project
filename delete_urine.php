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



$id= $_SESSION['id'];
$sql = "DELETE FROM urine_analysis  WHERE id ='$id'";
 if (mysqli_query($conn, $sql)) {
        header("Location:lab.php");
     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);


