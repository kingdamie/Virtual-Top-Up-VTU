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

    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

    <title>Buy Data</title>

    <style>
    /* Responsive styling for SweetAlert */
    .swal2-popup {
      width: 70% ;
      max-width: 400px;
      font-size: 1em;
      padding: 20px;
    }

    @media (max-width: 600px) {
      .swal2-popup {
        width: 70% !important;
        margin-right: 30px !important;
      }
    }

    .swal2-title {
      font-size: 1.5em;
    }

    .swal2-actions button {
      width: 100%;
      margin-top: 10px;
    }
  </style>
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
                            <span class="index">+234</span>
                            <input type="number" class="phone-no">
                        </div>
                    </div>

                    <div class="network nt">
                        <h4>Network:</h4>
                        <div class="box" style="cursor: not-allowed;">
                            <span>MTN</span>
                        </div>
                    </div>

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

                    <div class="network nt">
                        <h4>Amount:</h4>
                        <div class="box" style="cursor: not-allowed;">
                            <span>2,000.00</span>
                        </div>
                    </div>

                    <div class="network nt">
                        <h4>Pin:</h4>
                        <div class="box">
                            <input type="number" placeholder="PIN">
                        </div>
                    </div>
                </div>

                <center><input type="button" class="primary-btn" value="Buy" id="buyButton" ></center>
            </form>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    <!-- Include SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

   <script>
        document.addEventListener('DOMContentLoaded', function () {
            const buyButton = document.getElementById('buyButton');

            buyButton.addEventListener('click', function () {
                showAlert();
            });

            // Function to trigger SweetAlert
            function showAlert() {
                Swal.fire({
                    title: 'SweetAlert Title',
                    text: 'Your message goes here',
                    icon: 'success', // You can change it to 'info', 'warning', 'error', etc.
                });
            }
        });
    </script>
    <script src="js/dashboard.js"></script>
    <script src="js/copy.js"></script>
</body>
</html>
