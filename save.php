<?php
$conn=mysqli_connect("localhost","id19591074_hostelnew","/RGuC#q~F4VeKOcD");
mysqli_select_db($conn,"id19591074_hostel2022");
$p1=$_REQUEST["e"];
$p2=$_REQUEST["p"];
$p3=$_REQUEST["a"];
$p4=$_REQUEST["m"];
$p5=$_REQUEST["c"];
$p6=$_REQUEST["g"];
$str=mail($p1,"You are registered successfully @ Hosteller web app 2022","kunal.g15@gmail.com");
mysqli_query($conn,"insert into cust values('$p1','$p2','$p3','$p4','$p5','$p6')");

?>
   <script>
    alert("You are register");
    window.location.href='https://sb2022.000webhostapp.com/Hosteller/index.html';
    </script>
<?php

?>