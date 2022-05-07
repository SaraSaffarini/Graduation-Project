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

     $name=$_POST['patient-name'];
     $dob=$_POST['dob'];
     $phone=$_POST['phone'];
     $email=$_POST['Email'];
     $gender=$_POST['gender'];
     $address=$_POST['address'];

$sql = "UPDATE patients
        SET Full_Name = '$name',Date_Of_Birth= '$dob',Phone_Number='$phone',Gender='$gender',Address='$address'
        WHERE Full_Name = '$name'";
$result = mysqli_query($conn, $sql);

header('Location:index.php');

    echo "failed";

    mysqli_close($conn);