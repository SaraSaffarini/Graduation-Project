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
		<!-- Sidebar -->
		<nav id="sidebar" class="proclinic-bg">
			<div class="sidebar-header">
				<a href="doctor-home.php"><img src="images/logo.png" class="logo" width="200px" style="border-radius: 50%" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">
                <li>

					<a href="#nav-appointment" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Appointments
					</a>
					<ul class="collapse list-unstyled" id="nav-appointment">
						
						<li>
							<a href="doctor-home.php">All Appointments</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="#nav-payment" data-toggle="collapse" aria-expanded="false">
						<span class="ti-money"></span> Reports
					</a>
					<ul class="collapse list-unstyled" id="nav-payment">
						<li>
							<a href="doctor_urine.php">Show Urine Test Result</a>
						</li>
                        <li>
							<a href="doctor_stool.php">Show Stool Test Result</a>
						</li>
						<li>
							<a href="doctor_hormones.php">Show Hormone Test Result</a>
						</li>
					
					</ul>
		
				<li>

					<a href="#nav-pattient" data-toggle="collapse" aria-expanded="false">
				<span class="ti-pencil-alt"></span> Patients
				</a>
				<ul class="collapse list-unstyled" id="nav-pattient">
				
						<li>
							<a href="show_patient_file.php">Show Patients File</a>
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
						<a href="doctor-home.php"><img src="images/logo-dark.png" class="logo" alt="logo"></a>
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
					
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="doctor-home.php">
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
                <div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Add Patient File</h3>

							<form method='post' id="form" action='add-patient-file.php'>
								<div class="form-row">
                                    <div class="form-group col-md-6">
										<label for="specialization">Patient ID</label>
										 <?php
										 $id=$_GET['id'];
										 echo"
										<input type='text'  class='form-control' id='specialization' name='patient_id' required  value='{$id}'>";
										?>
									</div>
									<div class="form-group col-md-6">
										<label for="Doctor-name">Visit_Date</label>
										<input type="date" class="form-control" placeholder="" id="Doctor-name" name="visit_date"  value="<?php echo date('Y-m-d'); ?>" required >
									</div>
									<div class="form-group col-md-6">
										<label for="dob">Diagnosis</label>
										<input type="text" placeholder="" class="form-control" id="dob" name="diagnosis" required>
                                    </div>
									<div class="form-group col-md-6">
										<label for="about-doctor">Allergies</label>
										<input type="text" placeholder="" class="form-control" id="about-doctor" rows="3" name="allergies" required> 
                                    </div>
                                    <div class="form-group col-md-6">
										<label for="about-doctor1">Doctor Name</label>
										<?php
										 $doctorname=$_GET['name'];
										 echo"
										<input type='text' placeholder='' class='form-control' id='about-doctor1' rows='3' name='name' required value='{$doctorname}'>";
                                    ?>
										</div>
									
                                   
												
									<div class="form-check col-md-12 mb-2">
										<div class="text-left">
											<div class="custom-control custom-checkbox">
												<input class="custom-control-input" type="checkbox" id="ex-check-2">
												<label class="custom-control-label" for="ex-check-2">Please Confirm</label>
											</div>
										</div>
									</div>
									<div class="form-group col-md-6 mb-3">
										<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
							</form>

						
							<!-- /Alerts-->
						</div>
					</div>
				</div>

					<!-- /Widget Item -->
					<!-- Widget Item -->
					

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