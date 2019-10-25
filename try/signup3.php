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

                    <form method="POST" id="signup-form" class="signup-form">

                        <h2 class="title">
                            ACADEMIC AND JOB DETAILS
                           </h2>
                           <div class="form-group">
                            <input type="text" class="form-input" name="un" id="un" placeholder="Enter your Username"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="batch" id="batch" placeholder="Enter your batch year"/>
                        </div>
                        

                        <div class="form-group">
                            <input type="text" class="form-input" name="course" id="course" placeholder="Enter the name of the course undertaken by you"/>
                        </div>
                        
                         <div class="form-group">
                            <input type="text" class="form-input" name="spec" id="spec" placeholder="Enter your special interests in your field"/>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-input" name="org" id="org" placeholder="Name of the organisation you are currently working with"/>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-input" name="des" id="des" placeholder="Your designation in that organisation"/>
                        </div>
                    <input class="rainbow rainbow-1"type="submit" name="sb" value="Submit"> 
                          
                    </form>
                    <p >
                        You have successfully been registered as an alumni !  <a href="login.php" class="loginhere-link">Login here</a>
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
                              {      $query="select * from alumni.acad where username ='$un'";
                                     $query_run=mysqli_query($con,$query);

                                               
                                                $batch= $_POST['batch'];
                                               $course=$_POST['course'];
                                               $spec= $_POST['spec'];
                                               $org= $_POST['org'];
                                               $des= $_POST['des'];

                                 if(mysqli_num_rows($query_run)>0)
                                 {
                                     $query="update alumni.acad set  username='$un',batch='$batch',course='$course',spec='$spec',org='$org',des='$des')";
                                   $query_run=mysqli_query($con,$query);
                                 }


                                else{

                                   $query="insert into alumni.acad values('$un','$batch','$course','$spec','$org','$des')";
                                   $query_run=mysqli_query($con,$query);


                                        if($query_run)
                                        {
                                                echo '<script type="text/javascript"> alert("ACADEMIC AND JOB DETAILS UPDATED") </script>';

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