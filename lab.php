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
				<a href="lab.php"><img src="images/logo.png" class="logo" width="200px" style="border-radius: 50%" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">

				<li>
					<a href="#nav-patients" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Urine Analysis
					</a>
					<ul class="collapse list-unstyled" id="nav-patients">
						
						<li>
							<a href="all_urine.php">All Urine Reports</a>
						</li>
					
					</ul>
				</li>
				<li>
					<a href="#nav-doctors" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Stool Anaylsis
					</a>
					<ul class="collapse list-unstyled" id="nav-doctors">
						
						<li>
							<a href="all_stool.php">All Stool Reports</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="#nav-appointment" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Hormones Analysis
					</a>
					<ul class="collapse list-unstyled" id="nav-appointment">
						
						<li>
							<a href="all_hormones.php">All Hormone Reports</a>
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
		<!-- /Sidebar -->
		<!-- Page Content -->
		<div id="content">
			<!-- Top Navigation -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="responsive-logo">
						<a href="index.php"><img src="images/logo-dark.png" class="logo" alt="logo"></a>
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
					<h3 class="block-title"></h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="lab.php">
								<span class="ti-home"></span>
							</a>
						</li>
						
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid home">


		
			<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title"> Requested Tests</h3>
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Patient ID</th>
											<th>Doctor</th>
											<th>Requested Test</th>

										
									</thead>
									<tbody>
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

                                        $sql2= "SELECT * FROM requested_tests ";
                                        
                                        $result = mysqli_query($conn, $sql2);
                                       
                                         if (mysqli_num_rows($result) > 0) {
                                           while($row =mysqli_fetch_assoc($result)) {
											   $id=$row['Patient_Id'];
											
                                     
                                     

                                      echo"  
										<tr>
											<td>".$row['Patient_Id']."</td>
											<td>".$row['Doctor_Name']."</td>";
											if ($row['Test_Type']=="Urine Test"){
												echo"<td><a href='urine_report.php?id={$id}'>".$row['Test_Type']."</a></td>";



											}
											if ($row['Test_Type']=="Stool Test"){
												echo"<td><a href='stool_report.php?id={$id}'>".$row['Test_Type']."</a></td>";

												

											}
                                     
											if ($row['Test_Type']=="Hormones Test"){
												echo"<td><a href='hormones_report.php?id={$id}'>".$row['Test_Type']."</a></td>";

												

											}
									
								echo"</tr>";
                                           }
										}
                                        
                                        ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>

			</div>
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