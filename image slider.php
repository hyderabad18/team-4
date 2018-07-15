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
  <div class="container-fluid" style="max-width: 1200px;">
      
    <div class="sm-6 text-left">
        <h2 class="menu-txt">Youth for SEVA</h2>
    </div>
    <div class="sm-3">
      <button type="button" class="btn btn-outline-light">Admin </button>
      <button type="button" class="btn btn-outline-light">Volunteer Login</button>
      <button type="button" class="btn btn-outline-light"> Register</button>
    </div>
  </div>  
</div>
<div class="container-fluid" style="margin:auto auto">
<div class="w3-content w3-section" style="max-width:500px;margin-top: 70px;margin-left: auto; margin-right: auto">
  <img class="mySlides" src="imggg.jpg" style="width:100%">
  <img class="mySlides" src="yfsimg2.jpg" style="width:100%">
  <img class="mySlides" src="imgggg.jpg" style="width:100%">
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

<dl>Vision</dl>

  <dt>Self-reliant communities powered by selfless individuals.</dt><br>

<ul>Mission</ul>

  <li>To facilitate a movement of volunteering.</li>
  <li>To empower and enable individuals to become positive change agents.</li>
  <li>To enable institutions to effectively engage community to deliver services.</li>
  <li>To promote sustainable lifestyles.</li>

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