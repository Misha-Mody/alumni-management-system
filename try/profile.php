<?php
session_start();

  
$dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'alumni';
   $con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
  $un = $_SESSION['username'];
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
</style>
<body>

<div class="navbar">
<a href="profile.php" class="active"<i class="fa fa-fw fa-user"></i> Profile</a> 
  <a href="search.php" ><i class="fa fa-fw fa-search"></i> Search</a> 
 
  <a href="login.php"><i class="fa fa-fw fa-user"></i> Logout</a>
  <a href="afterlogin.php"><i class="fa fa-fw fa-home"></i> HOME</a>
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
      <h2>Hey  <?php   echo $_SESSION['username'];  ?></h2>
      <h5>Photo of me:</h5>
      <div >
        <img src="profilepic.jpg" class = "img-responsive">
      </div>
      <pre>
        

      </pre>
      <?php 
                   
               $q="select * from p where too like '%".$un."%'";
               $run=mysqli_query($con,$q);
              $num1= mysqli_num_rows($run); 

     
               $q3="select * from view where t like '%".$un."%'";
               $run3=mysqli_query($con,$q3);
              $num2= mysqli_num_rows($run3); 

              ?>
       <h3>Notifications</h3>
       <pre>
       </pre> 
       <form method="POST"> 
        <input type="submit" class="btn btn-danger"name="pi" value="PINGS <?php  echo $num1 ?>">
        <input type="submit" class="btn btn-success" name="u" value="VIEWS <?php  echo $num1 ?>">
       </form>

        <pre>
        </pre>
<div style="color: red;">

<?php 

if(isset($_POST['pi']))
{
         
               $q="select * from p where too like '%".$un."%'";
               $run=mysqli_query($con,$q);

               if(mysqli_num_rows($run)>0){
               while( $row = mysqli_fetch_assoc( $run ) ){ ?>
                            <table>

                <tr>
                  <td><?php echo $row['frm'];  ?></td>
                </tr>

</table>
                
                
  <?php               
                      
}
       }    
       
}

?></div>
<div style="color: green;">
<?php 
if(isset($_POST['u']))
{
         
               $q3="select * from view where t like '%".$un."%'";
               $run3=mysqli_query($con,$q3);
               if(mysqli_num_rows($run3)>0){

               while( $row3 = mysqli_fetch_assoc( $run3) ){  ?>
              <table>

                <tr>
                  <td><?php echo $row3['f'] ?></td>
                </tr>

</table>
<?php 
}
       }    
       
}



?>

</div>
</br>
      <h3>Navigate</h3>
    </br>
      
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#s1">Personal Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#s2">Contact Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#s3">Academics</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="signup1.php">Update Details</a>
        </li>
      </ul>
         <pre>
         </pre>




      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2 id="s1" class="my">PERSONAL DETAILS</h2>
    </br>
       <?php

          
          $query="select * from alumni.info where username='$un'";
          $data=mysqli_query($con,$query);
          $total=mysqli_num_rows($data);
            while($result = mysqli_fetch_assoc($data))
    {  

         $gname= $result['name'];
          $g= $result['gender'];
           $c= $result['city'];
         
  }


       

          ?>
 <table class="table table-hover">
    <tr>
      <td>
        <h3>
        NAME</h3>
      </td>
      <td>
        <?php  

        echo '<span style=" font-size: 20px;"> ' . $gname .  '</span>';
        ?>
      </td>

    </tr>

      <tr>
      <td>
        <h3>
        GENDER</h3>
      </td>
      <td>
        <?php  

        echo '<span style=" font-size: 20px;"> ' . $g .  '</span>';
        ?>
      </td>

    </tr>


    <tr>
      <td>
        <h3>
        CURRENT CITY</h3>
      </td>
      <td>
        <?php  

        echo '<span style=" font-size: 20px;"> ' . $c .  '</span>';
        ?>
      </td>

    </tr>
 </table>

     
      <br>
     
<h2 id="s2" class="my">CONTACT DETAILS</h2>
    </br>
       <?php

          $un= $_SESSION['username'];
          $query="select * from alumni.contact where username='$un'";
          $data=mysqli_query($con,$query);
          $total=mysqli_num_rows($data);
            while($result = mysqli_fetch_assoc($data))
    {  

         $m= $result['email'];
          $p= $result['ph'];
           $l= $result['li'];
         $g= $result['git'];
         
  }

          ?>
 <table class="table table-hover">
    <tr>
      <td>
        <h3>
        EMAIL</h3>
      </td>
      <td>
        <?php  

        echo '<span style=" font-size: 20px;"> ' . $m .  '</span>';
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

        echo '<span style=" font-size: 20px;"> ' . $p.  '</span>';
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

        echo '<span style=" font-size: 20px;"> ' . $l .  '</span>';
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

        echo '<span style=" font-size: 20px;"> ' . $g .  '</span>';
        ?>
      </td>

    </tr>
 </table>

     
      <br>


<h2 id="s3" class="my">ACADEMIC AND JOB DETAILS</h2>
    </br>
       <?php

          $un= $_SESSION['username'];
          $query="select * from alumni.acad where username='$un'";
          $data=mysqli_query($con,$query);
          $total=mysqli_num_rows($data);
            while($result = mysqli_fetch_assoc($data))
    {  

         $b= $result['batch'];
          $co= $result['course'];
           $spec= $result['spec'];
         $org= $result['org'];
         $des= $result['des'];
  }

          ?>
 <table class="table table-hover">
    <tr>
      <td>
        <h3>
        BATCH</h3>
      </td>
      <td>
        <?php  

        echo '<span style=" font-size: 20px;"> ' . $b.  '</span>';
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

        echo '<span style=" font-size: 20px;"> ' . $co.  '</span>';
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

        echo '<span style=" font-size: 20px;"> ' . $spec .  '</span>';
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

        echo '<span style=" font-size: 20px;"> ' . $org .  '</span>';
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

        echo '<span style=" font-size: 20px;"> ' . $des .  '</span>';
        ?>
      </td>

    </tr>
 </table>







  

    

















    </div>
  </div>
</div>


</body>
</html> 
