 <?php

function main_db_connect() {

	$conn = new mysqli('','root','sairanga97','yfs');
	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	} 
		
	return $conn;
}
?> 