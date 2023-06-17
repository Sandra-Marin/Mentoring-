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

// Loop through each semester
for ($i = 1; $i <= 8; $i++) {
  // Loop through each subject in the semester
  for ($j = 1; $j <= 6; $j++) {
    $semester = "semester" . $i;
    $subject = "s" . $i . "_subject" . $j;
    $percentage = $_POST[$subject];
    
    // Insert attendance data into the database
    $sql = "INSERT INTO attendance (semester, subject_name, percentage) VALUES ('$semester', 'Subject $j', '$percentage')";
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}
$conn->close();

header("Location: attendence.php");
exit;
?>
