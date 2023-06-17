<?php

ob_start();
session_start();

if($_SESSION['user_name']!='oasis')
{
  header('location: login.php');
}
?>
<?php include('connect.php');?>
<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the data from the database
$sql = "SELECT * FROM analysis";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Class Participation 1: " . $row["class_participation_1"] . "<br>";
        echo "Class Participation 2: " . $row["class_participation_2"] . "<br>";
        echo "Class Participation 3: " . $row["class_participation_3"] . "<br>";
        echo "Attendance 1: " . $row["Attendance_1"] . "<br>";
        echo "Attendance 2: " . $row["Attendance_2"] . "<br>";
        echo "Attendance 3: " . $row["Attendance_3"] . "<br>";
        echo "Results 1: " . $row["Results_1"] . "<br>";
        echo "Results 2: " . $row["Results_2"] . "<br>";
        echo "Results 3: " . $row["Results_3"] . "<br>";
        echo "Co-curricular 1: " . $row["Co_curricular_1"] . "<br>";
        echo "Co-curricular 2: " . $row["Co_curricular_2"] . "<br>";
        echo "Co-curricular 3: " . $row["Co_curricular_3"] . "<br>";
        echo "Extra-curricular 1: " . $row["Extra_curricular_1"] . "<br>";
        echo "Extra-curricular 2: " . $row["Extra_curricular_2"] . "<br>";
        echo "Extra-curricular 3: " . $row["Extra_curricular_3"] . "<br>";
        echo "Innovation 1: " . $row["Innovation_1"] . "<br>";
        echo "Innovation 2: " . $row["Innovation_2"] . "<br>";
        echo "Innovation 3: " . $row["Innovation_3"] . "<br>";
        echo "Personality 1: " . $row["Personality_1"] . "<br>";
        echo "Personality 2: " . $row["Personality_2"] . "<br>";
        echo "Personality 3: " . $row["Personality_3"] . "<br>";
        echo "Overall 1: " . $row["Overall_1"] . "<br>";
        echo "Overall 2: " . $row["Overall_2"] . "<br>";
        echo "Overall 3: " . $row["Overall_3"] . "<br>";
    }
} else {
    echo "No data found.";
}

$conn->close();
?>
