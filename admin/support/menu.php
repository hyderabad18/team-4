<body>
<div class="container" id="header">
<div class="top-navbar header b-b row"> 
    <a style="font-size: 26px;" class="hidden-lg pull-left" href="#"><i class="icon-reorder"></i> </a>
    <div class="brand pull-left col-xs-6 col-sm-5"> <a href="index"><h4>Welcome, Admin</h4></a></div>
    <ul class="nav navbar-nav navbar-right hidden">
      <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="icon-warning-sign"></i> <span class="badge">5</span> </a>
        <ul class="dropdown-menu extended notification">
          <li class="title">
            <p>You have 5 new notifications</p>
          </li>
          <li> <a href="#"> <span class="label label-success"><i class="icon-plus"></i></span> <span class="message">New user registration.</span> <span class="time">1 mins</span> </a> </li>
          <li> <a href="#"> <span class="label label-danger"><i class="icon-warning-sign"></i></span> <span class="message">High CPU load on cluster #2.</span> <span class="time">5 mins</span> </a> </li>
          <li> <a href="#"> <span class="label label-success"><i class="icon-plus"></i></span> <span class="message">New user registration.</span> <span class="time">10 mins</span> </a> </li>
          <li> <a href="#"> <span class="label label-info"><i class="icon-bullhorn"></i></span> <span class="message">New items are in queue.</span> <span class="time">25 mins</span> </a> </li>
          <li> <a href="#"> <span class="label label-warning"><i class="icon-bolt"></i></span> <span class="message">Disk space to 85% full.</span> <span class="time">35 mins</span> </a> </li>
          <li class="footer"> <a href="#">View all notifications</a> </li>
        </ul>
      </li>
      <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="icon-tasks"></i> <span class="badge">7</span> </a>
        <ul class="dropdown-menu extended notification">
          <li class="title">
            <p>You have 7 pending tasks</p>
          </li>
          <li> <a href="#"> <span class="task"> <span class="desc">Preparing new release</span> <span class="percent">30%</span> </span>
            <div class="progress progress-small">
              <div class="progress-bar progress-bar-info" style="width: 30%;"></div>
            </div>
            </a> </li>
          <li> <a href="#"> <span class="task"> <span class="desc">Change management</span> <span class="percent">80%</span> </span>
            <div class="progress progress-small progress-striped active">
              <div class="progress-bar progress-bar-danger" style="width: 80%;"></div>
            </div>
            </a> </li>
          <li> <a href="#"> <span class="task"> <span class="desc">Mobile development</span> <span class="percent">60%</span> </span>
            <div class="progress progress-small">
              <div class="progress-bar progress-bar-success" style="width: 60%;"></div>
            </div>
            </a> </li>
          <li> <a href="#"> <span class="task"> <span class="desc">Database migration</span> <span class="percent">20%</span> </span>
            <div class="progress progress-small">
              <div class="progress-bar progress-bar-warning" style="width: 20%;"></div>
            </div>
            </a> </li>
          <li class="footer"> <a href="#">View all tasks</a> </li>
        </ul>
      </li>
      <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="icon-envelope"></i> <span class="badge">1</span> </a>
        <ul class="dropdown-menu extended notification">
          <li class="title">
            <p>You have 3 new messages</p>
          </li>
          <li> <a href="#"> <span class="photo"> <img src="images/profile.png" width="34" height="34"></span> <span class="subject"> <span class="from">John Doe</span> <span class="time">Just Now</span> </span> <span class="text"> Consetetur sadipscing elitr...</span> </a> </li>
          <li> <a href="#"> <span class="photo"><img src="images/profile.png" width="34" height="34"></span> <span class="subject"> <span class="from">John Doe</span> <span class="time">35 mins</span> </span> <span class="text"> Sed diam nonumy... </span> </a> </li>
          <li> <a href="#"> <span class="photo"><img src="images/profile.png" width="34" height="34"></span> <span class="subject"> <span class="from">John Doe</span> <span class="time">5 hours</span> </span> <span class="text"> No sea takimata sanctus... </span> </a> </li>
          <li class="footer"> <a href="#">View all messages</a> </li>
        </ul>
      </li>
    </ul>
    <form class="pull-right hidden" >
      <input type="search" placeholder="Search..." class="search hidden-xs" id="search-input">
    </form>
  </div>
</div>






<div class="wrapper">
<div class="left-nav ">
    <div id="side-nav">
      <ul id="nav">
        <li id="cur_dash"> <a href="index"> <i class="icon-dashboard"></i> Dashboard </a> </li>
        <li id="cur_notice"> <a href> <i class="icon-edit"></i> Notice <span class="label label-info pull-right">2</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="index?route=notice_add"> <i class="icon-angle-right"></i> Add Notice</a> </li>
            <li> <a href="index?route=notice_board"> <i class="icon-angle-right"></i>Notice Board</a> </li>
          </ul>
        </li>
        <li id="cur_crp"> <a href> <i class="icon-table"></i> CRP Details <span class="label label-info pull-right">2</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="index?route=crp_add"> <i class="icon-angle-right"></i>Create</a> </li>
            <li> <a href="index?route=crp_notice_board"> <i class="icon-angle-right"></i> CRP Details </a> </li>
          </ul>
        </li>
        <li id="cur_recruit"> <a href> <i class="icon-flag"></i> Recruiters <span class="label label-info pull-right">7</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="index?route=recruiter_add"> <i class="icon-angle-right"></i> Add New Recruiter </a> </li>
            <li> <a href="index?route=recruiter_user"> <i class="icon-angle-right"></i> Create Username / Password </a> </li>
            <li> <a href="index?route=recruiter_pass"> <i class="icon-angle-right"></i> Reset Password </a> </li>
            <li> <a href="index?route=ybd"> <i class="icon-angle-right"></i> YBD Report </a> </li>
            <li> <a href="index?route=insert_student"> <i class="icon-angle-right"></i> Insert Selected Students </a> </li>
            <li> <a href="index?route=student_record"> <i class="icon-angle-right"></i> Students Track Record </a> </li>
            <li> <a href="index?route=student_report"> <i class="icon-angle-right"></i> Selected Students Report </a> </li>
          </ul>
        </li>        
        <li id="cur_student"> <a href> <i class="icon-folder-open-alt"></i> Students <span class="label label-info pull-right">7</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="index?route=stu_code"> <i class="icon-angle-right"></i>Students Code </a> </li>
            <li> <a href="index?route=mbd"> <i class="icon-angle-right"></i> MBD Report </a> </li>
            <li> <a href="index?route=stu_pass"> <i class="icon-angle-right"></i> Reset Student Password </a> </li>
            <li> <a href="index?route=stu_photo"> <i class="icon-angle-right"></i> Change Student Photo </a> </li>
            <li> <a href="index?route=stu_delete"> <i class="icon-angle-right"></i> Delete Student </a> </li>
            <li> <a href="index?route=stu_mbd"> <i class="icon-angle-right"></i> Edit Student MBD </a> </li>
          </ul>
        </li>
        <li id="cur_setting"> <a href> <i class="icon-cog"></i> Settings <span class="label label-info pull-right">2</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="index?route=change"> <i class="icon-angle-right"></i> Change Password </a> </li>
          </ul>
        </li>
      <li> <a href=""> <i class="icon-time"></i> Signout </a> </li>
      </ul>
    </div>
  </div>