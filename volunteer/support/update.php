<?php
    require_once ($_SERVER['DOCUMENT_ROOT']."/bridge/connection.php");
    $conn = main_db_connect();


    if(isset($_POST['v_id']) &&isset($_POST['name'])  && isset($_POST['contact']) && isset($_POST['profession']) && isset($_POST['location']) )
        {
           

            $v_id=mysqli_real_escape_string($conn,addslashes($_POST['v_id']));
            $name=mysqli_real_escape_string($conn,addslashes($_POST['name']));
            $contact=mysqli_real_escape_string($conn,addslashes($_POST['contact']));
            $profession=mysqli_real_escape_string($conn,addslashes($_POST['profession']));
            $location=mysqli_real_escape_string($conn,addslashes($_POST['location']));

            $sql = "UPDATE `volunteer_reg` SET `name`='$name',`contact`='$contact',`profession`='$profession',`location`='$location' WHERE `v_id` = '$v_id'";
                // echo $sql;
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
