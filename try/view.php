<?php
session_start();
    require 'dbconfig/config.php';

   
         $str=$_SESSION['acad'];
         $a[]=explode(",",$str);

        $v1=$_SESSION['username'];
$v2=$a[0][0];
          $query="insert into alumni.view values('$v1','$v2')";
          $query_run=mysqli_query($con,$query);
     
        

?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
.my{
  font-family: Georgia, serif;
font-size: 36px;
letter-spacing: 2px;
word-spacing: 2px;
color:#00a8ff;
font-weight: normal;
text-decoration: none;
font-style: normal;
font-variant: normal;
text-transform: none;


}
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
  margin-top:0px;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
input:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}








</style>
<body>

<div class="navbar">
<a href="profile.php" class="active"<i class="fa fa-fw fa-user"></i> Profile</a> 
  <a href="search.php" ><i class="fa fa-fw fa-search"></i> Search</a> 

  <a href="login.php"><i class="fa fa-fw fa-user"></i> Logout</a>
  <a href="home.php"><i class="fa fa-fw fa-home"></i> HOME</a>
</div>

 
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4" style="

 position: -webkit-sticky;
  position: sticky;
  top: 0;
  
  padding: 50px;
  font-size: 20px;
    ">
      <h2>About <?php  echo $a[0][0];  ?></h2>
      <h5>THEIR PICTURE:</h5>
      <div >
        <img src="profilepic.jpg" class = "img-responsive">
      </div>
      <pre>
     <form method="POST">
       <h1><input type="submit" name="ping"style="width: 300px" value="PING ME" class="btn btn-success"></h1></form>
      </pre>
      <h3>Navigate</h3>
      
      <ul class="nav nav-pills flex-column">
        
        <li class="nav-item">
          <a class="nav-link" href="#s2">Contact Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#s3">Academics</a>
        </li>
       
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
     
    
<?php 

   
   if(isset($_POST['ping']))
   {
           $query1="insert into alumni.p values('$v1','$v2')";
            $query_run1=mysqli_query($con,$query1);
          
   }





  ?>

          

     
<h2 id="s2" class="my">CONTACT ME VIA </h2>
    </br>
      
 <table class="table table-hover">
    <tr>
      <td>
        <h3>
        EMAIL</h3>
      </td>
      <td>
        <?php  
      
        echo '<span style=" font-size: 20px;"> ' . $a[0][2] .  '</span>';
        ?>
      </td>

    </tr>

      <tr>
      <td>
        <h3>
       PHONE</h3>
      </td>
      <td>
        <?php  

        echo '<span style=" font-size: 20px;"> ' .$a[0][1] .  '</span>';
        ?>
      </td>

    </tr>


    <tr>
      <td>
        <h3>
        LinkedIn</h3>
      </td>
      <td>
        <?php  

        echo '<span style=" font-size: 20px;"> ' . $a[0][3] .  '</span>';
        ?>
      </td>

    </tr>
     <tr>
      <td>
        <h3>
        GITHUB</h3>
      </td>
      <td>
        <?php  

        echo '<span style=" font-size: 20px;"> ' . $a[0][4]  .  '</span>';
        ?>
      </td>

    </tr>
 </table>

     
      <br>


<h2 id="s3" class="my"> MY ACADEMICS AND CURRENT JOB DETAILS</h2>
    </br>
      
         
 <table class="table table-hover">
    <tr>
      <td>
        <h3>
        BATCH</h3>
      </td>
      <td>
        <?php  

        echo '<span style=" font-size: 20px;"> ' . $a[0][5] .  '</span>';
        ?>
      </td>

    </tr>

      <tr>
      <td>
        <h3>
        COURSE</h3>
      </td>
      <td>
        <?php  

        echo '<span style=" font-size: 20px;"> ' . $a[0][6] .  '</span>';
        ?>
      </td>

    </tr>


    <tr>
      <td>
        <h3>
        SPECIAL INTERESTS</h3>
      </td>
      <td>
        <?php  

        echo '<span style=" font-size: 20px;"> ' . $a[0][7]  .  '</span>';
        ?>
      </td>

    </tr>
     <tr>
      <td>
        <h3>
       CURRENT ORGANIZATION</h3>
      </td>
      <td>
        <?php  

        echo '<span style=" font-size: 20px;"> ' . $a[0][8] .  '</span>';
        ?>
      </td>

    </tr>
     <tr>
      <td>
        <h3>
       DESIGNATION AT ORGANIZATION</h3>
      </td>
      <td>
        <?php  

        echo '<span style=" font-size: 20px;"> ' .$a[0][9]   .  '</span>';
        ?>
      </td>

    </tr>
 </table>



    

















    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">

</div>






</body>
</html> 
