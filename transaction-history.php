<?php 
    $activePage = 'trans';
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
    <link rel="stylesheet" href="css/table.css">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



	<title>Transaction History</title>

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
					<h1>Transaction History</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">My History</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
					</ul>
				</div>
			</div>
			
			<div class="inss">
				<input type="text" id="searchInput" oninput="searchTable()" placeholder="Search for a value...">
			</div>

    <table id="myTable">
		<tr>
			<th>S/N</th>
			<th>Date | Time</th>
			<th>Description</th>
			<th>Amount</th>
			<th>Balance</th>
		</tr>
		<tr>
			<td>1</td>
			<td>2023-12-24 | 09:45 AM</td>
			<td>Deposit</td>
			<td>₦1,000.00</td>
			<td>₦5,500.00</td>
		</tr>
		<tr>
			<td>2</td>
			<td>2023-02-15 | 12:30 PM</td>
			<td>Airtime</td>
			<td>₦1,000.00</td>
			<td>₦5,500.00</td>
		</tr>
		<tr>
			<td>3</td>
			<td>2023-03-05 | 03:15 PM</td>
			<td>Data</td>
			<td>₦1,000.00</td>
			<td>₦5,500.00</td>
		</tr>
		<tr>
			<td>4</td>
			<td>2023-04-18 | 10:00 AM</td>
			<td>Deposit</td>
			<td>₦1,000.00</td>
			<td>₦5,500.00</td>
		</tr>
		<tr>
			<td>5</td>
			<td>2023-05-20 | 02:45 PM</td>
			<td>Withdraw</td>
			<td>₦500.00</td>
			<td>₦5,000.00</td>
		</tr>
		<tr>
			<td>6</td>
			<td>2023-06-10 | 08:00 AM</td>
			<td>Withdraw</td>
			<td>₦800.00</td>
			<td>₦4,200.00</td>
		</tr>
		<tr>
			<td>7</td>
			<td>2023-07-15 | 01:30 PM</td>
			<td>Deposit</td>
			<td>₦1,200.00</td>
			<td>₦5,400.00</td>
		</tr>
  <!-- Add more rows as needed -->
</table>
<div id="messageRow" style="display:none;">
    <p>No matching records found.</p>
</div>

 <div class="pagination">
        <button onclick="prevPage()">Previous</button>
        <span id="currentPage">1</span>
        <button onclick="nextPage()">Next</button>
    </div>

<script>
    function searchTable() {
        const input = document.getElementById("searchInput").value.toLowerCase(); // Get the search input and convert to lowercase
        const table = document.getElementById("myTable"); // Get the table element
        const rows = table.querySelectorAll("tr:not(:first-child)"); // Select all rows except the header row
        const messageRow = document.getElementById("messageRow"); // Message row for displaying a message when no match is found

        let found = false;

        rows.forEach(row => {
            const columns = row.querySelectorAll("td");

            columns.forEach(column => {
                if (column.textContent.toLowerCase().includes(input)) {
                    found = true;
                }
            });
        });

        if (found) {
            rows.forEach(row => {
                const columns = row.querySelectorAll("td");
                let rowFound = false;

                columns.forEach(column => {
                    if (column.textContent.toLowerCase().includes(input)) {
                        rowFound = true;
                    }
                });

                if (rowFound) {
                    row.style.display = ""; // Show the row if a match is found
                } else {
                    row.style.display = "none"; // Hide the row if no match is found
                }
            });

            messageRow.style.display = "none"; // Hide the message row if there's a match
        } else {
            rows.forEach(row => {
                row.style.display = "none"; // Hide all rows if no match is found
            });

            messageRow.style.display = ""; // Show the message row
        }
    }
	 // Define variables for pagination
        const rowsPerPage = 5;
        let currentPage = 1;
        const table = document.getElementById("myTable");
        const rows = table.querySelectorAll("tr:not(:first-child)");

        function showRows(start, end) {
            rows.forEach((row, index) => {
                if (index >= start && index < end) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        }

        function updatePagination() {
            const totalPages = Math.ceil(rows.length / rowsPerPage);
            document.getElementById("currentPage").textContent = currentPage;

            if (currentPage === 1) {
                document.querySelector(".pagination button:first-child").disabled = true;
            } else {
                document.querySelector(".pagination button:first-child").disabled = false;
            }

            if (currentPage === totalPages) {
                document.querySelector(".pagination button:last-child").disabled = true;
            } else {
                document.querySelector(".pagination button:last-child").disabled = false;
            }
        }

        function prevPage() {
            if (currentPage > 1) {
                currentPage--;
                const start = (currentPage - 1) * rowsPerPage;
                const end = start + rowsPerPage;
                showRows(start, end);
                updatePagination();
            }
        }

        function nextPage() {
            const totalPages = Math.ceil(rows.length / rowsPerPage);
            if (currentPage < totalPages) {
                currentPage++;
                const start = (currentPage - 1) * rowsPerPage;
                const end = start + rowsPerPage;
                showRows(start, end);
                updatePagination();
            }
        }

        // Initial display
        showRows(0, rowsPerPage);
        updatePagination();
</script>

	<script src="js/dashboard.js"></script>
	<script src="js/copy.js"></script>
</body>
</html>