<?php
 session_start();
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
$id=$_POST['patient_id'];
$filenum;

$sql1 = "SELECT * FROM  patients WHERE id='$id'";
 $result=mysqli_query($conn, $sql1);
          if (mysqli_num_rows($result) > 0) {
          if($row =mysqli_fetch_assoc($result)) {
              $filenum=$row['File_Number'];
        
             }
    }
    else{

    }
  



$date=$_POST['visit_date'];
$diagnosis=$_POST['diagnosis'];
$allergies=$_POST['allergies'];
$doctor=$_POST['name'];

$sql = "INSERT INTO patient_file (File_num,Patient_ID,Visit_Date,Diagnosis,Allergies,Doctor_Name)
       VALUES ('$filenum','$id','$date','$diagnosis','$allergies','$doctor')";
 if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header('Location:doctor-home.php');
     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);


