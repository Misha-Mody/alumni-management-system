<?php
session_start();
    require 'dbconfig/config.php';
    ?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>view</title>



  <style>

body {font-family: Arial, Helvetica, sans-serif;}

.myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

.myImg:hover {opacity: 0.7;}

/* The Modal (background) */
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

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
.caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
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

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
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
</head>
<body>




<div class="navbar">

  <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a> 
  <a href="#" class="active"><i class="fa fa-fw fa-search"></i> Search</a> 
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
  <a href="login.php"><i class="fa fa-fw fa-user"></i> Logout</a>
  <a href="home.php"><i class="fa fa-fw fa-home"></i> HOME</a>
</div>


    


   <?php

          $un= $_SESSION['username'];
          $query="select * from alumni.contact";
          $data=mysqli_query($con,$query);
          $total=mysqli_num_rows($data);

   

          ?>




<table  class="table table-striped" style="margin-top: 20px">
  

<?php
      $t=0;
      $a = array();$n=0;
       while( $row = mysqli_fetch_assoc( $data ) ){
        $a[] = $row;
        $t++;
         } 
             ?>




<table>

  <?php   while($n < $t)  {  ?>

<tr>
   <?php  $i=0;
    while($i < 3 && $n < $t ) {  
    $v=$a[$n]['username'];
    $ph=$a[$n]['ph'];
    $email=$a[$n]['email'];
    $git=$a[$n]['git'];
     $ph=$a[$n]['li'];
       ?>
<td>

<img class="myImg" id="myImg"  src="profilepic.jpg" alt="<?php echo $ph;  ?>" style="width:100%;max-width:300px">

<!-- The Modal -->
<div class="modal" id="myModal">
  <span class="close">&times;</span>

  <div class="caption" id="caption">
     
<p class="ph"> </p>
  
  </div>
</div>
</td>

    <?php    $n++; $i++;}     ?>

  </tr>


 <?php   }    ?>

</table>











<script>
// Get the modal
var modal = document.getElementById("myModal");
var images=document.getElementsByClassName("myImg");
// Get the image and insert it inside the modal - use its "alt" text as a caption
var captionText = document.getElementById("caption");


for (var i = 0; i < images.length; i++) {
  var img = images[i];
  // and attach our click listener for this image.
  img.onclick = function(evt) {
    
    modal.style.display = "block";
 
  }
}


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
captionText.innerHTML = this.alt;

}
</script>



</body>
</html>