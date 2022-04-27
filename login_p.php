<?php
session_start();
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

if (isset($_POST['user']) && $_POST['user'] && isset($_POST['pass_confirmation']) && $_POST['pass_confirmation']) {
 
$sql = "SELECT * FROM access_system";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    if($row["username"]==$_POST['user'] && $row["password"]==$_POST['pass_confirmation']){

      $_SESSION['username']=$row['username'];
        echo json_encode(array('success' => 1));
        echo $row["user_level"];
        if($row["user_level"]==="1"){
        header('Location:index.php');
        }

        if($row["user_level"]==="2"){
          header('Location:doctor-home.php');
          }
          if($row["user_level"]==="3"){
            header('Location:patient-home.php');
            }
            if($row["user_level"]==="4"){
              header('Location:lab.php');
              }
              if($row["user_level"]==="5"){
                header('Location:admin.php');
                }
          else{
            echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';

          }

    }
    else{
      echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';

    }
  }
}
 else {
  echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
}


} else {
  echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
}



mysqli_close($conn);