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
	<title>Menter-Mentee Details</title>
	<style>
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		  padding: 5px;
		}
	</style>
</head>
<body>

	<h1>Menter-Mentee Details</h1>

	<table>
		<thead>
			<tr>
				<th>Sl.No</th>
				<th>student id</th>
				<th>teacher id</th>
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
			$sql = "SELECT * FROM student_mentor_map";
			    $result = $conn->query($sql);

			    if ($result->num_rows > 0) {
			        while($row = $result->fetch_assoc()) {
			            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["st_id"]. "</td><td>" . $row["tc_id"]. "</td><td>";
                    }
			    } else {
			        echo "<tr><td colspan='7'>0 results</td></tr>";
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
