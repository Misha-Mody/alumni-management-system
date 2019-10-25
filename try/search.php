<?php
session_start();
    require 'dbconfig/config.php';

  

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

.container {
  position: relative;
  width: 50%;
  margin-bottom: 0px;
}

.image {
  opacity: 1;
  display: block;
  width: 300px;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden; 
  border-style: solid;
  border-width: 5px 5px 5px 5px;
  border-color:#555 ;
   border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;

}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: relative;
 left: 150px;
 bottom:120px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
 }

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4ADDBB ;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}











.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}




#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: black;
  padding: 10px 0;
  height: 150px;

}




/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}



.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}






body {font-family: Arial, Helvetica, sans-serif;}
table {
  border-collapse: collapse;
  width: 100%;
  margin-top: 150px;
}
th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
.navbar {
  width: 100%;
  background-color: #555;

  overflow: auto;
  margin-top:0px;
  margin-bottom: 30px;
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

  <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a> 
  <a href="#" class="active"><i class="fa fa-fw fa-search"></i> Search</a> 
 
  <a href="login.php"><i class="fa fa-fw fa-user"></i> Logout</a>
  <a href="afterlogin.php"><i class="fa fa-fw fa-home"></i> HOME</a>
</div>

<form method="POST" style="background-color: grey; height: 50px;">


  <input type="text" name="sea" style="border-color: blue ;height:50px;">
  <input type="submit" class="btn btn-primary" name="search" value="find">
  <button  style=" margin-left: 0px;"type="button" class="btn btn-primary" id="myImg">view</button>

<div style="float: right;">
    

 

</div>




</form>

<?php 


if(isset($_POST['search']))
{
  $term=$_POST['sea'];
$query="select * from alumni.contact WHERE username='$term'";
 $query_run=mysqli_query($con,$query);
  if(mysqli_num_rows($query_run)>0)
  {       
       while( $row = mysqli_fetch_assoc( $query_run ) ){

          $email1 = $row['email'];
          $ph1=$row['ph'];
     
          $git1=$row['git'];
          $li1=$row['li'];
      

       }
  }

$quer="select * from alumni.acad WHERE username='$term'";
 $que=mysqli_query($con,$quer);
  if(mysqli_num_rows($que)>0)
  {       
       while( $row = mysqli_fetch_assoc( $que ) ){
          $b1=$row['batch'];
            $c1=$row['course'];
           $s1=$row['spec'];
          $o1=$row['org'];
           $d1=$row['des'];
      

       }
  }


   

}


  ?>

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  
  <div id="caption">
    <img src="h.jpg" width="100%" height="120%">
  </br><div style="background-color: white;">
  <table   style=" margin-top: 60px; border-bottom: 1px solid black;">

   <tr>
     <td style="color: blue;  font-weight: bold;  border-bottom :1px solid black;padding: 15px; ">EMAIL</td>
     <td style=" border-bottom :1px solid black;"><?php echo $email1; ?></td>
      <td style="color: blue; font-weight: bold; border-bottom :1px solid black;padding: 15px; ">PHONE</td>
     <td style=" border-bottom :1px solid black;"><?php echo $ph1; ?></td>
   </tr>
   

     <tr>
     <td style="color: blue; font-weight: bold; border-bottom :1px solid black;padding: 15px; ">LinkedIn</td>
     <td style=" border-bottom :1px solid black;"><?php echo $li1; ?></td>
      <td style="color: blue; font-weight: bold; border-bottom :1px solid black;padding: 15px; ">GIT</td>
     <td style=" border-bottom :1px solid black;"><?php echo $git1; ?></td>
   </tr>


     <tr>
     <td style="color: blue; font-weight: bold; border-bottom :1px solid black;padding: 15px; ">BATCH</td>
     <td style=" border-bottom :1px solid black;"><?php echo $b1; ?></td>
      <td style="color: blue; font-weight: bold; border-bottom :1px solid black;padding: 15px; ">COURSE</td>
     <td style=" border-bottom :1px solid black;"><?php echo $c1; ?></td>
   </tr>

     <tr>
     <td style="color: blue; font-weight: bold; border-bottom :1px solid black;padding: 15px; ">ORGANISATION</td>
     <td style=" border-bottom :1px solid black;"><?php echo $o1; ?></td>
      <td style="color: blue; font-weight: bold;  border-bottom :1px solid black;padding: 15px;">DESIGNATION</td>
     <td style=" border-bottom :1px solid black;"><?php echo $d1; ?></td>
   </tr>


  </table>
</div>
  </div>
</div>


  <?php

          
          $query="select * from alumni.contact";
          $data=mysqli_query($con,$query);
          $total=mysqli_num_rows($data);

      

          
          $query2="select * from alumni.acad";
          $data2=mysqli_query($con,$query2);
          $total2=mysqli_num_rows($data2);


 $ac= array();
     
       $t2=0;



  while( $row2= mysqli_fetch_assoc( $data2 ) )
    
         {
            // add each row returned into an array
              $ac[] = $row2;
              $t2++;
         }




          ?>



<table  class="table table-striped" style="margin-top: 20px">
  

<?php
      $t=0;
      $a = array();
     
        while( $row = mysqli_fetch_assoc( $data ) ){
      
    

  // add each row returned into an array
  $a[] = $row;

  $t++;
  $n=0;
             }



        ?>
                        
<table>
  <?php   while($n < $t)  {


                                    ?>



  <tr>
   <?php  $i=0;

    while($i < 3 && $n < $t ) {  
    $v=$a[$n]['username'];
     $ph=$a[$n]['ph'];
     $email=$a[$n]['email'];
      $git=$a[$n]['git'];
       $li=$a[$n]['li'];
        $b=$ac[$n]['batch'];
            $c=$ac[$n]['course'];
           $s=$ac[$n]['spec'];
          $o=$ac[$n]['org'];
           $d=$ac[$n]['des'];
   $array = array();
   $array[]=$v;
   $array[]=$ph;
   $array[]=$email;
   $array[]=$git;
   $array[]=$li;
   $array[]=$b;
     $array[]=$c;
   $array[]=$s;
   $array[]=$o;
   $array[]=$d;
   $val=implode(",",$array);


       ?>


      <td>
        <div class="container">

  <img src="d.png" alt="Avatar" class="image" id="myImg">
  <div class="middle">
 <form method="post">  

<input type="submit" class="text" value="connect" name="btn"></div>
<b><p style="position: relative; bottom: 50px;
 font-family: "Times New Roman", Times, serif;
">NAME: <?php echo $v;  ?></p></b>

<input style="
 width:300px;
 position: relative;
 bottom: 70px;
 border-color: white;
  
  color: white;

  " type="text" name="ip"
value="
  <?php 

   echo $val ;  

    $n++; $i++;  
 

        


 ?>
" >



</form>
  </div>





    </div>
  </div>
</div>
    
   


</div>
           
      </td>

    <?php         }     ?>

  </tr>


 <?php 



   }    ?>

</table>



























<?php


if(isset($_POST['btn']))
{   $use=$_POST['ip'];
  
 $_SESSION['acad']=$use;
            
          
echo "<script>location.href='view.php'         </script>";

}




if(isset($_GET['myCountry']))
{
    $usee=$_REQUEST['s'];
    echo($usee);
  

}




  ?>


 <?php     
$f=0;

$user=array();

  
  
while($f < $t){

 $u=$a[$f]['username'];
 array_push($user,$u);
 $f++;
}

?>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
img=document.getElementById("myImg");

img.onclick = function(){
  modal.style.display = "block";
 
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>



</body>
</html> 
