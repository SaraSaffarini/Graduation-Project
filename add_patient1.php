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
$date=$_POST['dob'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$email=$_POST['Email'];
$address=$_POST['address'];
$id=$_POST['id_number'];
$password=$_POST['patient-password'];
$sql2 = "SELECT * FROM patients WHERE id='$id'";
$result = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result) > 0) {
       echo" ID Already Registerd ";

        header('Location:patient_register.html');
     }
      else {
      

$sql = "INSERT INTO patients (id,Full_Name,Date_Of_Birth,Phone_Number,Gender,Email,Address)
       VALUES ('$id','$name','$date','$phone','$gender','$email','$address')";
$sql2="INSERT INTO access_system (username,password,user_level) VALUES ('$id','$password','3')";
 if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        if (mysqli_query($conn, $sql2)) {
            header('Location:login.php');
            }
     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);


      }