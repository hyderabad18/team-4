<?php 

  require_once ($_SERVER['DOCUMENT_ROOT']."/bridge/connection.php");
  $conn = main_db_connect();

  if (isset($_GET['event_id'])) 
  {
      $id=mysqli_real_escape_string($conn,addslashes($_GET['event_id']));
      $sql = "SELECT `event_name`, `description`, `category`, `location`, `start_date`, `end_date`, `volunteers_required`, `timestamp`, `comments` FROM `event_entry` WHERE `event_id` = '$id'" ;
      $res = $conn->query($sql)->fetch_assoc();
  }

 ?>



<style>
#notice {
    max-width: 1200px;
    margin:0px auto;
}
.widget-row
{
    padding:5px;
    border-bottom: 2px solid #BDBDBD;
}

</style>

<div id="notice">

  <div class="widget">
    <div class="widget-head">
        <h5><?php echo $res['event_name']; ?></h5>
    </div>
    <div class="widget-content">
        <div class="widget-description d-none d-sm-block">
            <p><?php echo $res['description']; ?></p>
        </div>
        <div class="row">
            <div class="widget-location col-12 col-sm-4">Kukatpally</div>
            <div class="widget-time col-12 col-sm-8">
                <div class="time-from col-5"><?php echo $res['start_date']; ?></div>
                <div class="time-from col-2">To</div>
                <div class="time-to col-5"><?php echo $res['end_date']; ?></div>
            </div>
        </div>
        <br>
        <br>
       

    </div>
  </div>
<div class="widget">
    <div class="widget-head">
        <h5>List of the Volunteers</h5>
    </div>

<div class="widget-content">

    <?php 

    $sql = "SELECT `v_id` FROM `applied_volunteers` WHERE `event_id` = '$id'";

    $res = $conn->query($sql);

    while ($row = $res->fetch_assoc()) 
    {
        $sql = "SELECT `name` , `contact` , `email` FROM `volunteer_reg` WHERE  `v_id` = '".$row['v_id']."'";
        $vol = $conn->query($sql)->fetch_assoc();
?>

    <div class="row widget-row">
                <div class="col-8 row text-center">
                    <div class="widget-name col-4"><?php echo $vol['name']; ?></div>
                    <div class="widget-name col-4 d-none d-sm-block"><?php echo $vol['contact']; ?></div>
                    <div class="widget-name col-4 d-none d-md-block"><?php echo $vol['email']; ?></div>
                </div>
                <div class="col-4 text-center">
                    <button class="accept btn btn-outline-success">ACCEPT</button>
                </div>
        </div>



<?php

    }

     ?>
        
    </div>

</div>
