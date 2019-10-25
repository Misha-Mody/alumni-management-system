<?php
session_start();
    require 'dbconfig/config.php';
    $un=$_SESSION['username'];
$q="select * from view";
$data=mysqli_query($con,$q);
while($r2 = mysqli_fetch_assoc( $data))
             {     
                         echo $r2['f'];
             }
  

?>