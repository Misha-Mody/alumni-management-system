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













.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff;
  border-bottom: 1px solid #d4d4d4;
}
.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9;
}
.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important;
  color: #ffffff;
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
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
  <a href="login.php"><i class="fa fa-fw fa-user"></i> Logout</a>
  <a href="home1.php"><i class="fa fa-fw fa-home"></i> HOME</a>
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

  <img src="profilepic.jpg" alt="Avatar" class="image" id="myImg">
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

<script type="text/javascript">
 var js =<?php echo json_encode($user );?>;
   
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              var key=this.getElementsByTagName("input")[0].value;

              
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}











autocomplete(document.getElementById("myInput"),js);








</script>


</body>
</html> 
