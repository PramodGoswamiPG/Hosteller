<?php
$conn=mysqli_connect("localhost","id19591074_hostelnew","/RGuC#q~F4VeKOcD");
mysqli_select_db($conn,"id19591074_hostel2022");
$pn=$_REQUEST["op"];
$pp=$_REQUEST["np"];
mysqli_query($conn,"update  cust set password='$pp',password='$pp' where password='$pn'");
?>
    <script>
    alert("Your Password is updated");
    window.location.href='https://sb2022.000webhostapp.com/Hosteller/index.html';
    </script>
<?php






?>
