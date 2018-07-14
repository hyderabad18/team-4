<body>

<div class="container-fluid navbar box-shadow">
  <div class="container-fluid" style="max-width: 1200px;">
      <div class="sm-3 hidden-md">
      <a href="#" id="menu" class="menu-btn" ><i class="fa fa-bars" aria-hidden="true"></i></a>
    </div>
    <div class="sm-6 text-left">
        <h2 class="menu-txt">Youth for SEVA</h2>
    </div>
    <div class="sm-3">
      <a href="" class="menu-btn"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
    </div>
  </div>  
</div>

<div class="nav col-12" data-menu = "false">
    <ul class="col-12">
      <a href=""><li>Dashboard</li></a>
      <a href=""><li>Add Event</li></a>
      <a href=""><li>Event List</li></a>
    </ul>
</div>


<script>
    $('#menu').click(function () {

        console.log($('.nav').data('menu'));

        if (String($('.nav').data('menu')) === 'false') 
        {
            $('.nav').addClass('nav-active');
            $('.nav').data('menu','true');   
        }
        else
        {
            $('.nav').removeClass('nav-active');   
            $('.nav').data('menu','false');
        }
    })
</script>