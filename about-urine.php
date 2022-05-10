<!DOCTYPE html>
<html>
<?php session_start();
?>
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
						<span class="ti-pencil-alt"></span> Hormone Analysis
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
					<h3 class="block-title">Report Details</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="index.php">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Report</li>
						<li class="breadcrumb-item active">Report Details</li>
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
                            <h3 class="widget-title">Report Details</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
									<?php
											$servername = "localhost";
                                              $username = "root";
                                              $password = "";
                                              $dbname = "e-care";
                                               $id=$_GET['id'];
											   $_SESSION['id']=$id;
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                         $sql = "SELECT * FROM urine_analysis WHERE id='$id'";
                                          $result = mysqli_query($conn, $sql);
                                           if ($conn->connect_error) {
                                             die("Connection failed: " . $conn->connect_error);
                                                }
                                                 if (mysqli_num_rows($result) > 0) {
                                                 if($row =mysqli_fetch_assoc($result)) {
													echo" 
                                        <tr>
                                            <td><strong>Patient ID</strong></td>
                                            <td id ='id'>".$row['id']."</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Color</strong></td>
                                            <td>".$row['color']."</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Appearance</strong></td>
                                            <td>".$row['Apperance']."</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Leaukocytes</strong></td>
                                            <td>".$row['leukonyce']."</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Protein </strong></td>
                                            <td>".$row['Protin']."</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Blood </strong></td>
                                            <td>".$row['blood']."</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Specific Gravity </strong></td>
                                            <td>".$row['gravity']."</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Ketone </strong></td>
                                            <td>".$row['ketonic']."</td>
                                        </tr>
                                       ";
								}
							}
										?>
										<script>
								function delete_p(){
								const name =document.getElementById('id').value;
								        if(confirm("Are you sure you want to delete this report?")){
								            location.href='delete_urine.php';

								        }


								}

								</script>
                                    </tbody>
                                </table>
                                <!--Export links-->
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination export-pagination">
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
                                <!-- /Export links-->
                            
                                <button type="button" class="btn btn-danger mb-3" onclick="delete_p()"><span class="ti-trash"></span> Delete
                                    Report</button>
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
    
    <!-- Datatable  -->
	<script src="datatable/jquery.dataTables.min.js"></script>
	<script src="datatable/dataTables.bootstrap4.min.js"></script>
    
	<!-- Custom Script-->
	<script src="js/custom.js"></script>

</body>

</html>