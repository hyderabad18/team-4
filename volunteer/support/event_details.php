<?php 

  require_once ($_SERVER['DOCUMENT_ROOT']."/bridge/connection.php");
  $conn = main_db_connect();

  if (isset($_GET['id'])) 
  {
      $id=mysqli_real_escape_string($conn,addslashes($_GET['id']));
      $sql = "SELECT `event_name`, `description`, `category`, `location`, `start_date`, `end_date`, `volunteers_required`, `timestamp`, `comments` FROM `event_entry` WHERE `event_id` = '$id'" ;
      $res = $conn->query($sql)->fetch_assoc();
  }

 ?>


  <div class="widget">
    <div class="widget-head">
        <h5><?php echo $res['event_name']; ?></h5>
    </div>
    <div class="widget-content">
        <div class="widget-description d-none d-sm-block">
            <p><?php echo $res['description']; ?></p>
        </div>
        <div class="row">
            <div class="widget-location col-12 col-sm-4">Location</div>
            <div class="widget-time col-12 col-sm-8">
                <div class="time-from col-5"><?php echo $res['start_date']; ?></div>
                <div class="time-from col-2">To</div>
                <div class="time-to col-5"><?php echo $res['end_date']; ?></div>
            </div>

<br>
<br>
<button class="btn btn-outline-success col-6 offset-3"  onclick="apply('<?php echo($id); ?>');">Apply</button>


</div>
        </div>