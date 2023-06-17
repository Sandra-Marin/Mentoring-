<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form data
$name = $_POST['name'];
$reg_no = $_POST['reg_no'];
$class_section = $_POST['class_section'];
$class_participation = $_POST['class_participation'];
$attendance = $_POST['Attendance'];
$results = $_POST['Results'];
$co_curricular = $_POST['Co_curricular'];
$extra_curricular = $_POST['Extra_curricular'];
$innovation = $_POST['innovation'];
$personality = $_POST['personality'];
$overall = $_POST['overall'];

$sql = "INSERT INTO ratings (name, reg_no, class_section, class_participation, attendance, results, co_curricular, extra_curricular,innovation,personality,overall)
        VALUES ('$name', '$reg_no', '$class_section', $class_participation, $attendance, $results, $co_curricular, $extra_curricular,$innovation,$personality,$overall)";

if (mysqli_query($conn, $sql)) {
    echo "Record created successfully";
} else {
    echo "Error creating record: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
header("Location: rating.php");
exit;
?>
