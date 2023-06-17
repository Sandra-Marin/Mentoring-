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

// Get all students and mentors
$students_query = mysqli_query($conn, "SELECT * FROM students");
$mentors_query = mysqli_query($conn, "SELECT * FROM teachers");

// Map students to mentors
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student'];
    $mentor_id = $_POST['mentor'];

    // Check if student and mentor are selected
    if (!empty($student_id) && !empty($mentor_id)) {
        // Check if student and mentor exist in database
        $student_result = mysqli_query($conn, "SELECT * FROM students WHERE st_id=$student_id");
        $mentor_result = mysqli_query($conn, "SELECT * FROM teachers WHERE tc_id=$mentor_id");

        if (mysqli_num_rows($student_result) == 1 && mysqli_num_rows($mentor_result) == 1) {
            $map_query = mysqli_query($conn, "INSERT INTO student_mentor_map (st_id, tc_id) VALUES ('$student_id', '$mentor_id')");
            

            if ($map_query) {
                echo "Student and mentor mapped successfully";
            } else {
                echo "Error mapping student and mentor: " . mysqli_error($conn);
            }
        } else {
            echo "Invalid student or mentor";
        }
    } else {
        echo "Please select a student and mentor";
    }
}

// Get student-mentor mappings
$mapping_query = mysqli_query($conn, "SELECT student_mentor_map.id, students.name as student_name, teachers.name as mentor_name FROM student_mentor_map JOIN students ON student_mentor_map.st_id=students.st_id JOIN teachers ON student_mentor_map.mentor_id=teachers.tc_id");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Student-Mentor Mapping</title>
</head>
<body>
	<h1>Student-Mentor Mapping</h1>
	<form method="POST">
		<label for="student">Select a Student:</label>
		<select id="student" name="student">
			<option value="">Select a student</option>
			<?php
                // Connect to the database
                $conn = new mysqli("localhost", "root", "", "project");

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch the list of students
                $students = mysqli_query($conn, "SELECT * FROM students");

                // Display each student as an option in the dropdown
                while ($row = mysqli_fetch_assoc($students)) {
                    echo "<option value='" . $row['st_id'] . "'>" . $row['st_name'] . "</option>";
                }

                // Close the database connection
                mysqli_close($conn);
            ?>
		</select>
		<br>
		<label for="mentor">Select a Mentor:</label>
		<select id="mentor" name="mentor">
			<option value="">Select a mentor</option>
			<?php
                // Connect to the database
                $conn = new mysqli("localhost", "root", "", "project");

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch the list of mentors
                $mentors = mysqli_query($conn, "SELECT * FROM teachers");

                // Display each mentor as an option in the dropdown
                while ($row = mysqli_fetch_assoc($mentors)) {
                    echo "<option value='" . $row['tc_id'] . "'>" . $row['tc_name'] . "</option>";
                }

                // Close the database connection
                mysqli_close($conn);
            ?>
		</select>
		<br>
		<input type="submit" name="submit" value="Map">
	</form>
	<hr>
    <div class="navigation-buttons">
  <a href="index.php" class="back-button">Back</a>
</div>
    

	
</body>
</html>
