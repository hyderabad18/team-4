<?php
/*the below statements must get executed only when the button is clicked*/
$query="insert into applied_volunteers value('event_id','v_id','name','description','timestamp','status','location')";
mysql_query($query);
?>