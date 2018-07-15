<?php 
  
  require_once ($_SERVER['DOCUMENT_ROOT']."/bridge/connection.php");
  $conn = main_db_connect();

  $_SESSION['id'] =  3;

  $id = $_SESSION['id'];

  $sql = "SELECT  `name` ,`contact`, `profession`, `location`  FROM `volunteer_reg` WHERE `v_id` = '$id'";

  $res = $conn->query($sql)->fetch_assoc();

 ?>


<style>
input[type=text], select
 {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}
.input-color:focus, .input-color:active
{
	outline: 2px solid #3F51B5; 
}
#content {
	background-color: #f2f2f2;
	padding: 20px;
  margin-top: 20px;
}
@media (min-width: 768px)
{
	#content
	{
		width: 700px;
		margin: 0px auto;
    margin-top: 20px;
	}
}

#notice {
    max-width: 1200px;
    margin:0px auto;
    padding:20px;
    background-color: #f2f2f2;
}

.btn {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}
.btn:hover {
  background-color: #3e8e41;
  color: white;
}
.blur
{
  height: 100%;
  margin-left: -5px;
  padding:5px;
  background-color: rgba(0,0,0,0.7);
  top: 0px;
  width: 100%;
  position: absolute;
}


</style>

<div class="container-fluid box-shadow" id="notice">
       <h4><b>Impact</b></h4>
  <p class="text-warning"><div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
  aria-valuemin="0" aria-valuemax="100" style="width:50%">
    50% impacted
  </div>
</div>  
</p>
</div>


<div id="content" class="container-fluid box-shadow">
        <h4><b>My Profile</b></h4>
        <br>
    <div id="form-layout">
    <label for="ename"> Name</label>
    <input type="text" id="name" class="edit" name="firstname" value="<?php echo $res['name']; ?>" placeholder="event name.." readonly>

    <label for="edesc">Contact</label>
    <input type="text" id="contact" class="edit" name="description" value="<?php echo $res['contact']; ?>" placeholder="Contact" readonly>

    <label for="edesc">Profession</label>
    <input type="text" id="profession" class="edit" name="description" value="<?php echo $res['profession']; ?>" placeholder="Profession" readonly>

    <label for="edesc">Location</label>
    <input type="text" id="location" class="edit" name="description" value="<?php echo $res['location']; ?>" placeholder="Locaion" readonly>
  
    <button class="btn btn-outline-danger" id="edit" onclick="edit();" >Edit</button>
    <button id="save" class="btn btn-outline-danger d-none"  >Save</button>
</div>
</div>

<div id="notice" style="margin-top: 20px;">
<br>
    <h4><b>Events</b></h4>
        <br>

  <?php for ($i=0; $i < 5; $i++) { 
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

<div class="blur">
    <div class="notif" id="content">
    <h4><b>Progress</b></h4>
    <button id="in" class="btn btn-success">check in</button>
    <button id="out" class="btn btn-danger">check out</button>
</div>
</div>

<script>
  
  function edit()
  {
    $('.edit').each(function(){
        $(this).prop('readonly',false);
        $('#edit').addClass('d-none');
        $('#save').removeClass('d-none');
    });
  } 

  $('#save').on('click',function(){
      $.ajax({
        type : 'POST',
        url  : 'support/update',
        data : {'v_id': '<?php echo $id ?>', 'name':$('#name').val(),'contact':$('#contact').val(),'profession':$('#profession').val(),'location':$('#location').val()},
        success : function (response)
        {
            if (response) 
            {
                alert('sucessfully changed');
            }
            else
            {
              alert('failed to update');
            }
        }
      });
  });

  $('#in').click(function(){
      $.ajax({
        type : 'POST',
        url  : 'support/check',
        data : {'in':true,'event_id':'3'},
        success : function (response)
        {
            if (response) 
            {
               alert('sucessfully checked in'); 
               $('.blur').css('display','none');
            }
            else
            {
              alert('failed to update');
            }
        }
      });
  });

$('#out').click(function(){
      $.ajax({
        type : 'POST',
        url  : 'support/check',
        data : {'out':true,'event_id':'3'},
        success : function (response)
        {
            if (response) 
            {
              alert('sucessfully checked out');  
              $('.blur').css('display','none'); 
            }
            else
            {
              alert('failed to update');
            }
        }
      });
  });

</script>