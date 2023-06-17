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

// Retrieve data from the table
$sql = "SELECT * FROM report_form";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Report Form Data</title>
	<style>
		table {
		  border-collapse: collapse;
		  width: 100%;
		}

		th, td {
		  text-align: left;
		  padding: 8px;
		  border-bottom: 1px solid #ddd;
		}

		tr:hover {background-color:#f5f5f5;}
	</style>
</head>
<body>

<h2>Report Form Data</h2>

<table>
	<thead>
		<tr>
			<th>Mentor Name</th>
			<th>Mentoring Period</th>
			<th>Mentee Name</th>
			<th>Programme</th>
			<th>Class</th>
			<th>Registration Number</th>
			<th>Sno</th>
			<th>Date</th>
			<th>Time</th>
			<th>Discussion</th>
			<th>Action Suggestion</th>
		</tr>
	</thead>
	<tbody>
		<?php
		if ($result->num_rows > 0) {
		  while($row = $result->fetch_assoc()) {
		    echo "<tr>";
		    echo "<td>" . $row["name"] . "</td>";
		    echo "<td>" . $row["period_of_mentoring"] . "</td>";
		    echo "<td>" . $row["mentee_name"] . "</td>";
		    echo "<td>" . $row["programme"] . "</td>";
		    echo "<td>" . $row["class"] . "</td>";
		    echo "<td>" . $row["reg_no"] . "</td>";
		    echo "<td>" . $row["sno"] . "</td>";
		    echo "<td>" . $row["sdate"] . "</td>";
		    echo "<td>" . $row["stime"] . "</td>";
		    echo "<td>" . $row["discussion"] . "</td>";
		    echo "<td>" . $row["action_suggestion"] . "</td>";
		    echo "</tr>";
		  }
		} else {
		  echo "0 results";
		}
		?>
	</tbody>
</table>

</body>
</html>

<?php
// Close connection
$conn->close();
?>
<div class="navigation-buttons">
  <a href="index.php" class="back-button">Back</a>
</div>
</body>
</html>
