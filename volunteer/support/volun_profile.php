
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
}
@media (min-width: 768px)
{
	#content
	{
		width: 700px;
		margin: 0px auto;
	}
}

#notice {
    max-width: 1200px;
    margin:0px auto;
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

</style>
<div id="content" class="container-fluid box-shadow">
    <div>
        <h4><b>Impact</b></h4>
  <p class="text-warning"><div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
  aria-valuemin="0" aria-valuemax="100" style="width:50%">
    50% impacted
  </div>
</div>
</p>
        <h4 id="profile"><b>My Profile</b></h4>
        <br>
    <div id="form-layout">
  <form action="/action_page.php">
    <label for="ename">Name</label>
    <input type="text" id="ename" name="firstname" placeholder="Your name..">

    <label for="edesc">Contact</label>
    <input type="text" id="lname" name="description" placeholder="Contact">

    <label for="edesc">Email Id</label>
    <input type="text" id="lname" name="description" placeholder="Email Id">

    <label for="edesc">Profession</label>
    <input type="text" id="lname" name="description" placeholder="Profession">

    <label for="edesc">Location</label>
    <input type="text" id="lname" name="description" placeholder="Location">
  
    <input type="submit" value="Edit">
  </form>
</div>
</div>


<div id="notice">
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

<br>

<h4 id="update"><b>Progress</b></h4>
<br>
<button class="btn">check in</button>
<button class="btn">check out</button>


</div>