<?php 
	require_once ("../bridge/connection.php");
		$conn = main_db_connect();
	if(isset($_POST['event_name']) && isset($_POST['description']) && isset($_POST['category']) && isset($_POST['location']) && isset($_POST['start_date']) && isset($_POST['end_date']) && isset($_POST['volunteers_required']) && isset($_POST['comments']))
		{
			
			$event_name=mysqli_real_escape_string($conn,addslashes($_POST['event_name']));
			$description=mysqli_real_escape_string($conn,addslashes($_POST['description']));
			$category=mysqli_real_escape_string($conn,addslashes($_POST['category']));
			$location=mysqli_real_escape_string($conn,addslashes($_POST['location']));
			$start_date=mysqli_real_escape_string($conn,addslashes($_POST['start_date']));
			$end_date=mysqli_real_escape_string($conn,addslashes($_POST['end_date']));
			$volunteers_required=mysqli_real_escape_string($conn,addslashes($_POST['volunteers_required']));
			$comments=mysqli_real_escape_string($conn,addslashes($_POST['comments']));
			
			
			$sql = "INSERT INTO `event_entry`(`event_name`, `description`, `category`, `location`, `start_date`, `end_date`, `volunteers_required`, `comments`,`timestamp`) VALUES ('$event_name' , '$description', '$category' , '$location' , '$start_date' , '$end_date','$volunteers_required','$comments' , NOW())";

		if($conn->query($sql) === TRUE)
		{
			echo '<script language="javascript">alert("Submited Sucessfully")</script>';
		}
		else
		{
			echo '<script language="javascript">alert("Error in Submitting. Error: $conn->mysql_errno();")</script>';
		}
	}
 ?>
<style>
input[type=text],input[type=date],select
 {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}
.input-color:focus, .input-color:active
{
	outline: 2px solid #3F51B5; 
}
#content {
	background-color: #f2f2f2;
	padding: 20px;
}
@media (min-width: 768px)
{
	#content
	{
		width: 700px;
		margin: 0px auto;
	}
}
</style>


<div id="content" class="container-fluid box-shadow">
  <form action="index?route=event_entry" method="POST" class="sm-12 md-6 md-offset-3">
  	<h4>Add an Event</h4>
	<label for="ename">Event Name</label>
	<input type="text" id="ename" name="event_name" placeholder="event name.."  class="input-color">
	<label for="edesc">Event Description</label>
	<input type="text" id="lname" name="description" placeholder="Event Description.." class="input-color">
	<label for="edesc">Category</label>
	<select name="category" id="cat">
		<option value="1">Education</option>
		<option value="2">Health</option>
		<option value="3">Environment</option>
		<option value="4">Enablement</option>
	</select>
	<label for="location">Location</label>
	<input type="text" id="sdate" name="location" placeholder="Location" class="input-color">
	<label for="startdate">Start Date</label>
	<input type="date" id="sdate" name="start_date" placeholder="Start Date.." class="input-color">
	<label for="enddate">End Date</label>
	<input type="date" id="edate" name="end_date" placeholder="End Date.." class="input-color">
	<label for="no">Number of volunteers required</label>
	<input type="text" id="no" name="volunteers_required" placeholder="Number of volunteers required.." class="input-color">
	<label for="no">Comments</label>
	<input type="text" name="comments" placeholder="Comments" class="input-color">

	<button type="submit" class="btn btn-outline-success col-6 offset-3" style="margin-top: 20px;" value="Submit">Submit</button>
  </form>
</div>