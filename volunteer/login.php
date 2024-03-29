<?php 

  session_start();
  
  require_once ($_SERVER['DOCUMENT_ROOT']."/bridge/connection.php");
  $conn = main_db_connect();

  if (isset($_POST['email']) && isset($_POST['password'])) 
  {
        $email=mysqli_real_escape_string($conn,addslashes($_POST['email']));
       $password=mysqli_real_escape_string($conn,addslashes($_POST['password']));
       $hashed= hash('sha512',$password);

       $sql = "SELECT  `v_id`  FROM `volunteer_reg` WHERE `email` = '$email' AND `password` = '$hashed'";

       $res = $conn->query($sql);

       if ($res->num_rows == 1) 
       {
             $row = $res->fetch_assoc();
             $_SESSION['id'] = $row['v_id'];
             echo "<script>window.location.href='/volunteer/index'</script>";
             // header('Location: index');


       }
       else
       {
             echo "<script>alert('Improper Passwords');</script>";
       }
  }



 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta name="Keywords" content="OUCE,UCEOU, Placement, recruit">

    <title>Placement - OUCE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link href="support/stylesheet.css" rel="stylesheet">

    <!-- <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/> -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="../../assets/js/html5shiv.js"></script>
          <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<style>
    /*========================================================================================================================================================*/
    /*Page browser reset css*/
    /*========================================================================================================================================================*/

    /* http://meyerweb.com/eric/tools/css/reset/ 
       v2.0 | 20110126
       License: none (public domain)
    */

    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed, 
    figure, figcaption, footer, header, hgroup, 
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
      margin: 0;
      padding: 0;
      border: 0;
      font-size: 100%;
      font: inherit;
      vertical-align: baseline;
    }
    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure, 
    footer, header, hgroup, menu, nav, section {
      display: block;
    }
    body {
      line-height: 1;
    }
    ol, ul {
      list-style: none;
    }
    blockquote, q {
      quotes: none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
      content: '';
      content: none;
    }
    table {
      border-collapse: collapse;
      border-spacing: 0;
    }

    /*========================================================================================================================================================*/
    /*default style for the page*/
    /*========================================================================================================================================================*/


    html
    {
        height: 100%;
        width: 100%;
        min-width: 320px;
    }

    body
    {
      height: 100%;
      width: 100%;
      background: linear-gradient(90deg,#af68fe 0,#9C87FF 42%,#77C3FF 75%,#64e1ff 100%) right bottom no-repeat;
      font-family : 'Roboto','sans-serif';
    }

    /*========================================================================================================================================================*/
    /*index page stylesheet*/
    /*========================================================================================================================================================*/

    /*========================================================================================================================================================*/
    /*login page css*/
    /*========================================================================================================================================================*/

    .login-outer
    {
        background: url(images/bg_login_blur.png) no-repeat center center;
        background-size: 100% 100%;
        background-color: transparent;
        position: relative;
        border-top: 2px solid white;
        border-bottom: 2px solid white;
        top: 50%;
        transform: translateY(-50%); 
        padding: 4% 5px 8% 5px; 
        max-width: 500px;
        margin : 0 auto;
        color: white;
    }

    .login-header
    {
        font-size: 2em;
        margin: 15% 0px;
    }

    .login-input
    {
        margin: 5% auto;
        width: 85%;
        border: none;
        background-color: transparent;
        /*border-top: 2px solid transparent;*/
        border-bottom: 2px solid white;
        border-radius: 0px;
        color:white;
        cursor: pointer;
    }

    .login-input::-webkit-input-placeholder { /* WebKit, Blink, Edge */
        color:    #fff;
    }
    .login-input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
       color:    #fff;
       opacity:  1;
    }
    .login-input::-moz-placeholder { /* Mozilla Firefox 19+ */
       color:    #fff;
       opacity:  1;
    }
    .login-input:-ms-input-placeholder { /* Internet Explorer 10-11 */
       color:    #fff;
    }
    .login-input::-ms-input-placeholder { /* Microsoft Edge */
       color:    #fff;
    }

    .login-input::placeholder { /* Most modern browsers support this now. */
       color:    #fff;
    }

    .login-input:active , .login-input:visited , .login-input:focus
    {
        border-color: transparent;
        background-color: transparent;
        box-shadow: 0 0 0 0rem rgba(255,255,255,1) !important;
        border-bottom: 2px solid white;
        color: white;
    }

    .login-checkbox
    {
        background-color: transparent;
        border:2px solid black;
        margin: 5px;
    }
    .login-submit
    {
        width: 60%;
    }
</style>


<body class="container-fluid">
    <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-10 offset-xs-1 login-outer">
        <h3 class="text-center login-header">Volunteer Login</h3>
        <h4 class="text-center">Sign In</h4>
        <form action="" method="post">
                <input type="text" class="form-control login-input" name="email" id="email" placeholder="Username">
        <input type="password" class="form-control login-input" id="password" name="password" placeholder="Password">
        <br>
        <div class="text-center"><input type="checkbox" class="form-check-label login-checkbox" name="remember"><label for="remember">Keep me Signed In</label></div>
        <br><br>
        <div class="text-center">
            <button class="btn btn-outline-light login-submit">SUBMIT</button>
        </div>
        </form>
    </div>
</body>
</html>
