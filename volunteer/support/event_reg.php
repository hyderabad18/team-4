<?php

	require_once ($_SERVER['DOCUMENT_ROOT']."/bridge/connection.php");
  	$conn = main_db_connect();

	if (isset($_POST['event_id']) && isset($_POST['v_id'])) 
	{
		$event_id=mysqli_real_escape_string($conn,addslashes($_POST['event_id']));
		$v_id=mysqli_real_escape_string($conn,addslashes($_POST['v_id']));
		$sql = "INSERT INTO `applied_volunteers`(`event_id`, `v_id`, `timestamp`, `status`, `check_in`) VALUES ('$event_id','$v_id',NOW(),'0','{}')";
		if($conn->query($sql) === TRUE)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}

?>