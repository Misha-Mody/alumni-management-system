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

                    <form method="POST" id="signup-form" class="signup-form" action="signup2.php">

                        <h2 class="title">
                            CONTACT DETAILS 
                           </h2>
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="un" id="un" placeholder="Enter your Username"/>
                        </div>
                        

                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        
                         <div class="form-group">
                            <input type="text" class="form-input" name="ph" id="ph" placeholder="Your phone number"/>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-input" name="li" id="adr" placeholder="Your LinkedIn profile link"/>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-input" name="git" id="git" placeholder="Your GITHUB profile link"/>
                        </div>
                    <input class="rainbow rainbow-1"type="submit" name="sb" value="Submit"> 
                      <a href="signup3.php"><input type="button" id="s3" class="rainbow rainbow-1" value="NEXT"></a>
                          
                    </form>
                    <p >
                        You are almost done.......  
                    </p>
                </div>
            </div>
        </section>

    </div>
    <?php

if(isset($_POST['sb']))
{       $un= $_POST['un'];
        $query="select * from alumni.info where username ='$un'";
        $query_run=mysqli_query($con,$query);
          
          if(mysqli_num_rows($query_run)>0)
                              {      $query="select * from alumni.contact where username ='$un'";
                                     $query_run=mysqli_query($con,$query);

               $email= $_POST['email'];
               $ph=$_POST['ph'];
               $li= $_POST['li'];
               $git= $_POST['git'];

                                 if(mysqli_num_rows($query_run)>0)
                                 {
                                     $query="update alumni.contact set  username='$un',email='$email',ph='$ph',li='$li',git='$git')";
                                   $query_run=mysqli_query($con,$query);
                                 }


                                else{

                                   $query="insert into alumni.contact values('$un','$email','$ph','$li','$git')";
                                   $query_run=mysqli_query($con,$query);


                                        if($query_run)
                                        {
                                                echo '<script type="text/javascript"> alert("CONTACT DETAILS UPDATED") </script>';

                                        }
                                        else
                                            {
                                                    echo '<script type="text/javascript"> alert("ERROR HAS OCCURED!  ") </script>';
                                            }
          }
      }
          else
          {
             echo '<script type="text/javascript"> alert("USERNAME NOT FOUND") </script>';
          }
    
   
   
     }       
          
        
    
    







?>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>