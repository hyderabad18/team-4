<?php
require_once ("../bridge/connection.php");
$conn = main_db_connect();


// If form submitted, insert values into the database.
if (isset($_POST['name'])){
        // removes backslashes
	$name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
	$name = mysqli_real_escape_string($con,$name);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$hashed= hash('sha512',$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `volunteer_reg` WHERE username='$name'
and password='$hashed'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
			echo 'login sucessfull!!';
	   // $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }
?>