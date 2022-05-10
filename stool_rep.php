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
$color=$_POST['color'];
$Constancy=$_POST['Constancy'];
$groos_blood=$_POST['groos_blood'];
$mucus=$_POST['mucus'];
$occult_blood=$_POST['occult_blood'];
$pus=$_POST['pus'];




$sql = "INSERT INTO stool_analysis (Patient_ID,color,Constancy,Groos_blood,mucus,occult_blood,pus)
       VALUES ('$patient_id','$color','$Constancy','$groos_blood','$mucus','$occult_blood','$pus')";
 if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        
        header('Location:lab.php');

     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);


