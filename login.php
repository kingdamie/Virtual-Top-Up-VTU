<?php include('config/constants.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/session.css">
</head>
<body>
    <div class="login">
        <h1>Login</h1>

        <?php
            if(isset($_SESSION['login'])){// to check if is set or not
                echo $_SESSION['login'];//Displaying session message if set
                unset($_SESSION['login']);// Removing session message
            }

            
            if(isset($_SESSION['no-login-message'])){// to check if is set or not
                echo $_SESSION['no-login-message'];//Displaying session message if set
                unset($_SESSION['no-login-message']);// Removing session message
            }
?>

        <form action="" method="post">
            <div class="form-group">

                <div class="form-input">
                    <label for="Username">Username: </label>
                    <input type="text" placeholder="Username" name="username" required>
                </div>

                <div class="form-input">
                    <label for="password">Password: </label>
                    <input type="password" placeholder="Password" name="password" required>
                </div>

            </div>
            <div class="sigin">Are you new? <a href="<?php echo SITEURL.'/register.php' ?>">register</a></div>
            <input type="submit" value="Login" name="submit">
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    // get the data from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, username FROM tbl_user WHERE username='$username' AND password='$password'";

    $res = mysqli_query($connect, $sql);

    // count rowa to check whether the user exists or not
    $count = mysqli_num_rows($res);

    // to pass the id as url 
     $row = mysqli_fetch_assoc($res);


    if($count==1){
        //User Available and Login Success
        $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
        $_SESSION['user'] = $row['id']; // to check whether the user is logged in or not and logout will unset it
        header("location:" . SITEURL . 'index.php');
    }else{
        //User not Available and Login Fail
        $_SESSION['login'] = "<div class='error'>Username or Password did not match.</div>";
        header("location:".SITEURL.'login.php');
    }
}
?>