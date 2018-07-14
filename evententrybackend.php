require_once ("../bridge/connection.php");
$conn = main_db_connect();

if(isset($_POST['event_name']) && isset($_POST['description']) && isset($_POST['category']) && isset($_POST['location']) && isset($_POST['start_date']) && isset($_POST['end_date']) && isset($_POST['volunteers_required']) && isset($_POST['timestamp']))
	{
		
		$event_name=mysqli_real_escape_string($conn,addslashes($_POST['event_name']));
		$description=mysqli_real_escape_string($conn,addslashes($_POST['description']));
		$category=mysqli_real_escape_string($conn,addslashes($_POST['category']));
		$location=mysqli_real_escape_string($conn,addslashes($_POST['location']));
		$start_date=mysqli_real_escape_string($conn,addslashes($_POST['start_date']));
		$end_date=mysqli_real_escape_string($conn,addslashes($_POST['end_date']));
		$volunteers_required=mysqli_real_escape_string($conn,addslashes($_POST['volunteers_required']));
		
		

		$sql = "INSERT INTO `event_entry`(`event_name`, `description`, `category`, `location`, `start_date`, `end_date`, `volunteers_required`, `timestamp`) VALUES ('$event_name' , '$description', '$category' , '$location' , '$start_date' , '$end_date' , NOW())";

		if($conn->query($sql) === TRUE)
		{
			echo '<script language="javascript">alert("Submited Sucessfully")</script>';
		}
		else
		{
			echo '<script language="javascript">alert("Error in Submitting. Error: $conn->mysql_errno();")</script>';
		}

	}

