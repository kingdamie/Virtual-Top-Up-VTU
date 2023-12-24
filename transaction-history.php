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
			
			
			<!-- Search input -->
            <div class="search-container">
                <label for="search">Search:</label>
                <input type="text" id="search" oninput="searchTable()" placeholder="Type to search...">
            </div>

			<table id="transactionTable">
				<thead>
					<tr >
						<th>S/N</th>
						<th>Date | Time</th>
						<th>Description</th>
						<th>Amount</th>
						<th>Balance</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>2023-02-15 | 09:45 AM</td>
						<td>Deposit</td>
						<td>₦1,000.00</td>
						<td>₦5,500.00</td>
					</tr>

					<tr>
						<td>2</td>
						<td>2023-02-16 | 03:15 PM</td>
						<td>Withdrawal</td>
						<td>-₦800.00</td>
						<td>₦4,700.00</td>
					</tr>

					<tr>
						<td>3</td>
						<td>2023-02-17 | 11:00 AM</td>
						<td>Airtime</td>
						<td>₦1,200.00</td>
						<td>₦5,900.00</td>
					</tr>

					<tr>
						<td>4</td>
						<td>2023-02-18 | 01:45 PM</td>
						<td>Airtime</td>
						<td>-₦600.00</td>
						<td>₦5,300.00</td>
					</tr>

					<tr>
						<td>5</td>
						<td>2023-02-19 | 10:30 AM</td>
						<td>Deposit</td>
						<td>₦900.00</td>
						<td>₦6,200.00</td>
					</tr>

					<tr>
						<td>6</td>
						<td>2023-02-20 | 04:00 PM</td>
						<td>Withdrawal</td>
						<td>-₦700.00</td>
						<td>₦5,500.00</td>
					</tr>

					<tr>
						<td>7</td>
						<td>2023-02-21 | 08:15 AM</td>
						<td>Data</td>
						<td>₦1,500.00</td>
						<td>₦7,000.00</td>
					</tr>

					<!-- Add more rows as needed -->
				</tbody>
			</table>

			 <div class="pagination">
        <button onclick="previousPage()">Previous</button>
        <button onclick="nextPage()">Next</button>
    </div>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

<script>
    const rowsPerPage = 5;
    let currentPage = 1;

    function renderTable() {
        const tableRows = document.querySelectorAll('#transactionTable tbody tr');

        for (let i = 0; i < tableRows.length; i++) {
            tableRows[i].style.display = 'none';
        }

        const startIndex = (currentPage - 1) * rowsPerPage;
        const endIndex = Math.min(startIndex + rowsPerPage, tableRows.length);

        for (let i = startIndex; i < endIndex; i++) {
            tableRows[i].style.display = '';
        }
    }

    function nextPage() {
        const tableRows = document.querySelectorAll('#transactionTable tbody tr');

        if (currentPage < Math.ceil(tableRows.length / rowsPerPage)) {
            currentPage++;
            renderTable();
        }
    }

    function previousPage() {
        if (currentPage > 1) {
            currentPage--;
            renderTable();
        }
    }

    function searchTable() {
        const input = document.getElementById('search').value.toUpperCase();
        const tableRows = document.querySelectorAll('#transactionTable tbody tr');

        for (let i = 0; i < tableRows.length; i++) {
            const cells = tableRows[i].getElementsByTagName('td');
            let found = false;

            for (let j = 0; j < cells.length; j++) {
                const cellText = cells[j].textContent || cells[j].innerText;

                if (cellText.toUpperCase().includes(input)) {
                    found = true;
                    break;
                }
            }

            tableRows[i].style.display = found ? '' : 'none';
        }

        currentPage = 1;
        renderTable();
    }

    // Initial rendering
    renderTable();
</script>

	<script src="js/dashboard.js"></script>
	<script src="js/copy.js"></script>
</body>
</html>