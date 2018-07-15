<?php 
    
     require_once ($_SERVER['DOCUMENT_ROOT']."/bridge/connection.php");
      $conn = main_db_connect();


      $stats_event = $conn->query("SELECT COUNT(`event_id`) FROM `event_entry` WHERE 1")->fetch_assoc()["COUNT(`event_id`)"];
      $stats_user = $conn->query("SELECT COUNT(`v_id`) FROM `volunteer_reg` WHERE 1")->fetch_assoc()["COUNT(`v_id`)"];


 ?>

<style>
  .stat
  {
    margin:0px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    padding: 0px;
  }

    .stats-icon
    {
      color: white;
      font-size: 50px;
    }
    .stats-event-icon
    {
        background-color: #F39C12;
    }
    
    .stats-user-icon
    {
        background-color: #57D5F4;
    }

    .stats-active-icon
    {
        background-color: #00A65A;
    }

    .stats-impact-icon
    {
        background-color: #DD4B39;
    }
  
    .stat-info
    {
        padding: 10px;
    }

    .stat-info-head
    {
      font-size: 20px;
    }
  
    .current-event
    {
        margin-top: 30px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        border-top: 2px solid #303F9F;
    }

    .widget
    {
      background-color: white;
    }

    .current-event-inner
    {
        padding: 20px;
    }

    .widget-time
    {
      padding: 0px;
    }


</style>
<div class="container">
    <div class="row stats">
      <div style="padding: 10px;" class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <div class="stats-event stat row">
            <div class="col-4 text-center stats-icon stats-event-icon"><i class="fa fa-tasks" aria-hidden="true"></i></div>
            <div class="stat-info col-8">
                <div class="stat-info-head col-12">Events So Far</div>
                <div class="stat-info-num col-12"><?php echo $stats_event; ?></div>
            </div>
        </div>
      </div>
      <div style="padding: 10px;" class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <div class="stats-user stat  row">
            <div class="col-4 text-center stats-icon stats-user-icon"><i class="fa fa-user-o" aria-hidden="true"></i></div>
            <div class="stat-info col-8">
                <div class="stat-info-head col-12">Volunteer's</div>
                <div class="stat-info-num col-12"><?php echo $stats_user; ?></div>
            </div>
        </div>
      </div>
      <div style="padding: 10px;" class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <div class="stats-active stat row">
            <div class="col-4 text-center stats-icon stats-active-icon"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></div>
            <div class="stat-info col-8">
              <div class="stat-info-head col-12">Active Events </div>
              <div class="stat-info-num col-12">1</div>
          </div>
        </div>
      </div>
      <div style="padding: 10px;" class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <div class="stats-impact stat row">
            <div class="col-4 text-center stats-icon stats-impact-icon"><i class="fa fa-check-circle-o" aria-hidden="true"></i></div>
            <div class="stat-info col-8">
              <div class="stat-info-head col-12">Impact</div>
              <div class="stat-info-num col-12">2</div>
          </div>
        </div>
      </div>
    </div> 
    <div class="current-event">
        <div class="current-event-inner">
            <h3>Events this Month</h3>
        </div>      
        <div class="current-event-inner">
                <?php for ($i=0; $i < 3; $i++) { 
              ?>    
                

                <div class="widget">
                  <div class="widget-head">
                      <h5>Vidyachetana-Sponser a child </h5>
                  </div>
                  <div class="widget-content">
                      <div class="widget-description d-none d-sm-block">
                          <p>Don't worry. If you don't make any changes here, nothing will go wrong.
                              At this point you can examine the content of the files and see if the application works as explained in the articles.
                            If you make changes to the files you can revert them by typing</p>
                      </div>
                      <div class="row">
                          <div class="widget-location col-12 col-sm-4">Kukatpally</div>
                          <div class="widget-time col-12 col-sm-8">
                              <div class="time-from col-5">15-07-2018</div>
                              <div class="time-from col-2">To</div>
                              <div class="time-to col-5">15-08-2018</div>
                          </div>
                      </div>

                  </div>
                </div>


              <?php } ?>

        </div>
    </div> 
</div>


