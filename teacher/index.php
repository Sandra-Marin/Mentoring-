<?php

ob_start();
session_start();

if($_SESSION['user_name']!='oasis')
{
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Mentoring Management System</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body>

<header>

  <h1>Online Mentoring Management System</h1>
  <div class="navbar">
  
  <a href="students.php">Students</a>
  <a href="attendance.php">Attendance</a>
  <a href="calender.php">Mentoring Calender</a>
  <a href="overallreport.php">Details</a>
  <a href="questionnaire.php">Questionnaire</a>
  <a href="report.php">Report</a>
  <a href="marks.php">Marks</a>
  <a href="rating.php">Rating</a>
  <a href="reportform.php">Report Form</a>
  <a href="teachers.php">Teacher</a>
  <a href="fetch.php">Maping</a>
  <a href="../logout.php">Logout</a>
  

</div>

</header>

<center>

<div class="row">
    

</div>

</center>

</body>
</html>
