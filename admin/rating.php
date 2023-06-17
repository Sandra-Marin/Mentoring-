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
$sql = "SELECT * FROM ratings";
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
			<th>Name</th>
			<th>Reg no</th>
			<th>Class Section</th>
			<th>Class Participation</th>
			<th>Attendance</th>
			<th>Results</th>
			<th>Co_curricular</th>
			<th>Extra_curricular</th>
            <th>Innovation</th>
			<th>Personality</th>
			<th>Overall</th>
		</tr>
        
	</thead>
	<tbody>
		<?php
		if ($result->num_rows > 0) {
		  while($row = $result->fetch_assoc()) {
		    echo "<tr>";
		    echo "<td>" . $row["name"] . "</td>";
		    echo "<td>" . $row["reg_no"] . "</td>";
		    echo "<td>" . $row["class_section"] . "</td>";
		    echo "<td>" . $row["class_participation"] . "</td>";
		    echo "<td>" . $row["attendance"] . "</td>";
		    echo "<td>" . $row["results"] . "</td>";
		    echo "<td>" . $row["co_curricular"] . "</td>";
		    echo "<td>" . $row["extra_curricular"] . "</td>";
            echo "<td>" . $row["innovation"] . "</td>";
		    echo "<td>" . $row["personality"] . "</td>";
		    echo "<td>" . $row["overall"] . "</td>";
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
