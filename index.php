<?php

if(isset($_POST['login']))
{
    //start of try block

    try{

        //checking empty fields
        if(empty($_POST['user_name'])){
            throw new Exception("UserID is required!");

        }
        if(empty($_POST['password'])){
            throw new Exception("Password is required!");

        }
        //establishing connection with db and things
        include ('connect.php');

        //checking login info into database
        // prepare the query
        // prepare the query
$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE user_name=? AND password=? AND user_type=?");

// bind the values to the placeholders
mysqli_stmt_bind_param($stmt, "sss", $_POST['user_name'], $_POST['password'], $_POST['user_type']);

// execute the query
mysqli_stmt_execute($stmt);

// get the result
$result = mysqli_stmt_get_result($stmt);

// check if there is at least one row in the result set
if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    
    // check the user type and redirect accordingly
    if($_POST["user_type"] == 'mentor'){
        session_start();
        $_SESSION['user_name']="oasis";
        header('location: teacher/index.php');
    }
    else if($_POST["user_type"] == 'mentee'){
        session_start();
        $_SESSION['user_name']="oasis";
        header('location: student/nav.php'); 
    }
    else if($_POST["user_type"] == 'admin'){
        session_start();
        $_SESSION['user_name']="oasis";
        header('location: admin/index.php');
    }
}
else {
    header('location: student/result.php');
    return;
}

    }

    //end of try block
    catch(Exception $e){
        $error_msg=$e->getMessage();
    }
    //end of try-catch
}

?>

<!DOCTYPE html>
<html>
<head>

	<title>Online Mentoring Management System</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	 
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
	 
	<link rel="stylesheet" href="styles.css" >
	 
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
	<center>

<header>
  <img src = "img\christ.jpg" style = "width : 500px; length: 500px">
  <h1>Online Mentoring Management System</h1>

</header>

<h1>Login</h1>

<?php
//printing error message
if(isset($error_msg))
{
	echo $error_msg;
}
?>


<div class="content">
	<div class="row">

		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
			<div class="form-group">
			    <label for="input1" class="col-sm-3 control-label">User-ID</label>
			    <div class="col-sm-7">
			      <input type="text" name="user_name"  class="form-control" id="input1" placeholder="your user-id" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-3 control-label">Password</label>
			    <div class="col-sm-7">
			      <input type="password" name="password"  class="form-control" id="input1" placeholder="your password" />
			    </div>
			</div>


			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-3 control-label">Role</label>
			<div class="col-sm-7">
			  <label>
			    <input type="radio" name="user_type" id="optionsRadios1" value="mentee" checked> Mentee
			  </label>
			  	  <label>
			    <input type="radio" name="user_type" id="optionsRadios1" value="mentor"> Mentor
			  </label>
			  <label>
			    <input type="radio" name="user_type" id="optionsRadios1" value="admin"> Admin
			  </label>
			</div>
			</div>


			<input type="submit" class="btn btn-primary col-md-3 col-md-offset-7" value="Login" name="login" />
		</form>
	</div>
</div>



<br><br>
<p><strong>Have forgot your password? <a href="reset.php">Reset here.</a></strong></p>
<!-- <p><strong>If you don't have any account, <a href="signup.php">Signup</a> here</strong></p> -->

</center>
</body>
</html>