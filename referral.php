<?php 
    $activePage = 'referral';
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
    <link rel="stylesheet" href="css/table.css">

	<title>Referral</title>


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
					<h1>Referral Bonus Program</h1>
				</div>
			</div>

            <div class="box-info">
                <section>
                    <h3 style="color:var(--dark);">Your Referral Table</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Signup Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add rows dynamically for each referred person -->
                            <tr>
                                <td>John Doe</td>
                                <td>john.doe@example.com</td>
                                <td>2023-01-01</td>
                            </tr>
                            <tr>
                                <td>Tomiwa Gig</td>
                                <td>tommytown@example.com</td>
                                <td>2023-12-07</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </section>
            </div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="js/dashboard.js"></script>
	<script src="js/copy.js"></script>
</body>
</html>