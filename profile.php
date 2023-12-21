<?php 
    include('config/constants.php'); 
    include('partials/login-check.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/session.css">
    <link rel="stylesheet" href="css/sidebar.css">
    	 <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


	<title>Dashboard</title>
</head>
<body>
	<!-- sidebar  -->
    <?php include('partials/sidebar.php') ?>
	<!-- sidebar  -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<?php include('partials/navbar.php') ?>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>profile</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">profile</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
	<script src="js/dashboard.js"></script>
	<script src="js/copy.js"></script>
</body>
</html>