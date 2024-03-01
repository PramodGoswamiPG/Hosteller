<?php
$conn=mysqli_connect("localhost","id19591074_hostelnew","/RGuC#q~F4VeKOcD");
mysqli_select_db($conn,"id19591074_hostel2022");
$p1=$_REQUEST["ea"];
$p2=$_REQUEST["pd"];

mysqli_query($conn,"insert into admin values('$p1','$p2')");
echo"You are registered!!!";
?>