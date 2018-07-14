<?php
 
// Attempt update query execution
$sql = "UPDATE volunteer_reg SET 
                contact = 'contact',
				location = 'location',
				profession = 'profession' WHERE name=name";
if (query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record failed ";
}
?>