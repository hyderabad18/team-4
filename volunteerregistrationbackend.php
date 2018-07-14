<?php
require_once ("../bridge/connection.php");
$conn = main_db_connect();

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['profession']) && isset($_POST['location']) && isset($_POST['password']))
	{
		
		$name=mysqli_real_escape_string($conn,addslashes($_POST['name']));
		$email=mysqli_real_escape_string($conn,addslashes($_POST['email']));
		$contact=mysqli_real_escape_string($conn,addslashes($_POST['contact']));
		$profession=mysqli_real_escape_string($conn,addslashes($_POST['profession']));
		$location=mysqli_real_escape_string($conn,addslashes($_POST['location']));
		$password=mysqli_real_escape_string($conn,addslashes($_POST['password']));
		$hashed= hash('sha512',$password);
	$sql = "INSERT INTO `event_entry`(`name`, `email`, `contact`, `profession`, `location`, `password`) VALUES ('$name' , '$email', '$contact' , '$profession' , '$location' , '$hashed' , NOW())";

		if($conn->query($sql) === TRUE)
		{
			echo '<script language="javascript">alert("Registered Sucessfully")</script>';
		}
		else
		{
			echo '<script language="javascript">alert("Error in Registering. Error: $conn->mysql_errno();")</script>';
			header("Location: volunteer_registration.php");
		}

	}
?>