<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Establish database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS student_report (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    reg_no VARCHAR(30) NOT NULL,
    name VARCHAR(30) NOT NULL,
    remedial_class VARCHAR(30) NOT NULL,
    certificate VARCHAR(30) NOT NULL,
    publications VARCHAR(30) NOT NULL,
    sports_ncc VARCHAR(30) NOT NULL
)";
$sql = "INSERT INTO student_report (reg_no, name, remedial_class, certificate, publications, sports_ncc) 
VALUES 
    ('$_POST[reg_no_1]', '$_POST[name_1]', '$_POST[remedial_class_1]', '$_POST[certificate_1]', '$_POST[publications_1]', '$_POST[sports_ncc_1]'),
    ('$_POST[reg_no_2]', '$_POST[name_2]', '$_POST[remedial_class_2]', '$_POST[certificate_2]', '$_POST[publications_2]', '$_POST[sports_ncc_2]'),
    ('$_POST[reg_no_3]', '$_POST[name_3]', '$_POST[remedial_class_3]', '$_POST[certificate_3]', '$_POST[publications_3]', '$_POST[sports_ncc_3]'),
    ('$_POST[reg_no_4]', '$_POST[name_4]', '$_POST[remedial_class_4]', '$_POST[certificate_4]', '$_POST[publications_4]', '$_POST[sports_ncc_4]'),
    ('$_POST[reg_no_5]', '$_POST[name_5]', '$_POST[remedial_class_5]', '$_POST[certificate_5]', '$_POST[publications_5]', '$_POST[sports_ncc_5]'),
    ('$_POST[reg_no_6]', '$_POST[name_6]', '$_POST[remedial_class_6]', '$_POST[certificate_6]', '$_POST[publications_6]', '$_POST[sports_ncc_6]'),
    ('$_POST[reg_no_6]', '$_POST[name_7]', '$_POST[remedial_class_7]', '$_POST[certificate_7]', '$_POST[publications_7]', '$_POST[sports_ncc_7]'),
    ('$_POST[reg_no_6]', '$_POST[name_8]', '$_POST[remedial_class_8]', '$_POST[certificate_8]', '$_POST[publications_8]', '$_POST[sports_ncc_8]'),
    ('$_POST[reg_no_6]', '$_POST[name_9]', '$_POST[remedial_class_9]', '$_POST[certificate_9]', '$_POST[publications_9]', '$_POST[sports_ncc_9]'),
    ('$_POST[reg_no_6]', '$_POST[name_10]', '$_POST[remedial_class_10]', '$_POST[certificate_10]', '$_POST[publications_10]', '$_POST[sports_ncc_10]')";


if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error;
}

// Close database connection
$conn->close();

header("Location: overall report.php");
exit;
?>
