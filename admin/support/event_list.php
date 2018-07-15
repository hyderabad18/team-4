<?php 

  require_once ($_SERVER['DOCUMENT_ROOT']."/bridge/connection.php");
  $conn = main_db_connect();

      $sql = "SELECT `event_id`, `event_name`, `description`, `location`, `start_date`, `end_date` FROM `event_entry` WHERE `start_date` >= NOW()";
      $res = $conn->query($sql);


 ?>

<style>
#notice {
    max-width: 1200px;
    margin:0px auto;
}

a {
    color:#000000;
    text-decoration:none !important;
}
</style>

  <h4 class="text-center">Upcomming Events</h4>

<div id="notice">

  <?php while($row = $res->fetch_assoc())
  {

?>    
  

<a href="index?route=event_details&event_id=<?php echo $row['event_id']; ?>">
  <div class="widget">
    <div class="widget-head">
        <h5><?php echo $row['event_name']; ?></h5>
    </div>
    <div class="widget-content">
        <div class="widget-description d-none d-sm-block">
            <p><?php echo $row['description']; ?></p>
        </div>
        <div class="row">
            <div class="widget-location col-12 col-sm-4"><?php echo $row['location']; ?></div>
            <div class="widget-time col-12 col-sm-8">
                <div class="time-from col-5"><?php echo $row['start_date']; ?></div>
                <div class="time-from col-2">To</div>
                <div class="time-to col-5"><?php echo $row['end_date']; ?></div>
            </div>
        </div>

    </div>
  </div>

</a>
<?php } ?>


</div>
