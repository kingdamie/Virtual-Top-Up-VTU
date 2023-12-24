<?php 
    $activePage = 'generatepin';
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

    <title>Generate Pin</title>
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
                    <h1>Create Pin</h1>
                </div>
            </div>
            <?php
                if(isset($_SESSION['pin'])) {
                    echo $_SESSION['pin'];
                    unset($_SESSION['pin']);
                }
                if(isset($_SESSION['pin2'])) {
                    echo $_SESSION['pin2'];
                    unset($_SESSION['pin2']);
                }
            ?>
            <form action="" method="POST">
                <div class="box-info">
                    <div class="network" style="display:block;">
                        <h4>New Pin:</h4>
                        <div class="box">
                            <input type="number" name="pin" placeholder="New Pin (5 digit)" required>
                        </div>
                    </div>
                    <div class="network" style="display:block;">
                        <h4>Confirm Pin:</h4>
                        <div class="box">
                            <input type="number" name="confirm-pin" placeholder="Confirm Pin (5 digit)" required>
                        </div>
                    </div>
                </div>

                <center><input type="submit" class="primary-btn" value="Create" name="submit" ></center>
            </form>
            
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <!-- Modal -->
    <div id="myModal" class="modal success">
        <!-- Modal content -->
        <div class="modal-content" style="text-align:center;">
            <!-- <span class="close" onclick="closeModal()">&times;</span> -->
            <div class="con" >
                <img src="images/gif.gif" alt="" width="50%" height="50%">
                <p>Pin Successfully Created</p>
                <a href="index.php">OK</a>
            </div>
        </div>
    </div>

    <!-- <script src="js/modal.js"></script> -->
    <script src="js/dashboard.js"></script>
    <script src="js/copy.js"></script>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Function to open the modal
        function gen() {
            modal.style.display = "block";
        }

        // Function to close the modal
        function closeModal() {
            modal.style.display = "none";
        }
    </script>

    <?php
        if (isset($_POST['submit'])) {
            $pin = $_POST['pin'];
            $confirm = $_POST['confirm-pin'];

            // Check the length of $pin and $confirm
            if (strlen($pin) !== 5 || strlen($confirm) !== 5) {
                echo "<script>window.location = 'generatepin.php';</script>";
                $_SESSION['pin'] = "<div class='error'>Pins must be 5 digits</div>";
            } else {
                // Check if $pin and $confirm match
                if ($pin === $confirm) {
                     echo "<script>gen();</script>"; // This line triggers the JavaScript function
                } else {
                    echo "<script>window.location = 'generatepin.php';</script>";
                    $_SESSION['pin2'] = "<div class='error'>Pins don't match</div>";
                }
            }
        }
    ?>

</body>
</html>
