<!doctype html>
<html lang="en">
  <head>
      
       <style>
.vertical-nav {
  min-width: 17rem;
  width: 17rem;
  height: 100vh;
  position: fixed;
  top: 10;
  left: 0;
  box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
  transition: all 0.4s;
}




/* for toggle behavior */




/*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*
*/

body {
  background: #599fd9;
  background: -webkit-linear-gradient(to right, #599fd9, #c2e59c);
  background: linear-gradient(to right, #599fd9, #c2e59c);
  min-height: 100vh;
  overflow-x: hidden;
}

.separator {
  margin: 3rem 0;
  border-bottom: 1px dashed #fff;
}

.text-uppercase {
  letter-spacing: 0.1em;
}

.text-gray {
  color: #aaa;
}

a:hover
{
background-color:#499fd9;
}
#pra{
  
  color: red;
} 



.page-content {
  width: calc(100% - 17rem);
  margin-left: 17rem;
  transition: all 0.4s;
}



  </style>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      
       <?php
$conn=mysqli_connect("localhost","id19591074_hostelnew","/RGuC#q~F4VeKOcD");
mysqli_select_db($conn,"id19591074_hostel2022");
$p1=$_REQUEST["ea"];
$p2=$_REQUEST["pd"];
$res=mysqli_query($conn,"select * from admin where email='$p1' and password='$p2'");
if(($rows=mysqli_fetch_array($res)))
{

  echo"<b>";
    echo$rows[0];
   echo"</b>";
      
      
?>
  
   <div style="background-color:#201020;" ><center><h1><font color="white" size="7" face="Baskerville Old Face">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAdmin Pannel</font></h1></center></div>

<div  class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center"><img src="img/pramod.jpeg" width="100" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0"><b>Pramod Goswami</b></h4>
        <p class="font-weight-light text-muted mb-0">Admin</p>
      </div>
    </div>
  </div>

  <p id="pra" class="text-gray font-weight-bold text-uppercase px-3 big pb-4 mb-0">Main</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a data-toggle="modal" data-target="#exampleModal" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Registered Users
            </a>
    </li>
    
    <li class="nav-item">
      <a data-toggle="modal" data-target="#exampleModal1" class="nav-link text-dark font-italic">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                All Reviews
            </a>
    </li>
   
    
  </ul>

  <p id="pra" class="text-gray font-weight-bold text-uppercase px-3 big py-4 mb-0">Pannel</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a data-toggle="modal" data-target="#exampleModal2" class="nav-link text-dark font-italic">
                <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                Gallery
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                Dashboard
            </a>
            </li>
            
            </li>
    <li class="nav-item">
      <a href="index.html" class="nav-link text-dark font-italic">
                <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                Logout
            </a>
            </li>
  </ul>
   
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



<!-- End vertical navbar -->


<!-- Page content holder -->



<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg"  role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gallery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
      <table class="table">
          
          
        <?php
$conn=mysqli_connect("localhost","id19591074_hostelnew","/RGuC#q~F4VeKOcD");
mysqli_select_db($conn,"id19591074_hostel2022");

$res=mysqli_query($conn,"select * from  cust1 ");
$count=mysqli_num_rows($res);

while(($rows=mysqli_fetch_array($res)))
     {
    ?>
     
    
        <tr>
            <td><img class="card-img-top" src='img/<?php echo$rows[7]; ?>' style="width:13rem; height:10rem;"></td>
            <td><img class="card-img-top" src='img/<?php echo$rows[8]; ?>' style="width:13rem; height:10rem;"></td>
            <td><img class="card-img-top" src='img/<?php echo$rows[9]; ?>' style="width:13rem; height:10rem;"></td>
        </tr>
        <?php
  
}
?>

</table>
    
    
      </div>
      
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">List Of Registered User's</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
          <table class="table">

      
   <tr>
<th scope="col">Email</th>

<th scope="col">Address</th>
<th scope="col">Mobile</th>
<th scope="col">City</th>

</tr>
<?php
   
   $conn=mysqli_connect("localhost","id19591074_hostelnew","/RGuC#q~F4VeKOcD");
   mysqli_select_db($conn,"id19591074_hostel2022");
   
  
        $res2=mysqli_query($conn,"select * from cust");
        while(($rows2=mysqli_fetch_array($res2)))
        {
        ?>
        <tr>
      <td><?php echo$rows2[0];?></td>
    
      <td><?php echo$rows2[2];?></td>
      <td><?php echo$rows2[3];?></td>
      <td><?php echo$rows2[4];?></td>
    
    </tr>
    <?php
      
}
?>
    
    
      
  
</table>
      </div>
      
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModal1">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">All Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
          
          
          <table class="table">

      
   <tr>
<th scope="col">Select Hostel Name</th>
<th scope="col">Email </th>
<th scope="col">Comment</th>
<th scope="col">Select Grade</th>
<th scope="col">Date Time</th>

</tr>
<?php
   
   $conn=mysqli_connect("localhost","id19591074_hostelnew","/RGuC#q~F4VeKOcD");
   mysqli_select_db($conn,"id19591074_hostel2022");
   
  
        $res2=mysqli_query($conn,"select * from review");
        while(($rows2=mysqli_fetch_array($res2)))
        {
        ?>
        <tr>
      <td><?php echo$rows2[0];?></td>
      <td><?php echo$rows2[1];?></td>
      <td><?php echo$rows2[2];?></td>
      <td><?php echo$rows2[3];?></td>
      <td><?php echo$rows2[4];?></td>
  
    </tr>
    <?php
      
}
?>
    
    
      
  
</table>
      </div>
     
    </div>
  </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  
</html>



