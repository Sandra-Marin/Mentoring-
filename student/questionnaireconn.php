<?php
// Database connection information
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

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO questionnaire (first_name, last_name, register_number, email, class_progression, peer_collaboration, subject_1, subject_2, subject_3,  subject_4, subject_5, subject_6) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Bind parameters
$stmt->bind_param("ssisiiiiiiii", $first_name, $last_name, $register_number, $email, $class_progression, $peer_collaboration, $subject_1, $subject_2,$subject_3,$subject_4,$subject_5,$subject_6);

// Set parameters
$first_name = $_POST["fname"];
$last_name = $_POST["lname"];
$register_number = $_POST["regno"];
$email = $_POST["email"];
$class_progression = $_POST["class_progression"];
$peer_collaboration = $_POST["Peer_collaboration"];
$subject_1 = $_POST["Subject_1"];
$subject_2 = $_POST["Subject_2"];
$subject_3 = $_POST["Subject_3"];
$subject_4 = $_POST["Subject_4"];

$subject_5 = isset($_POST["Subject_5"]) ? $_POST["Subject_5"] : null;
$subject_6 = $_POST["Subject_6"];


// Execute the statement
if ($stmt->execute()) {
  echo "Record inserted successfully";
} else {
  echo "Error inserting record: " . $conn->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
header("Location: questionnaire.php");
exit;
?>
