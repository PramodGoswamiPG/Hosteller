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
          
          .container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
          
          
          .row:after {
  content: "";
  display: table;
  clear: both;
}


label{
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
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
<script>
    function a()
    {
        d.value=new Date();
    }
</script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    
    
     <a class="navbar-brand" href="index.html"> &nbsp&nbspHome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div  style="background-color:Aqua;"class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">logout <span class="sr-only">(current)</span></a>
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
          <a class="dropdown-item" href="admin.php">Query To Admin</a>
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
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </a>
          <a class="dropdown-item" href="#">
               <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Hostel Type" id="p" onkeyup="t()" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
     
    </ul>
   

  </div>
</nav>

<div class="container">
<form action="review.php">
    <div class="row">
     <div class="form-group col-md-4">
      <label for="inputState">SELECT HOSTEL NAME</label>
      </div>
      <div class="form-group col-md-6">
      <select id="inputState"  name="h" class="form-control">
        <option selected>Choose...</option>
        
        
        <?php
$conn=mysqli_connect("localhost","id19591074_hostelnew","/RGuC#q~F4VeKOcD");
mysqli_select_db($conn,"id19591074_hostel2022");
$res=mysqli_query($conn,"select * from cust1");
while(($rows=mysqli_fetch_array($res)))
{
    ?>
    <option><?php echo$rows[0]; ?></option>
    <?php
}
?>
</select>
</div>
</div>

 



    <div class="row">
      <div class="form-group col-md-4">
      <label for="inputPassword4">EMAIL</label>
      </div>
       <div class="form-group col-md-6">
       <input type="email"  name="e"   readonly value='<?php session_start(); echo$_SESSION["email"]; ?>' class="form-control" id="inputPassword4" placeholder="Email">
    </div>
  </div>
  
  <div class="row">
  <div class="form-group col-md-4">
    <label for="inputAddress">COMMENT</label>
    </div>
      <div class="form-group col-md-6">
   <textarea name="c" class="form-control" required rows="5" id="comment"></textarea>
   </div>
   </div>
   <div class="row">
        <div class="form-group col-md-4">
    <label for="inputState">SELECT GRADE </label>
    </div>
     <div class="form-group col-md-6">
      <select id="inputState"  name="g" class="form-control">
        <option selected>Choose...</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option><option>5</option>
      </select>
  </div>
  </div>
 
  
  
   <div  class="row">
    <div class="form-group col-md-4">
      <label for="inputCity">DATE TIME</label>
      </div>
      <div class="form-group col-md-6"> 
      <input type="text" id="d" readonly onmouseover="a()" class="form-control"  name="d" id="inputCity">
    </div>
    </div>
    
  <div class="row">
  &nbsp&nbsp&nbsp&nbsp<input type="submit"  name="x" class="btn btn-primary">
  </div>
</form>
</div>
<?php
if(isset($_REQUEST["x"]))
{
$conn=mysqli_connect("localhost","id19591074_hostelnew","/RGuC#q~F4VeKOcD");
mysqli_select_db($conn,"id19591074_hostel2022");
$p1=$_REQUEST["h"];
$p2=$_REQUEST["e"];
$p3=$_REQUEST["c"];
$p4=$_REQUEST["g"];
$p5=$_REQUEST["d"];
mysqli_query($conn,"insert into review values('$p1','$p2','$p3','$p4','$p5')");
?>
<script>alert("Review Done!!!")</script>
<?php

    
}
?>
