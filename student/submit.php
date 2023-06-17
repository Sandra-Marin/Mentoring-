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
?>



<?php
// session_start();

// // Retrieve the form data from the $_POST array
// $semester = $_POST['semester'];
// $subject1 = $_POST['subject1'];
// $percentage1 = $_POST['percentage1'];
// $subject2 = $_POST['subject2'];
// $percentage2 = $_POST['percentage2'];
// $subject3 = $_POST['subject3'];
// $percentage3 = $_POST['percentage3'];
// $subject4 = $_POST['subject4'];
// $percentage4 = $_POST['percentage4'];
// $subject5 = $_POST['subject5'];
// $percentage5 = $_POST['percentage5'];
// $subject6 = $_POST['subject6'];
// $percentage6 = $_POST['percentage6'];

// // Store the form data in the PHP session
// $_SESSION['semester'] = $semester;
// $_SESSION['subject1'] = $subject1;
// $_SESSION['percentage1'] = $percentage1;
// $_SESSION['subject2'] = $subject2;
// $_SESSION['percentage2'] = $percentage2;
// $_SESSION['subject3'] = $subject3;
// $_SESSION['percentage3'] = $percentage3;
// $_SESSION['subject4'] = $subject4;
// $_SESSION['percentage4'] = $percentage4;
// $_SESSION['subject5'] = $subject5;
// $_SESSION['percentage5'] = $percentage5;
// $_SESSION['subject6'] = $subject6;
// $_SESSION['percentage6'] = $percentage6;

$semester = $_POST['semester'];
$subject1 = $_POST['subject1'];
$subject2 = $_POST['subject2'];
$subject3 = $_POST['subject3'];
$subject4 = $_POST['subject4'];
$subject5 = $_POST['subject5'];
$subject6 = $_POST['subject6'];
$percentage1 = $_POST['percentage1'];
$percentage2 = $_POST['percentage2'];
$percentage3 = $_POST['percentage3'];
$percentage4 = $_POST['percentage4'];
$percentage5 = $_POST['percentage5'];
$percentage6 = $_POST['percentage6'];


$sql = "INSERT INTO attendance (semester, subject1, percentage1, subject2, percentage2, subject3, percentage3, subject4, percentage4, subject5, percentage5, subject6, percentage6)
VALUES ('$semester', '$subject1', '$percentage1', '$subject2', '$percentage2', '$subject3', '$percentage3', '$subject4', '$percentage4', '$subject5', '$percentage5', '$subject6', '$percentage6')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
