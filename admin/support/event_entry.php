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

<style>
input[type=text], select
 {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

#content {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>


<div id="content">
  <form action="/action_page.php">
    <label for="ename">Event Name</label>
    <input type="text" id="ename" name="firstname" placeholder="event name..">
    <label for="edesc">Event Description</label>
    <input type="text" id="lname" name="description" placeholder="Event Description..">

    <label for="location">location</label>
    <select id="location" name="location">
      <option value="kukatpally">Kukatpally</option>
      <option value="lbnagar">LBnagar</option>
      <option value="mehdipatnam">Mehdipatnam</option>
      <option value="vanasthalipuram">Vanasthalipuram</option>
    </select>
    <label for="startdate">Start Date</label>
    <input type="text" id="sdate" name="Start Date" placeholder="Start Date..">
    <label for="enddate">End Date</label>
    <input type="text" id="edate" name="End Date" placeholder="End Date..">
    <label for="no">Number of volunteers required</label>
    <input type="text" id="no" name="no" placeholder="Number of volunteers required..">
    <input type="submit" value="Submit">
  </form>
</div>
