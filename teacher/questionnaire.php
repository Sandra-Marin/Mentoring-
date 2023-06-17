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
	<title>QUESTIONNAIRE</title>
	<style>
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		  padding: 5px;
		}
	</style>
</head>
<body>

	<h1>QUESTIONNAIRE</h1>

	<table>
		<thead>
			<tr>
			    <th>ID</th>
				<th>First name</th>
				<th>Last name</th>
				<th>Reg No.</th>
				<th>Email</th>
				<th>Class Progression</th>
				<th>Peer Collaboration</th>
				<th>Subjet 1</th>
				<th>Subject 2</th>
				<th>Subject 3</th>
				<th>Subject 4</th>
				<th>Subject 5</th>
				<th>Subject 6</th>
				
				
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
			$sql = "SELECT * FROM questionnaire";
			    $result = $conn->query($sql);

			    if ($result->num_rows > 0) {
			        while($row = $result->fetch_assoc()) {
			            echo "<tr><td>" . $row["id"]. "</td><td>". $row["first_name"]. "</td><td>" . $row["last_name"]. "</td><td>" . $row["register_number"]. "</td><td>" . $row["email"]. "</td><td>" . $row["class_progression"]."</td><td>" . $row["peer_collaboration"]. "</td><td>" . $row["subject_1"]. "</td><td>" . $row["subject_2"]. "</td><td>" . $row["subject_3"]. "</td><td>" . $row["subject_4"]. "</td><td>" . $row["subject_5"]. "</td><td>" . $row["subject_6"]. "</td><td>";
						 
			        }
			    } else {
			        echo "<tr><td colspan='10'>0 results</td></tr>";
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
