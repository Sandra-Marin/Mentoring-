<?php

// Connect to the database
$servername = "root";
$username = "localhost";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Array of teacher names
$mentee = array("Vandana Reddy", "Gokulapriya", "Arul V", "Jayapandian");

// Loop through the array and insert each name into the database
foreach ($mentee as $user_name) {
    $sql = "INSERT INTO teachers (name) VALUES ('$user_name')";

    if ($conn->query($sql) === TRUE) {
        echo "Teacher '$user_name' added successfully.<br>";
    } else {
        echo "Error adding teacher '$user_name': " . $conn->error . "<br>";
    }
}

// Array of student names
$mentee = array("2060433", "2060446", "2060447");

// Loop through the array and insert each name into the database
foreach ($mentee as $user_name) {
    $sql = "INSERT INTO users (name) VALUES ('$user_name')";

    if ($conn->query($sql) === TRUE) {
        echo "Student '$user_name' added successfully.<br>";
    } else {
        echo "Error adding student '$user_name': " . $conn->error . "<br>";
    }
}

// Close the database connection
$conn->close();

?>