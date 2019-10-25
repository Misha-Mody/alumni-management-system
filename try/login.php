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
                            LOGIN
                           </h2>
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="un" id="un" placeholder="Enter your Username"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="p" id="p" placeholder="Enter your Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                           <input class="btn-primary"  type="submit" name="login" value="Login"> 
                    </form>
                  <p>
                      Don't have an account yet ? <a href="signup1.php" class="loginhere-link">Signup here</a>
                    </p> 
                </div>
            </div>
        </section>

    </div>
    <?php
if(isset($_POST['login']))
{   $username=$_POST['un'];
    $password=$_POST['p'];
  $query="select * from alumni.info WHERE username='$username' AND pswd='$password' ";
  $query_run=mysqli_query($con,$query);
  if(mysqli_num_rows($query_run)>0)
  {
           
            $_SESSION['username'] = $username;
            echo "<script>location.href='afterlogin.php'         </script>";
          
  }
  else
  {
              echo '<script type="text/javascript"> alert("INVALID CREDENTIALS") </script>';
  }
}




?>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

