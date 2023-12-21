<?php 
    include('config/constants.php'); 
    include('partials/login-check.php');
?>
<?php
            if(isset($_SESSION['add'])){// to check if is set or not
                echo $_SESSION['add'];//Displaying session message if set
                unset($_SESSION['add']);// Removing session message
            }
            if(isset($_SESSION['login'])){// to check if is set or not
                echo $_SESSION['login'];//Displaying session message if set
                unset($_SESSION['login']);// Removing session message
            }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <!-- <h2>Sidebar</h2> -->
            <ul>
                <li>
                    <a href="#">
                        <img src="images/dashboard.png" width="25%">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="images/user.png" width="25%">
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="images/gear.png" width="25%">
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <img src="images/logout.png" width="25%">
                        <span>Log Out</span>
                    </a>
                </li>
                <!-- Add more sidebar items as needed -->
            </ul>
        </div>

        <div class="inner-container">
            <header>
                <div class="menu-button" onclick="toggleMenu()">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>

                <h1>Dashboard Header</h1>
            </header>

            <main>
                <h2>Main Content</h2>
                <p>This is the main content area of your dashboard.</p>
            </main>
        </div>

    </div>
</body>


<script>
    let isOpen = false;

    function toggleMenu() {
        const bars = document.querySelectorAll('.bar');
        const sidebar = document.querySelector('.sidebar');
        const Links = document.querySelectorAll('.sidebar ul li a');
        const sidebarLinks = document.querySelectorAll('.sidebar ul li a span');
        const sidebarImages = document.querySelectorAll('.sidebar ul li a img');

        if (isOpen) {
            bars[0].style.transform = 'rotate(0) translate(0, 0)';
            bars[1].style.opacity = '1';
            bars[2].style.transform = 'rotate(0) translate(0, 0)';
            sidebar.style.flex = '0.1';
            

            // Hide spans
            sidebarLinks.forEach(span => {
                span.style.display = 'none';
            });
            Links.forEach(link => {
                link.style.justifyContent = 'center';
            });
            sidebarImages.forEach(img => {
                img.style.width = '50%'; // Adjust the width as needed
                
            });
        } else {
            bars[0].style.transform = 'rotate(45deg) translate(5px, 6px)';
            bars[1].style.opacity = '0';
            bars[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
            sidebar.style.flex = '0.2';

            // Show spans
            sidebarLinks.forEach(span => {
                span.style.display = 'block';
            });
            Links.forEach(link => {
                link.style.justifyContent = 'flex-start';
            });
            sidebarImages.forEach(img => {
                img.style.width = '25%'; // Adjust the width as needed
            });
        }

        isOpen = !isOpen;
    }
</script>


</html>
