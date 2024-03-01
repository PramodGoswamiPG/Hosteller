<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<style>
      
    a:hover{
      background-color: rgb(11, 221, 211);
    }
    body
          {
              
           
              
  background: -webkit-linear-gradient(to right, #599fd9, #c2e59c);
  background: linear-gradient(to right, #599fd9, #c2e59c);
  min-height: 100vh;
  overflow-x: hidden;
          }
  </style>
    
  <body>
    <h1><marquee direction="right" behavior="alternate" scrollamount="20"><font color:rgb(194, 10, 148); size="7">Hosteller</font></marquee></h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <?php
    session_start();
error_reporting(0);
$conn=mysqli_connect("localhost","id19591074_hostelnew","/RGuC#q~F4VeKOcD");
mysqli_select_db($conn,"id19591074_hostel2022");
$p1=$_SESSION["e"];
$p2=$_SESSION["p"];
$res=mysqli_query($conn,"select * from  cust where email='$p1' and password='$p2'");
if(($rows=mysqli_fetch_array($res)))
{
    echo"<b>";
    echo$rows[0];
    $_SESSION["email"]=$rows[0];
    echo"</b>";
    
  ?>
    
    
     <a class="navbar-brand" href="index.html"> &nbsp&nbspHome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div  style="background-color:Aqua;"class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">logout <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModalp">See your Profile <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link"  data-toggle="modal" data-target="#exampleModalp1">Edit Profile <span class="sr-only">(current)</span></a>
      </li>
     
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Option
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal4">Change Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="review.php">Review</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          filter
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">
               <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Hostel Location" id="s" onkeyup="a()" aria-label="Search">
     
    </form>
    </a>
          <a class="dropdown-item" href="#">
               <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Hostel Type" id="p" onkeyup="t()" aria-label="Search">
      
    </form>
          </a>
         
      </li>
     
    </ul>
   

  </div>
</nav>
<script>
function a() 
{
  var obj = new XMLHttpRequest();
  obj.onreadystatechange = function()
 {
    
     document.getElementById("d").innerHTML = this.responseText;
   
  };
obj.open("GET", "search.php?id="+s.value, true);
obj.send();
}

function t() 
{
  var oj = new XMLHttpRequest();
  oj.onreadystatechange = function()
 {
    
     document.getElementById("d").innerHTML = this.responseText;
   
  };
oj.open("GET", "searchtype.php?id="+p.value, true);
oj.send();
}
</script>
<div  id="d">
  <?php
$conn=mysqli_connect("localhost","id19591074_hostelnew","/RGuC#q~F4VeKOcD");
mysqli_select_db($conn,"id19591074_hostel2022");
$p1=$_SESSION["e"];
$p2=$_SESSION["p"];
$res=mysqli_query($conn,"select * from  cust1 ");
$count=mysqli_num_rows($res);

while(($rows=mysqli_fetch_array($res)))
{
    
    
    ?>
    
    
    
    
    <div class="card" style="width: 18rem; float:left; margin-right:40px; margin-left:50px; margin-bottom:50px; margin-top:20px;">
  <img class="card-img-top" src='img/<?php echo$rows[8]; ?>' alt="Card image cap" style="height:10rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo$rows[0];?></h5>
    <p class="card-text">Location:<?php echo$rows[3];?></p
    <p class="card-text">Hostel Type:<?php echo$rows[6];?></p>
     <a href="details.php?id=<?php echo$rows[1]; ?>" class="btn btn-primary">Go For Details</a>
  </div>
</div>

    <?php
    
    

}
?>
</div>


  <?php


    
}
else
{
  ?>
  <script>
    alert("Your Password is incorrect");
    window.location.href='https://sb2022.000webhostapp.com/Hosteller/index.html';
    </script>
<?php
}
?>

<!-- Modal -->
<div class="modal fade" id="exampleModalp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><font color="blue"><b>See Your Profile</b></font></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        $res2=mysqli_query($conn,"select * from cust where email='$p1'");
        if(($rows2=mysqli_fetch_array($res2)))
        {
        ?>
        <form style="background-color:#FCF5D8;color:#AD8C08;border:3px solid #AD8C08;"> 
               
        <h3><?php echo$rows2[0];?></h3>
        <hr>
        <p>Email:&nbsp<?php echo$rows2[0];?></p>
         <p>Address:&nbsp<?php echo$rows2[2];?></p> 
         <p>Mobile No:&nbsp<?php echo$rows2[3];?></p>
         <p>City:&nbsp<?php echo$rows2[4];?></p>
         <?php
        }
        ?>
        </form>
        
      
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalp1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><font color="blue"><b>Edit Your Profile</b></font></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
       <?php
       $res2=mysqli_query($conn,"select * from cust where email='$p1'");
       if(($rows2=mysqli_fetch_array($res2)))
       {
        
           ?>
           <hr>
           <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="e" id="inputEmail4" value='<?php echo$rows2[0];?>' >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="text" class="form-control" id="inputPassword4" name="p" value='<?php echo$rows2[1];?>'>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="a" id="inputAddress" value='<?php echo$rows2[2];?>'>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="c" id="inputCity" value='<?php echo$rows2[4];?>'>
    </div>
   
    <div class="form-group col-md-6">
      <label for="inputZip">Mobile No</label>
      <input type="text" class="form-control" name="m" id="inputZip" value='<?php echo$rows2[3];?>'>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" required id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <input type="submit" value="EDIT YOUR PROFILE" name="update">
</form>
           <?php
       }
       ?>
         
       
      </div>
    </div>
  </div>
</div>
<?php
if(isset($_REQUEST["update"]))
{
    $pe=$_REQUEST["e"];
    $pp=$_REQUEST["p"];
    $pa=$_REQUEST["a"];
    $pm=$_REQUEST["m"];
    $pc=$_REQUEST["c"];
  
    mysqli_query($conn,"update cust set email='$pe',password='$pp',address='$pa',moble='$pm',name='$pc' where email='$p1'");
    ?>
    <script> 
    alert("Your Profile is updated!!!");
    </script>
    <?php
}
?>


<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
$res2=mysqli_query($conn,"select * from cust where email='$p1'");
if(($rows2=mysqli_fetch_array($res2)))
{
?>


<hr>
<form action="changepass.php">
<p>Old Password:<input type="text" class="form-control" name="op" value='<?php echo$rows2[1];?>'></p>
<p>New Password:<input type="text" class="form-control" name="np"></p>
<p><input type="submit"  class="btn btn-primary" value="CHANGE PASSWORD" name="change" ></p>
</form>
<?php
}
?>
      </div>
     
    </div>
  </div>
</div>










 