<!-- SIDEBAR -->
	<section id="sidebar">
		<!-- <a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a> -->
        <div class="about-user">
            <a href="profile.php"><img src="images/avatar.png" alt="logo"></a>
            <div class="detail">
                <?php
                    $username = $_SESSION['user'];
                    $sql = "SELECT * FROM tbl_user WHERE username = '$username'";
                    $res = mysqli_query($connect, $sql);
                    $count = mysqli_num_rows($res); // function to get all the rows in database
                    if($count>0){
                        while($rows =mysqli_fetch_assoc($res)){
                            $id = $rows['id'];
                            $last_name = $rows['last_name'];
                            $first_name = $rows['first_name'];
                            ?>
                            <p><?php echo "$last_name $first_name" ; ?></p>
                            <?php
                            
                        }
                    }
                ?>
            </div>
        </div>
		<ul class="side-menu top" id="sidebarMenu">
			<li <?php echo ($activePage === 'dashboard') ? 'class="active"' : ''; ?>>
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li  <?php echo ($activePage === 'trans') ? 'class="active"' : ''; ?>>
				<a href="transaction-history.php">
                    <i class=' bx bxs-file' ></i>
					<span class="text">Transaction History</span>
				</a>
			</li>
			<li <?php echo ($activePage === 'generatepin') ? 'class="active"' : ''; ?>>
				<a href="generatepin.php">
                    <i class='bx bx-pin' ></i>
					<span class="text">Generate Pin</span>
				</a>
			</li>
			<li  <?php echo ($activePage === 'data') ? 'class="active"' : ''; ?>>
				<a href="buy-data.php">
					<i class='bx bx-wifi' ></i>
					<span class="text">Buy Data Bundle</span>
				</a>
			</li>
			<li  <?php echo ($activePage === 'airtime') ? 'class="active"' : ''; ?>>
				<a href="buy-airtime.php">
					<i class='bx bx-mobile' ></i>
					<span class="text">Buy Airtime VTU</span>
				</a>
			</li>
			<li  <?php echo ($activePage === 'data-cou') ? 'class="active"' : ''; ?>>
				<a href="data-coupon.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Buy MTN Data Coupon</span>
				</a>
			</li>
            <li  <?php echo ($activePage === 'air2cash') ? 'class="active"' : ''; ?>>
				<a href="airtime2cash.php">
					<i class='bx bx-sort' ></i>
					<span class="text">Airtime To Cash</span>
				</a>
			</li>
            <li  <?php echo ($activePage === 'bill') ? 'class="active"' : ''; ?>>
				<a href="eletricity-bill.php">
					<i class='bx bx-bulb' ></i>
					<span class="text">Electricity Bill</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li  <?php echo ($activePage === 'setting') ? 'class="active"' : ''; ?>>
				<a href="settings.php">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>

	</section>
	<!-- SIDEBAR -->
