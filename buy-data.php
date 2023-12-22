<?php 
    $activePage = 'data';
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
    <link rel="stylesheet" href="css/buydata.css">
    <link rel="stylesheet" href="css/modal.css">


    <title>Buy Data</title>
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
                    <h1>Buy Data</h1>
                </div>
            </div>
            <form action="">
                <div class="box-info">
                    <div class="network">
                        <h4>Phone Number:</h4>
                        <div class="box">
                            <span>+234</span>
                            <input type="number">
                        </div>
                    </div>
                </div>

                <div class="box-info">
                    <div class="network nt">
                        <h4>Network:</h4>
                        <div class="box" style="cursor: not-allowed;">
                            <span>MTN</span>
                        </div>
                    </div>
                </div>

                <div class="box-info">
                    <div class="network nt">
                        <h4>Data Bundle:</h4>
                        <select class="box" id="customSelect" name="customSelect">
                            <option value="option1">mtn₦100 = 100MB</option>
                            <option value="option2">₦200 = 200MB</option>
                            <option value="option3">₦350 = 1GB</option>
                            <option value="option4">₦300 = 750MB</option>
                            <option value="option5">₦600 = 2GB</option>
                            <option value="option6">₦1000 = 3GB</option>
                        </select>
                    </div>
                </div>

                <div class="box-info">
                    <div class="network nt">
                        <h4>Amount:</h4>
                        <div class="box" style="cursor: not-allowed;">
                            <span>2,000.00</span>
                        </div>
                    </div>
                </div>

                <center><input type="button" class="primary-btn" value="Buy" id="buyButton"></center>
            </form>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <!-- Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <form action="" method="post" class="modal-form"  id="firstModalForm">
                <h4>Pin</h4>
                <input type="number" placeholder="PIN">
                <input type="submit" value="OK">
            </form>
        </div>
    </div>

    <script src="js/dashboard.js"></script>
    <script src="js/copy.js"></script>
    <script src="js/modal.js"></script>
</body>
</html>
