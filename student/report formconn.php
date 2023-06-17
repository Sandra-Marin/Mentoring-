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

// Get form data
$sno = "";
$sdate = "";
$stime = "";
$discussion = "";
$action_suggestion = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $period_of_mentoring = isset($_POST['period_of_mentoring']) ? $_POST['period_of_mentoring'] : "";
    $mentee_name = isset($_POST['mentee_name']) ? $_POST['mentee_name'] : "";
    $programme = isset($_POST['programme']) ? $_POST['programme'] : "";
    $class = isset($_POST['class']) ? $_POST['class'] : "";
    $reg_no = isset($_POST['reg_no']) ? $_POST['reg_no'] : "";
    $sno = isset($_POST['sno']) ? $_POST['sno'] : "";
    $sdate = isset($_POST['sdate']) ? $_POST['sdate'] : "";
    $stime = isset($_POST['stime']) ? $_POST['stime'] : "";
    $discussion = isset($_POST['discussion']) ? mysqli_real_escape_string($conn, $_POST['discussion']) : "";
    $action_suggestion = isset($_POST['action_suggestion']) ? mysqli_real_escape_string($conn, $_POST['action_suggestion']) : "";

    // Debugging code
    echo "Name: " . $name . "<br>";
    echo "Period of Mentoring: " . $period_of_mentoring . "<br>";
    echo "Reg No: " . $reg_no . "<br>";

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO report_form (name, period_of_mentoring, mentee_name, programme, class, reg_no, sno, sdate, stime, discussion, action_suggestion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        die("Error: " . $conn->error);
    }

    $stmt->bind_param("sssssssssss", $name, $period_of_mentoring, $mentee_name, $programme, $class, $reg_no, $sno, $sdate, $stime, $discussion, $action_suggestion);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

    header("Location: Report form.php");
    exit;
}
?>
