<?php
ob_start();
session_start();

if($_SESSION['user_name']!='oasis')
{
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mentoring Table</title>
	<style>
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		  padding: 5px;
		}
	</style>
</head>
<body>

	<h1>Attendence Table</h1>

	<table>
		<thead>
		
		</thead>
		<tbody>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve attendance data from the database
$sql = "SELECT * FROM attendance";
$result = $conn->query($sql);

if (!$result) {
    // Check for any SQL errors
    echo "Error: " . $conn->error;
} elseif ($result->num_rows > 0) {
    // Process the results
    echo "<table><tr><th>Semester</th><th>Subject Name</th><th>Percentage</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["semester"] . "</td><td>" . $row["subject_name"] . "</td><td>" . $row["percentage"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>
<div class="navigation-buttons">
  <a href="index.php" class="back-button">Back</a>
</div>
		</tbody>
	</table>

</body>
</html>
