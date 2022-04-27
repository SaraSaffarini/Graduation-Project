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



$doctor_name=$_POST['doctor-name'];
$date=$_POST['date'];
$patient_id=$_POST['patient-id'];
$patient_name=$_POST['patient-name'];
$department=$_POST['department'];
$servicename=$_POST['service_name'];
$servicecost=$_POST['service_cost'];
$insurance_availabe="No";
if(isset($_POST['company_name']) && isset($_POST['discount']) && $_POST['discount'] && $_POST['company_name']){
    $discount=$_POST['discount'];
    $company_name=$_POST['company_name'];
    $insurance_availabe="Yes";
    $insurance_number=$_POST['Insurance_Number'];
    $sql = "INSERT INTO insurance_comapny (Patient_ID,Insurance_number,Insurance_Discount,Company_Name)
       VALUES ('$patient_id','$insurance_number','$discount','$company_name')";
 if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }



}
$sql = "INSERT INTO payments (Patiend_ID,Patient_Name,Doctor_Name,Department,Insurance_Valid,Cost,Service_Type,Vist_Date)
       VALUES ('$patient_id','$patient_name','$doctor_name','$department','$insurance_availabe','$servicecost','$servicename','$date')";
 if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header('Location:index.php');

     }
      else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);


