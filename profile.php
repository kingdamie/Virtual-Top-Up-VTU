<?php 
    $activePage = 'profile';
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
    <link rel="stylesheet" href="css/profile.css">

	<title>profile</title>
</head>

        <?php
            if(isset($_GET['id'])){
                //1. get the id of selected admin
                $id = $_GET['id'];
                //2. create sql Query to get details
                $sql = "SELECT * FROM tbl_user WHERE id=$id";
                //execute the Query
                $res=mysqli_query($connect,$sql);
                $count = mysqli_num_rows($res);
                if($count==1){
                    $rows = mysqli_fetch_assoc($res);
                    $current_image = $rows['image_name'];
                }
                else{
                    $_SESSION['no-category-found'] = "<div class='error'>Not image Found</div>";
                    header('location:'.SITEURL.'settings.php');
                }
            }
            else{
                header('loction:'.SITEURL.'index.php');
                }
?>
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

            <?php
                            if(isset($_SESSION['remove'])){// to check if is set or not
                                echo $_SESSION['remove'];//Displaying session message if set
                                unset($_SESSION['remove']);// Removing session message
                            }
                            if(isset($_SESSION['upload'])){// to check if is set or not
                                echo $_SESSION['upload'];//Displaying session message if set
                                unset($_SESSION['upload']);// Removing session message
                            }
                             if(isset($_SESSION['update-img'])){// to check if is set or not
                                echo $_SESSION['update-img'];//Displaying session message if set
                                unset($_SESSION['update-img']);// Removing session message
                            }
                    ?>

			<div class="profile-container">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="profile-picture">
                        <?php
                            if($current_image!= ""){
                                ?>
                                <img src="<?php echo SITEURL; ?>images/profiles/<?php echo $current_image?>" alt="<?php echo $current_image?>" width="100px">
                                <?php
                            }
                            else{
                                echo "<div class='error'>No Image Found</div>";
                            }
                        ?>
                    </div>
                
                
                    <label for="">Edit profile picture</label>
                    <input type="file" name="image">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
                    <input type="submit" name="submit" value="upload">
                </form>

                <?php
                if(isset($_POST['submit'])){
                    $id = $_POST['id'];
                    $current_image = $_POST['current_image'];

                           //updating new images if selected
        // check whether the image is selected or not
        if(isset($_FILES['image']['name'])){
            // get the images details
            $image_name = $_FILES['image']['name'];
            // chech whether the images is available or not
            if($image_name != ""){
                // image available
                //A. upload the new image
                $image_name = $_FILES['image']['name'];
                    //upload image if only selected
                    if($image_name!=""){
                        // Auto rename an image
                        // get the extension of our image[jpg, png, etc]
                        $ext = pathinfo($image_name, PATHINFO_EXTENSION);
                        // rename the image
                        $image_name = "Profiles_".rand(000, 999).'.'.$ext;
                        
                        $source_path =  $_FILES['image']['tmp_name'];
                        $destination_path = "images/profiles/".$image_name;

                        $upload = move_uploaded_file($source_path, $destination_path);

                        if($upload == false){
                            $_SESSION['upload']= "<div class='error'>Failed to upload image</div>";
                            header("location:".SITEURL.'admin/add-category.php');
                            //stop the process
                            die();
                        }
                //B. remove the current image if avaliable
                if($current_image!= ""){
                    $remove_path = "images/profiles/".$current_image;
                    $remove = unlink($remove_path);

                    //if failed to remove image add an error message and stop process
                    if($remove == false){
                    $_SESSION['remove'] = "<div class='error'>Failed to remove current image</div>";
                    die();
                }
                
            }
            }else{
                $image_name = $current_image;
            }
        }else{
            $image_name = $current_image;
        }
        //create a sql query to update 
        $sql2 = "UPDATE tbl_user SET 
        image_name='$image_name'
        WHERE id = '$id'
        ";

        // exeute the query 
        $res2 = mysqli_query($connect, $sql2);

        if($res==TRUE){
            // Query exceuted and admin updated
            $_SESSION['update-img'] = "<div class='success'>Pictures Updated successful</div>";
            echo "<script>window.location.href = 'index.php';</script>";
        }else{
            $_SESSION['update-img'] = "<div class='error'>Failed to Update Pictures</div>";
        }
    }
                }
                ?>

                <div class="profile-info">
                    <label>Full Name:</label>
                    <span>User Full Name</span>

                    <label>Email:</label>
                    <span>user@example.com</span>

                    <label>Username:</label>
                    <span>username123</span>

                    <label>Password:</label>
                    <span>*********</span>
                </div>

                <button class="edit-button" onclick="editProfile()">Edit Profile</button>
            </div>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="js/dashboard.js"></script>
	<script src="js/copy.js"></script>
</body>
</html>