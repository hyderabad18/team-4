<?php
require_once ("../bridge/connection.php");
$conn = main_db_connect();
     $query = "SELECT * FROM volunteer_reg"; 
	 
$result = mysql_query($query) or die(mysql_error());


while($row = mysql_fetch_array($result)){
	echo $row['name']. " - ". $row['contact'];
	echo "<br />";
?>