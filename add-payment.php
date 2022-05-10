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

			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Add Payment</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index.php">
								<span class="ti-home"></span>
							</a>
						</li>
						<li class="breadcrumb-item">Payments</li>
						<li class="breadcrumb-item active">Add Payment</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Add Payment</h3>
							<form method="post" action="add_payment.php">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="patient-id">Patient ID</label>
										<input type="text" class="form-control" placeholder="Patient ID" id="patient-id" name="patient-id" required>
									</div>

									<div class="form-group col-md-6">
										<label for="department">Department</label>
										<select class="form-control" id="department" name="department">
											<option>Neurosurgery</option>
											<option>Pediatrics</option>
											<option>Children's Surgery</option>
											<option>Orthopedic surgery</option>
											<option>General Surgery</option>
											<option>Prosthetics Specialist</option>
											<option>Urological Surgery</option>
											<option>Oncology and breast surgery</option>
											<option>Specialist in brain and neurology, movement and tremors</option>
											<option>Pediatric respiratory and pulmonary endoscopy clinic</option>
											<option>Endocrinology and diabetes specialist</option>
											<option>EEG and EMG Clinic</option>
											<option>TCD Clinic</option>
										</select>
									</div>


									<div class="form-group col-md-6">
										<label for="discharge-date"> Date</label>
										<input type="date" placeholder="Discharge Date" class="form-control" name="date" id="discharge-date " value='<?php echo date('Y-m-d'); ?>' required>
									</div>
									<div class="form-group col-md-12">
										<h4>Services</h4>
									</div>
									<div class="form-group col-md-6">
										<label for="service-name">Service Name</label>
										<input type="text" placeholder="Service Name" class="form-control" id="service-name" name="service_name" required>
									</div>
									<div class="form-group col-md-6">
										<label for="treatment-cost">Cost of Treatment</label>
										<input type="text" placeholder="Cost of Treatment" class="form-control" id="treatment-cost" name="service_cost" required>
									</div>

									<div class="form-group col-md-12">
										<h4>Insurance Details </h4>
									</div>

									<div class="form-group col-md-3">
										<label for="discount">Discount (%)</label>
										<input type="text" placeholder="Discount" class="form-control" id="discount" name="discount">
									</div>
									<div class="form-group col-md-3">
										<label for="advance-paid"> Insurance Company</label>
										<input type="text" placeholder="Company Name" class="form-control" id="advance-paid" name="company_name">
									</div>
									<div class="form-group col-md-3">
										<label for="insurance"> Insurance Number</label>
										<input type="text" placeholder="" class="form-control" id="insurance" name="Insurance_Number">
									</div>
									<div class="form-group col-md-12">

										<div class="alert alert-warning alert-dismissible fade show" role="alert">
											Leave it Empty if You Don't have any Insurance details.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
										</div>
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
							<!-- Alerts-->


							<!-- /Alerts-->
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

	<!-- Datatable  -->
	<script src="datatable/jquery.dataTables.min.js"></script>
	<script src="datatable/dataTables.bootstrap4.min.js"></script>

	<!-- Custom Script-->
	<script src="js/custom.js"></script>

</body>

</html>