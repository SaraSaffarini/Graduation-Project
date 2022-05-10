<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Saint Luke's Hospital</title>
    <!-- Fav  Icon Link -->
    <link rel="shortcut icon" type="image/png" href="images/fav.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- themify icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Animations CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/red.css" id="style_theme">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- morris charts -->
    <link rel="stylesheet" href="charts/css/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="css/jquery-jvectormap.css">

    <script src="js/modernizr.min.js"></script>
</head>

<body>



<!-- Pre Loader -->
<div class="loading">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!--/Pre Loader -->
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" class="proclinic-bg">
			<div class="sidebar-header">
				<a href="admin.php"><img src="images/logo.png" class="logo" width="200px" style="border-radius: 50%" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">

				<li>
					<a href="#nav-patients" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Lab Employees
					</a>
					<ul class="collapse list-unstyled" id="nav-patients">
						<li>
							<a href="add-lab.php">Add Lab Employees</a>
						</li>
					
					
					</ul>
				</li>
				<li>
        <a href="#nav-doctors" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Secretary Employees
					</a>
					<ul class="collapse list-unstyled" id="nav-doctors">
						<li>
							<a href="add-secretary.php">Add Secretary</a>
						</li>
					
					</ul>
				</li>
                <li>
                <a href="#nav-delete" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Delete Users
					</a>
					<ul class="collapse list-unstyled" id="nav-delete">
						<li>
							<a href="delete_employ.php">Delete User</a>
						</li>
					
					</ul>
				</li>
			

			</ul>
			<div class="nav-help animated fadeIn">
				<h5><span class="ti-comments"></span> Need Help</h5>
				<h6>
					<span class="ti-mobile"></span> 09-2383818</h6>
				<h6>
					<span class="ti-email"></span> SaintLuke's@gmail.com</h6>
				<p class="copyright-text">Copy rights &copy; 2022</p>
			</div>
		</nav>
    <div id="content">
			<!-- Top Navigation -->
			<!-- Top Navigation -->
			<nav class="navbar navbar-default" >
				<div class="container-fluid" >
					<div class="responsive-logo">
						<a href="admin.php"><img src="images/logo-dark.png" class="logo" alt="logo"></a>
					</div>
					<ul class="nav">
		
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-user"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5><?php echo $_SESSION['username'] ;?>
                                </h5>
							
								<a class="dropdown-item" href="login.php">
									<span class="ti-power-off"></span> Logout</a>
							</div>
						</li>
					</ul>
				
				</div>
			</nav>
				<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Users</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="admin.php">
								<span class="ti-home"></span>
							</a>
                        </li>
                       
					</ol>
				</div>
			</div>
  
    <!-- /Sidebar -->
    <!-- Page Content -->
    <div id="content">
    <table id="tableId" class="table table-bordered table-striped" style='margin:10px;width:95%'>
									<thead>
										<tr>
											
											<th>Username</th>
											<th>Password</th>
											<th>User Level</th>
											
										</tr>
									</thead>
									<tbody>
										<tr>

											<?php
													$servername = "localhost";
                                            		$username = "root";
                                            		$password = "";

                                            $dbname = "e-care";

                                            // Create connection
                                            $conn = new mysqli($servername, $username, $password, $dbname);
                                            // Check connection
                                            $sql = "SELECT * FROM access_system";
                                            $result = mysqli_query($conn, $sql);
                                            if ($conn->connect_error) {
                                              die("Connection failed: " . $conn->connect_error);
                                            }
                                             if (mysqli_num_rows($result) > 0) {
                                               while($row =mysqli_fetch_assoc($result)) {
													$id=$row['username'];
                                                   echo"<td><a  id='name' href='about-hormones.php?id={$id}' >".$row['username']."</a></td>";
                                                    echo"<td  >".$row['password']."</td>";
                                                  echo"<td id='dob'>".$row['user_level']."</td>";
                                                 
                                                    echo"	</tr>";
                                                 }
                                               }



                                             else {
                                               echo "0 results";
                                             }


										    $conn->close();


									        ?>



									</tbody>
								</table>
       

        <!-- Top Navigation -->
        <!-- /Top Navigation -->
        <!-- Breadcrumb -->
        <!-- Page Title -->
        <!-- /Page Title -->

        <!-- /Breadcrumb -->
        <!-- Main Content -->
        <!-- /Main Content -->
    </div>
    <!-- /Page Content -->
</div>
<!-- Back to Top -->
<a id="back-to-top" href="#" class="back-to-top">
    <span class="ti-angle-up"></span>
</a>
<!-- /Back to Top -->

<!-- Jquery Library-->
<script src="js/jquery-3.2.1.min.js"></script>
<!-- Popper Library-->
<script src="js/popper.min.js"></script>
<!-- Bootstrap Library-->
<script src="js/bootstrap.min.js"></script>
<!-- morris charts -->
<script src="charts/js/raphael-min.js"></script>
<script src="charts/js/morris.min.js"></script>
<script src="js/custom-morris.js"></script>

<!-- Custom Script-->
<script src="js/custom.js"></script>
</body>

</html>