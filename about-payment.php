<?php session_start(); ?>
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
				<a href="index.php"><img src="images/logo.png" class="logo" width="200px" style="border-radius: 50%" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">

				<li>
					<a href="#nav-patients" data-toggle="collapse" aria-expanded="false">
						<span class="ti-wheelchair"></span> Patients
					</a>
					<ul class="collapse list-unstyled" id="nav-patients">
						<li>
							<a href="add-patient.php">Add Patient</a>
						</li>
						<li>
							<a href="patients.php">All Patients</a>
						</li>

					</ul>
				</li>
				<li>
					<a href="#nav-doctors" data-toggle="collapse" aria-expanded="false">
						<span class="ti-user"></span> Doctors
					</a>
					<ul class="collapse list-unstyled" id="nav-doctors">
						<li>
							<a href="add-doctor.html">Add Doctor</a>
						</li>
						<li>
							<a href="doctors.php">All Doctors</a>
						</li>

					</ul>
				</li>
				<li>
					<a href="#nav-appointment" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Appointments
					</a>
					<ul class="collapse list-unstyled" id="nav-appointment">
						<li>
							<a href="add-appointment.php">Add Appointment</a>
						</li>
						<li>
							<a href="appointments.php">All Appointments</a>
						</li>

					</ul>
				</li>
				<li>
					<a href="#nav-payment" data-toggle="collapse" aria-expanded="false">
						<span class="ti-money"></span> Payments
					</a>
					<ul class="collapse list-unstyled" id="nav-payment">
						<li>
							<a href="add-payment.php">Add Payment</a>
						</li>
						<li>
							<a href="payments.php">All Payments</a>
						</li>

					</ul>
				</li>

			</ul>
			<div class="nav-help animated fadeIn">
				<h5><span class="ti-comments"></span> Need Help</h5>
				<h6>
					<span class="ti-mobile"></span> 09-2383818
				</h6>
				<h6>
					<span class="ti-email"></span> SaintLuke's@gmail.com
				</h6>
				<p class="copyright-text">Copy rights &copy; 2022</p>
			</div>
		</nav>
		<!-- Sidebar -->
		<!-- Page Content -->
		<div id="content">
			<!-- Top Navigation -->
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
								<h5><?php echo $_SESSION['username']; ?>
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
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Payment Invoice</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index.php">
								<span class="ti-home"></span>
							</a>
						</li>
						<li class="breadcrumb-item">Payments</li>
						<li class="breadcrumb-item active">Payment Invoice</li>
					</ol>
				</div>
			</div>
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "e-care";
			$namee = $_GET['name'];
			$conn = new mysqli($servername, $username, $password, $dbname);
			$sql = "SELECT * FROM patients WHERE id='$namee'";
			$result = mysqli_query($conn, $sql);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			if (mysqli_num_rows($result) > 0) {
				if ($row = mysqli_fetch_assoc($result)) {

					echo "		<div class='container-fluid'>
				<div class='row'>
						<div class='col-md-12'>
							<div class='widget-area-2 proclinic-box-shadow pb-3'>
							
								<div class='row'>
									<div class='col-sm-6 mb-5'>
										<h6 class='proclinic-text-color'>PATIENT DETAILS:</h6>
										<span><strong>Name:</strong>" . $row['Full_Name'] . "</span>
										<br>
										<span><strong>Date Of Birth:</strong> " . $row['Date_Of_Birth'] . "</span>
										<br>
										<span><strong>Address: </strong>" . $row['Address'] . "</span>
										<br>
										<span><strong>Phone:</strong>" . $row['Phone_Number'] . "</span>
										<br>
										<span><strong>Email:</strong>" . $row['Email'] . "</span>
										<br>
										<span><strong>Phone:</strong>" . $row['Gender'] . "</span>
									</div>
									<div class='col-sm-6 mb-5'>
										<span><strong>Patient ID:</strong> " . $row['id'] . "</span>
									
									
									</div>";
				}
			}
			$conn->close();


			?>

			<div class="col-sm-12 mb-2">
				<strong class="proclinic-text-color">Services:</strong>
			</div>
			<div class="col-sm-12">
				<table class="table table-bordered table-striped table-invioce">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Service</th>
							<th scope="col">Unit Cost</th>
							<th scope="col">Discount <small>(%)</small></th>
							<th scope="col">Total</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$servername = "localhost";
						$username = "root";
						$password = "";

						$dbname = "e-care";
						$name = $_GET['name'];
						$_SESSION['discount'] = 0;
						$row1;
						$discount;


						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						$sql = "SELECT * FROM payments WHERE Patiend_ID='$name'";
						$result = mysqli_query($conn, $sql);
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}
						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								if (!strcmp($row['Insurance_Valid'], "Yes")) {
									$id = $row['Patiend_ID'];
									$sql1 = "SELECT * FROM insurance_company WHERE Patient_ID='$id'";
									$result1 = mysqli_query($conn, $sql1);
									if (mysqli_num_rows($result1) > 0) {
										while ($row1 = mysqli_fetch_assoc($result1)) {
											$discount = $row1['Insurance_Discount'];
											$_SESSION['discount'] = $row1['Insurance_Discount'];
										}
									} else {
									}
								} else {
									$_SESSION['discount'] = 0;
								}
								$priceafter = (int)$row['Cost'] - (int)(($_SESSION['discount'] * $row['Cost']) / 100);
								echo "
												<tr>
													<th scope='row'>1</th>
													<td>" . $row['Service_Type'] . "</td>
													<td>" . $row['Cost'] . "</td>
													<td>" . $_SESSION['discount'] . "</td>
													<td>" . $priceafter . "</td>
												</tr>
												";
							}
						}
						?>


					</tbody>
				</table>
			</div>



			<div class="col-sm-12">
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center export-pagination mt-3 mb-0">
						<li class="page-item">
							<a class="page-link" href="#"><span class="ti-printer"></span> print</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<!-- /Invoice Content -->
	</div>
	</div>
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
	<!-- Custom Script-->
	<script src="js/custom.js"></script>
</body>

</html>