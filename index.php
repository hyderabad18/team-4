<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <meta name="viewport" content="width=device-width, user-scalable=no" />
  <meta name="Keywords" content="OUCE,UCEOU, Placement, recruit">

  <link rel="manifest" href="/manifest.json">

  <title>Youth for Seva</title>

  <link rel="stylesheet" href="/library/css/bootstrap.min.css">
  <link rel="stylesheet" href="/library/css/stylesheet.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
<style>
.mySlides {display:block;}
</style>
</head>
<body>
 
 <div class="container-fluid navbar box-shadow">
  <div class="container-fluid" style="max-width: 1200px;padding: 0px;">
      
    <div class="col-md-6 col-xs-12 text-center">
        <h2 class="menu-txt">Youth for SEVA</h2>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 md-offset-4" style="padding:0px; font-size: 9px;">
      <a href="/admin"><button type="button" class="btn btn-outline-light">Admin </button></a>
      <a href="/volunteer"><button type="button" class="btn btn-outline-light">Volunteer Login</button></a>
      <a href="/volunteer/registration"><button type="button" class="btn btn-outline-light"> Register</button></a>
    </div>
  </div>  
</div>
<div class="container-fluid" style="margin:auto auto">
<div class="w3-content w3-section" style="max-width:500px;margin-top: 70px;margin-left: auto; margin-right: auto">
  <img class="mySlides" src="/library/images/imggg.jpg" style="width:100%">
  <img class="mySlides" src="/library/images/yfsimg2.jpg" style="width:100%">
  <img class="mySlides" src="/library/images/imgggg.jpg" style="width:100%">
</div>
</div>
<br><br>
<hr>

<center><h3><b>About us</b></h3></center>
<article class="container-fluid" style="margin:auto auto">
    <section>
      <p>Youth for Seva (YFS), founded in April 2007, is a nation-wide volunteering movement that inspires youth to volunteer, and provides them with meaningful opportunities to serve the community. </p><br>
      <p>The goal of YFS is to support schools, destitute shelters, government hospitals and other organizations in the social sector through volunteers who can help them mitigate some of their shortcomings and challenges. Volunteering is made easy and customized to the individual’s interests, time availability and skill sets.</p><br>

      <p>YFS aims to create positive change agents in the society, through the culture of volunteering.</p><br>
 
  <p><b>Vision</b></p>

      <p>Self-reliant communities powered by selfless individuals.</p><br>

 <p> <b>Mission</b></p>
  <ul>

  <li>To facilitate a movement of volunteering.</li>
  <li>To empower and enable individuals to become positive change agents.</li>
  <li>To enable institutions to effectively engage community to deliver services.</li>
  <li>To promote sustainable lifestyles.</li>
</ul>
</section>

</article>


<script>
var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000);
}
</script>

</body>
</html>

<script>
 if ('serviceWorker' in navigator) {
    console.log("Will the service worker register?");
    navigator.serviceWorker.register('service-worker.js')
      .then(function(reg){
        console.log("Yes, it did.");
     }).catch(function(err) {
        console.log("No it didn't. This happened:", err)
    });
 }
</script>