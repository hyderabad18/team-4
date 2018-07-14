<?php
require_once ("../bridge/connection.php");
$conn = main_db_connect();
$query="SELECT name,contact,email,location,profession FROM volunteer_reg";
$result=mysql_query($query);
while($rows =mysql_fetch_array($result)){
$sql= "INSERT into table2 (type,id,title) VALUES ('value','$rows[park_id]','$rows[title]')";
mysql_query($sql);

            $sql    = "SELECT * FROM volunteer_reg WHERE name='$name'";
            $result = mysql_query($sql) or die(mysql_error());
            while ($row    = mysql_fetch_array($result))
            {

                $name    = $row['name'];
                $contact = $row['contact'];
                $email = $row['email'];
				$location = $row['location'];
				$profession = $row['profession'];
            }
            ?>
      
		 <div id="form-layout">
  <form action="updateprofilebackend.php">
    <label for="ename"> Name</label>
    <input type="text" id="ename" name="name" value="<?php echo $row ['name']; ?>" placeholder="event name..">

    <label for="edesc">Contact</label>
    <input type="text" id="lname" name="contact" value="<?php echo $row ['contact']; ?>" placeholder="Contact">

    <label for="edesc">Email Id</label>
    <input type="text" id="lname" name="email" value="<?php echo $row ['email']; ?>" placeholder="Email Id">
	
	<label for="edesc">Location</label>
    <input type="text" id="lname" name="location" value="<?php echo $row ['location']; ?>" placeholder="location">

    <label for="edesc">Profession</label>
    <input type="text" id="lname" name="profession" value="<?php echo $row ['profession']; ?>" placeholder="Profession">

    
  
    <input type="submit" value="update">
  </form>
</div>
?>