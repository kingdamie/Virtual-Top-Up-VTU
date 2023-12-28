	<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<div class="profile">
                <i class='bx bxs-user'></i>
                <div class="dropdown">
                    <?php
                    $id = $_SESSION['user'];
                    $sql = "SELECT * FROM tbl_user WHERE id = '$id'";
                    $res = mysqli_query($connect, $sql);
                    $count = mysqli_num_rows($res); // function to get all the rows in database
                    if($count>0){
                        while($rows =mysqli_fetch_assoc($res)){
                            $id = $rows['id'];
                            ?>
                    <ul>
                        <li>
                            <a href="profile.php"><i class='bx bxs-user'></i>Profile</a>
                        </li><hr>
                        <li>
                            <a href="settings.php"><i class='bx bxs-cog' ></i>Settings</a>
                        </li><hr><?php
                        }
                    }
                    ?>
                        <li class="logout">
                            <a href="logout.php">
                                <i class='bx bxs-log-out-circle' ></i>Logout</a>
                        </li>
                    </ul>
                </div>
        </div>
		</nav>

		<script>
    // Function to set a cookie
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    // Function to get a cookie
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    // Function to handle checkbox state
    function handleCheckboxState() {
        const switchMode = document.getElementById("switch-mode");

        function updateBodyClass() {
            if (switchMode.checked) {
                document.body.classList.add("dark");
            } else {
                document.body.classList.remove("dark");
            }
        }

        switchMode.checked = getCookie("switchModeChecked") === "true";
        updateBodyClass();

        switchMode.addEventListener("change", function () {
            updateBodyClass();
            setCookie("switchModeChecked", switchMode.checked, 365);
        });
    }

    // Call the function when the document is ready
    document.addEventListener("DOMContentLoaded", handleCheckboxState);
</script>


		<!-- NAVBAR -->