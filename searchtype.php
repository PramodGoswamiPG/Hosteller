<?php
$conn=mysqli_connect("localhost","id19591074_hostelnew","/RGuC#q~F4VeKOcD");
mysqli_select_db($conn,"id19591074_hostel2022");
$p1=$_REQUEST["id"];
$resultAll=mysqli_query($conn,"select * from  cust1 where type='$p1'");
while(($rows=mysqli_fetch_array($resultAll)))
{
    
    ?>
    
    
    
    
    <div class="card" style="width: 18rem; float:left; margin-right:40px; margin-left:50px; margin-bottom:50px; margin-top:20px;">
  <img class="card-img-top" src='img/<?php echo$rows[8]; ?>' alt="Card image cap" style="height:10rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo$rows[0];?></h5>
    
    <p class="card-text">Hostel Type:<?php echo$rows[6];?></p>
      <a href="details.php?id=<?php echo$rows[1]; ?>" class="btn btn-primary">Go For Details</a>
  </div>
</div>

   
    <?php
    
    
    
}
?>
