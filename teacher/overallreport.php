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

	<h1>Mentoring Table</h1>

	<table>
		<thead>
			<tr>
				<th>Reg No.</th>
				<th>Name</th>
				<th>remedial_class</th>
				<th>certificate</th>
				<th>publications</th>
				<th>sports_ncc</th>
				
				
			</tr>
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
			$sql = "SELECT * FROM student_report";
			    $result = $conn->query($sql);

			    if ($result->num_rows > 0) {
			        while($row = $result->fetch_assoc()) {
			            echo "<tr><td>" . $row["reg_no"]. "</td><td>" . $row["name"]. "</td><td>" . $row["remedial_class"]. "</td><td>" . $row["certificate"]. "</td><td>" . $row["publications"]."</td><td>" . $row["sports_ncc"]. "</td><td>";

			        }
			    } else {
			        echo "<tr><td colspan='6'>0 results</td></tr>";
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
