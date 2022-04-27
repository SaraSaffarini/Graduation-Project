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



$name=$_POST['username'];
$password=$_POST['password'];


$sql = "INSERT INTO access_system (username,password,user_level)
       VALUES ('$name','$password','1')";
 if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header('Location:admin.php');
     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);


