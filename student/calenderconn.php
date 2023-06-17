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
$sql = "CREATE TABLE IF NOT EXISTS calender (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    reg_no VARCHAR(30) NOT NULL,
    name VARCHAR(30) NOT NULL,
    Date1 VARCHAR(30) NOT NULL,
    Date2 VARCHAR(30) NOT NULL,
    Date4 VARCHAR(30) NOT NULL,
    Date5 VARCHAR(30) NOT NULL,
    Date6 VARCHAR(30) NOT NULL
)";
$sql = "INSERT INTO calender (reg_no, name, Date1, Date2, Date4, Date5, Date6) 
VALUES 
    ('$_POST[reg_no_1]', '$_POST[name_1]', '$_POST[Date1_1]', '$_POST[Date2_1]', '$_POST[Date4_1]', '$_POST[Date5_1]', '$_POST[Date6_1]'),
    ('$_POST[reg_no_2]', '$_POST[name_2]', '$_POST[Date1_2]', '$_POST[Date2_2]', '$_POST[Date4_2]', '$_POST[Date5_2]', '$_POST[Date6_2]'),
    ('$_POST[reg_no_3]', '$_POST[name_3]', '$_POST[Date1_3]', '$_POST[Date2_3]', '$_POST[Date4_3]', '$_POST[Date5_3]', '$_POST[Date6_3]'),
    ('$_POST[reg_no_4]', '$_POST[name_4]', '$_POST[Date1_4]', '$_POST[Date2_4]', '$_POST[Date4_4]', '$_POST[Date5_4]', '$_POST[Date6_4]'),
    ('$_POST[reg_no_5]', '$_POST[name_5]', '$_POST[Date1_5]', '$_POST[Date2_5]', '$_POST[Date4_5]', '$_POST[Date5_5]','$_POST[Date6_5]'),
    ('$_POST[reg_no_6]', '$_POST[name_6]', '$_POST[Date1_6]', '$_POST[Date2_6]', '$_POST[Date4_6]', '$_POST[Date5_6]','$_POST[Date6_6]'),
    ('$_POST[reg_no_6]', '$_POST[name_7]', '$_POST[Date1_7]', '$_POST[Date2_7]', '$_POST[Date4_7]', '$_POST[Date5_7]','$_POST[Date6_7]'),
    ('$_POST[reg_no_6]', '$_POST[name_8]', '$_POST[Date1_8]', '$_POST[Date2_8]', '$_POST[Date4_8]', '$_POST[Date5_8]','$_POST[Date6_8]'),
    ('$_POST[reg_no_6]', '$_POST[name_9]', '$_POST[Date1_9]', '$_POST[Date2_9]', '$_POST[Date4_9]', '$_POST[Date5_9]', '$_POST[Date6_9]'),
    ('$_POST[reg_no_6]', '$_POST[name_10]', '$_POST[Date1_10]', '$_POST[Date2_10]', '$_POST[Date4_10]', '$_POST[Date5_10]', '$_POST[Date6_10]')";


if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error;
}

// Close database connection
$conn->close();

header("Location: calender.php");
exit;
?>
