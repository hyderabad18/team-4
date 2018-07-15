<?php
	

	require_once ($_SERVER['DOCUMENT_ROOT']."/bridge/connection.php");
  	$conn = main_db_connect();

	if (isset($_POST['in']) && isset($_POST['event_id']) ) 
	{
		$sql = "SELECT `v_id`, `status`, `check_in` FROM `applied_volunteers` WHERE `v_id` = '".$_SESSION['id']."'";
		$res = $conn->query($sql)->fetch_assoc();
		$arr = json_decode($res['check_in']);
		$sql = "UPDATE `applied_volunteers` SET `check_in` = '".json_encode((object) array_merge((array) $arr,array(date("Y-m-d") => (string)time())))."' WHERE `v_id` = '".$_SESSION['id']."' AND `event_id` = '".$_POST['event_id']."'";
		if($conn->query($sql) === TRUE)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}


	require_once ($_SERVER['DOCUMENT_ROOT']."/bridge/connection.php");
  	$conn = main_db_connect();

	if (isset($_POST['out']) && isset($_POST['event_id']) ) 
	{
		$sql = "SELECT `v_id`, `status`, `check_in` FROM `applied_volunteers` WHERE `v_id` = '".$_SESSION['id']."'";
		$res = $conn->query($sql)->fetch_assoc();
		$arr = json_decode($res['check_in']);
		$sql = "UPDATE `applied_volunteers` SET `check_in` = '".json_encode((object) array_merge((array) $arr,array(date("Y-m-d") => (string)time())))."' WHERE `v_id` = '".$_SESSION['id']."' AND `event_id` = '".$_POST['event_id']."'";
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