<?php
session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">

                    <form method="POST" id="signup-form" class="signup-form" action="signup1.php">

                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="un" id="un" placeholder="Choose Username"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        
                         <div class="form-group">
                            <input type="text" class="form-input" name="cc" id="hc" placeholder="Type in Current City"/>
                        </div>
                         
                         <div class="form-group">
                            <input type="text" class="form-input" name="g" id="g" placeholder="Your Gender"/>
                        </div>
                         
                          <input class="rainbow rainbow-1"type="submit" name="sb" value="Signup"> 
                            <a href="signup2.php"><input type="button" id="s2" class="rainbow rainbow-1" value="ALUMNI"></a>
                    <p>
                        Already have an account ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
    <?php

if(isset($_POST['sb']))
{
        
    //echo '<script type="text/javascript"> alert("Signup button clicked") </script>';
   $name= $_POST['name'];
    $un= $_POST['un'];
    $password=$_POST['password'];
  $cc= $_POST['cc'];
  
   $g= $_POST['g'];

        $query="select * from info where username ='$un'";
        $query_run=mysqli_query($con,$query);
          
          if(mysqli_num_rows($query_run)>0)
          {
            echo '<script type="text/javascript"> alert("USERNAME ALREADY EXISTS") </script>';
          }
    else
          {
            $query="insert into alumni.info values('$name','$un','$password','$cc','$g')";
            $query_run=mysqli_query($con,$query);

            if($query_run)
            {
                    echo '<script type="text/javascript"> alert("USER REGISTERED") </script>';
                    $_SESSION["name"] = $name;
                    header('localhost:signup2.php');
            }
            else
                {
                        echo '<script type="text/javascript"> alert("ERROR HAS OCCURED!  ") </script>';
                }
          }
        
    
    
}






?>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>