<?php include('config/constants.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/session.css">
</head>
<body>
    <div class="login">
        <h1>Register</h1>

        <?php
            if(isset($_SESSION['add'])){// to check if is set or not
                echo $_SESSION['add'];//Displaying session message if set
                unset($_SESSION['add']);// Removing session message
            }

            if(isset($_SESSION['password'])){
                echo $_SESSION['password'];
                unset($_SESSION['password']);
            }
?>

        <form action="" method="post">
            <div class="form-group reg">
                <div class="form-input">
                    <label for="firstname">First Name: </label>
                    <input type="text" placeholder="First Name" name="first_name" required>
                </div>

                <div class="form-input">
                    <label for="lastname">Last Name: </label>
                    <input type="text" placeholder="Last Name" name="last_name" required>
                </div>

                <div class="form-input">
                    <label for="phone number">Phone Number: </label>
                    <input type="number" placeholder="Phone Number" name="phone_number">
                </div>

                <div class="form-input">
                    <label for="Username">Username: </label>
                    <input type="text" placeholder="Username" name="username" required>
                </div>

                <div class="form-input">
                    <label for="gmail">Gmail: </label>
                    <input type="gmail" placeholder="Gmail" name="gmail" required>
                </div>

                <div class="form-input">
                    <label for="password">Password: </label>
                    <input type="password" placeholder="Password" name="password" required>
                </div>

                <div class="form-input">
                    <label for="password">Confirm Password: </label>
                    <input type="password" placeholder="Confirm Password" name="confirm_password" required>
                </div>
            </div>
        <div class="sigin">You have an account<a href="<?php echo SITEURL.'/login.php' ?>">Sign in</a></div>
            <input type="submit" value="Register" name="submit">
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    // get the data from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $username = $_POST['username'];
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if the Gmail address already exists
    $check_query = "SELECT * FROM tbl_user WHERE gmail = '$gmail'";
    $check_result = mysqli_query($connect, $check_query);

    if(mysqli_num_rows($check_result) > 0){
        // Gmail address already exists
        $_SESSION['add'] = "<div class='error'>This Gmail address is already registered.</div>";
        header("location:".SITEURL.'register.php');
        exit();
    }

    // Continue with the registration if the Gmail address is not found
    if($password === $confirm_password){
        $sql = "INSERT INTO tbl_user(first_name, last_name, phone_number, username , gmail, password ) VALUES ('$first_name', '$last_name', '$phone_number', '$username' , '$gmail', '$password')";

        $res = mysqli_query($connect, $sql);

        if($res == true){
            $_SESSION['add'] = "<div class='success'>Registration Successful</div>";
            // redirect page to the login page
            header("location:login.php");
            exit();
        } else {
            $_SESSION['add'] = "<div class='error'>Failed to Register</div>";
            // redirect page to the registration page
            header("location:".SITEURL.'register.php');
            exit();
        }
    } else {
        $_SESSION['password'] = "<div class='error'>Password doesn't match.</div>";
        header("location:".SITEURL.'register.php');
        exit();
    }
}
?>
