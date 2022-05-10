<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Saint Luke's Hospital</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="images/fav.png">
	<!-- Bootstrap core CSS -->
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

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
	<link rel="stylesheet" href="datatable/dataTables.bootstrap4.min.css">

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
		<!-- /Sidebar -->
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
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Patient Details</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index.php">
								<span class="ti-home"></span>
							</a>
						</li>
						<li class="breadcrumb-item">Patients</li>
						<li class="breadcrumb-item active">Patient Details</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-6">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Patient Details</h3>
							<div class="table-responsive">
								<table class="table table-bordered">
									<tbody>
										<tr>

											<?php
											$servername = "localhost";
											$username = "root";
											$password = "";
											$dbname = "e-care";
											$namee = $_GET['name'];
											$_SESSION['name'] = $namee;
											echo $_SESSION['name'];
											$conn = new mysqli($servername, $username, $password, $dbname);
											$sql = "SELECT * FROM patients WHERE Full_Name='$namee'";
											$result = mysqli_query($conn, $sql);
											if ($conn->connect_error) {
												die("Connection failed: " . $conn->connect_error);
											}
											if (mysqli_num_rows($result) > 0) {
												if ($row = mysqli_fetch_assoc($result)) {

													echo "<td ><strong>Name</strong></td>";
													echo "<td id='name'>" . $row['Full_Name'] . "</td>";



													echo "	</tr>";
													echo "<tr>";
													echo "	<td><strong>Date Of Birth</strong> </td>";
													echo "	<td>" . $row['Date_Of_Birth'] . "</td>";
													echo "</tr>
										<tr>
											<td><strong>Gender</strong></td>";
													echo "<td>" . $row['Gender'] . "</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td><strong>Address</strong></td>";
													echo "<td>" . $row['Address'] . "</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<td><strong>Phone </strong></td>";
													echo "<td>" . $row['Phone_Number'] . "</td>";
													echo "</tr>";
													echo "<tr><td><strong>Email</strong></td>";
													echo "<td>" . $row['Email'] . "</td>";
													echo "</tr>";
													echo "</tbody>";
													echo "</table>";
													echo "</div>";
												}
											}


											$conn->close();

											?>
											<!--Export links-->
											<nav aria-label="Page navigation example">
												<ul class="pagination justify-content-center export-pagination">
													<li class="page-item">
														<a class="page-link" href="#"><span class="ti-download"></span> csv</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#"><span class="ti-printer"></span> print</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
													</li>
												</ul>
											</nav>
											<script>
												function delete_p() {
													const name = document.getElementById('name').value;
													alert(name);
													if (confirm("Are you sure you want to delete this patient?")) {
														location.href = 'delete_patient.php';

													}


												}
											</script>
											<!-- /Export links-->
											<?php
											$namee = $_GET['name'];
											echo "<a href='edit-patient.php?name={$namee}' class='btn btn-success mb-3' onclick='edit()'><span class='ti-pencil-alt'></span> Edit Patient</a>
                            <button type='button' class='btn btn-danger mb-3' onclick='delete_p()' id='delete_patient' ><span class='ti-trash'></span> Delete Patient</button>
                            <button type='button' class='btn btn-info mb-3'><span class='ti-arrow-down'></span> Download File</button>";
											?>
							</div>
						</div>
						<!-- /Widget Item -->
						<!-- Widget Item -->

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

		<!-- Datatable  -->
		<script src="datatable/jquery.dataTables.min.js"></script>
		<script src="datatable/dataTables.bootstrap4.min.js"></script>

		<!-- Custom Script-->
		<script src="js/custom.js"></script>

</body>

</html>