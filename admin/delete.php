<?php
include 'connect.php';

// Check if teacher id is provided through the URL
if (isset($_GET['tc_id']) && is_numeric($_GET['tc_id'])) {
    // get id value
    $id = $_GET['tc_id'];

    // delete the entry
    $result = mysqli_query($conn, "DELETE FROM teachers WHERE teacher_id=$id");

    // Check if the query executed successfully
    if ($result) {
        echo "Teacher record deleted successfully.";
    } else {
        echo "Error deleting teacher record: " . mysqli_error($conn);
    }

    // close the database connection
    mysqli_close($conn);

    // redirect to the teachers page
    header("Location: teachers.php");
} else {
    // if teacher id is not provided, redirect to the teachers page
    header("Location: teachers.php");
}
?>
