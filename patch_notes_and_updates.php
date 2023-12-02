<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Poppy Playtime by JNFB | Patch Notes and Updates</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    table {
      border-collapse: collapse;
      margin-left: 20px;
      margin-right: 20px;
    }
    th, td {
      border: 1px solid;
      padding: 8px;
    }
    th:nth-child(1),
    td:nth-child(1) {
      width: 7%;
    }
    th:nth-child(2),
    td:nth-child(2) {
      width: 15%;
    }
    th:nth-child(3),
    td:nth-child(3) {
      width: 10%;
    }
    th:nth-child(4),
    td:nth-child(4) {
      width: 10%;
    }
    th:nth-child(5),
    td:nth-child(5) {
      width: 65%;
    }
    th:nth-child(6),
    td:nth-child(6) {
      width: 20%;
    }
</style>
<body>
    <h2 align="center">
        <font face="Courier New" color="#3c7de6">
			    <b>PATCH NOTES AND UPDATES</b>
		    </font>
    </h2>
    <table>
    <tr>
        <th>Version ID</th>
        <th>Version</th>
        <th>Date and Time</th>
        <th>Category</th>
        <th>Updates</th>
        <th>Status</th>
    </tr>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "poppyplaytime_db";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM patch_notes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['version_id'] . "</td>";
                echo "<td>" . $row['version'] . "</td>";
                echo "<td>" . $row['date_time'] . "</td>";
                echo "<td>" . $row['category'] . "</td>";
                echo "<td>" . $row['update_description'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "</tr>";
            }
        } 
        else {
            echo "<tr><td colspan='6'>No patch notes.</td></tr>";
        }
      
        $conn->close();
    ?>
    </table>
    <br><br><br><br>
</body>
<?php include('includes/footer.php'); ?>