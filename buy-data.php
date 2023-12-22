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

                <center><input type="button" class="primary-btn" value="Buy" id="openModalButton1"></center>
            </form>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <!-- Modal -->
    <div id="myModal1" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" id="closeModal1">&times;</span>
            <form action="" method="post" class="modal-form"  id="firstModalForm">
                <h4>Pin</h4>
                <input type="number" placeholder="PIN">
                
                <center><input class="button" type="button" value="OK" id="openModalButton2FromModal1"></center>
            </form>
        </div>
    </div>

    <div id="myModal2" class="modal success">
        <div class="modal-content">
            <div class="con" >
                <img src="images/gif.gif" alt="" width="50%" height="50%">
                <p>Transaction Successfully </p>
                <a href="index.php">OK</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const openModalButton1 = document.getElementById('openModalButton1');
            const myModal1 = document.getElementById('myModal1');
            const closeModal1 = document.getElementById('closeModal1');
            const openModalButton2FromModal1 = document.getElementById('openModalButton2FromModal1');
            const myModal2 = document.getElementById('myModal2');
            
            openModalButton1.addEventListener('click', function () {
                myModal1.style.display = 'block';
            });

            closeModal1.addEventListener('click', function () {
                myModal1.style.display = 'none';
            });

            openModalButton2FromModal1.addEventListener('click', function () {
                myModal1.style.display = 'none';
                myModal2.style.display = 'block';
            });

            window.addEventListener('click', function (event) {
                if (event.target === myModal1) {
                myModal1.style.display = 'none';
                }
            });
            closeModal2.addEventListener('click', function () {
                myModal2.style.display = 'none';
            });

        });


    </script>
    <script src="js/dashboard.js"></script>
    <script src="js/copy.js"></script>
</body>
</html>
