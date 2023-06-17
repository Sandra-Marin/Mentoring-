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

// Process the form data
if (isset($_POST['submit'])) {
    $class_participation_1 = $_POST['class_participation'][0];
    $class_participation_2 = $_POST['class_participation'][1];
    $class_participation_3 = $_POST['class_participation'][2];
    
    $Attendance_1 = $_POST['Attendance'][0];
    $Attendance_2 = $_POST['Attendance'][1];
    $Attendance_3 = $_POST['Attendance'][2];
    
    $Results_1 = $_POST['Results'][0];
    $Results_2 = $_POST['Results'][1];
    $Results_3 = $_POST['Results'][2];
    
    $Co_curricular_1 = $_POST['Co_curricular'][0];
    $Co_curricular_2 = $_POST['Co_curricular'][1];
    $Co_curricular_3 = $_POST['Co_curricular'][2];
    
    $Extra_curricular_1 = $_POST['Extra_curricular'][0];
    $Extra_curricular_2 = $_POST['Extra_curricular'][1];
    $Extra_curricular_3 = $_POST['Extra_curricular'][2];
    
    $Innovation_1 = $_POST['Innovation'][0];
    $Innovation_2 = $_POST['Innovation'][1];
    $Innovation_3 = $_POST['Innovation'][2];
    
    $Personality_1 = $_POST['Personality'][0];
    $Personality_2 = $_POST['Personality'][1];
    $Personality_3 = $_POST['Personality'][2];
    
    $Overall_1 = $_POST['Overall'][0];
    $Overall_2 = $_POST['Overall'][1];
    $Overall_3 = $_POST['Overall'][2];
    
    // Insert the data into the database
    $sql = "INSERT INTO analysis (class_participation_1, class_participation_2, class_participation_3, Attendance_1, Attendance_2, Attendance_3, Results_1, Results_2, Results_3, Co_curricular_1, Co_curricular_2, Co_curricular_3, Extra_curricular_1, Extra_curricular_2, Extra_curricular_3, Innovation_1, Innovation_2, Innovation_3, Personality_1, Personality_2, Personality_3, Overall_1, Overall_2, Overall_3) VALUES ('$class_participation_1', '$class_participation_2', '$class_participation_3', '$Attendance_1', '$Attendance_2', '$Attendance_3', '$Results_1', '$Results_2', '$Results_3', '$Co_curricular_1', '$Co_curricular_2', '$Co_curricular_3', '$Extra_curricular_1', '$Extra_curricular_2', '$Extra_curricular_3', '$Innovation_1', '$Innovation_2', '$Innovation_3', '$Personality_1', '$Personality_2', '$Personality_3', '$Overall_1', '$Overall_2', '$Overall_3')";
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}
?>    
