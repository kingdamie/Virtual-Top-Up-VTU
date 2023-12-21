<?php 
    $activePage = 'air2cash';
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
					<h1>Airtime 2 Cash</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Airtime 2 Cash</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="js/dashboard.js"></script>
	<script src="js/copy.js"></script>
</body>
</html>