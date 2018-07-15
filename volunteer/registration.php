<?php
    require_once ("../bridge/connection.php");
    $conn = main_db_connect();


    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['profession']) && isset($_POST['location']) && isset($_POST['age']) && isset($_POST['password']) && isset($_POST['cnfm_password']))
        {
           


            $name=mysqli_real_escape_string($conn,addslashes($_POST['name']));
            $email=mysqli_real_escape_string($conn,addslashes($_POST['email']));
            $contact=mysqli_real_escape_string($conn,addslashes($_POST['contact']));
            $profession=mysqli_real_escape_string($conn,addslashes($_POST['profession']));
            $location=mysqli_real_escape_string($conn,addslashes($_POST['location']));
            $age=mysqli_real_escape_string($conn,addslashes($_POST['age']));
            $password=mysqli_real_escape_string($conn,addslashes($_POST['password']));
            $cnfm_password=mysqli_real_escape_string($conn,addslashes($_POST['cnfm_password']));
            $hashed= hash('sha512',$password);

            if ($password === $cnfm_password) 
            {
                $sql = "INSERT INTO `volunteer_reg`(`name`, `email`, `contact`, `profession`, `age` , `location`, `password`, `timestamp` ) VALUES ('$name' , '$email', '$contact' , '$profession' , '$age', '$location' , '$hashed' , NOW())";
                echo $sql;
                // if($conn->query($sql) === TRUE)
                // {
                //     echo '<script language="javascript">alert("Registered Sucessfully")</script>';
                //     header("Location: login");
                // }
                // else
                // {
                //     echo '<script language="javascript">alert("Error in Registering. Error: $conn->mysql_errno();")</script>';
                //     header("Location: registration.php");
                // }   
            }
            else
            {
                echo '<script language="javascript">alert("Passwords dont match")</script>';
                header("Location: registration.php");
            }   

        }
?>

<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="/library/css/bootstrap.min.css">
        <link rel="stylesheet" href="/library/css/stylesheet.css">

        <style>
        input[type=text],input[type=password] 
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
            margin-top: 25px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        @media (min-width: 768px)
        {
            #content
            {
                width: 700px;
                margin: 0px auto;
                margin-top: 25px;
            }
        }
        </style> 
    </head>    

    <body>
<div class="container-fluid navbar box-shadow ">
        <h2 class="menu-txt" style="width: 100%;text-align:center;">Youth for SEVA</h2>
</div>

<div id="content" class="container box-shadow" >
    <h4>Register with Us</h4>
  <form action="registration" method="POST">
    <label for="ename"> Name</label>
    <input type="text"  name="name" placeholder="Name" required >

    <label for="edesc">Contact</label>
    <input type="text"  name="contact" placeholder="Contact" required >

    <label for="edesc">Email Id</label>
    <input type="text"  name="email" placeholder="Email Id" required >

    <label for="edesc">Location</label>
    <input type="text"  name="location" placeholder="Location" required >

    <label for="age">Age</label>
    <input type="text"  name="age" placeholder="age" required >

    <label for="edesc">Profession</label>
    <input type="text"  name="profession" placeholder="Profession" required >

    <label for="edesc">Password</label>
    <input type="password" id="pass" name="password" placeholder="Password" required >

    <label for="edesc">Confirm Password</label>
    <input type="password" id="cpass" name="cnfm_password" placeholder="Password" required >

    <div id="error" style="color: red"></div>
  
    <button type="submit" class="btn btn-outline-success col-6 offset-3" style="margin-top: 20px;" value="Submit">Submit</button>
  </form>
</div> 
<div class="footer"> 2018 &copy;Youth for Seva </div>  
<script src="/library/js/jquery.min.js"></script> 
<script>
    $('#cpass').on('keyup',function() 
    {
        if($('#cpass').val() !== $('#pass').val())
        {
            $('#error').html('Passwords dont match');
        }
        else
        {
            $('#error').html('');  
        }
    })
</script>

</body>

</html>