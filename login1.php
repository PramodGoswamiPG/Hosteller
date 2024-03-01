<?php
session_start();
$_SESSION["e"]=$_REQUEST["e"];
$_SESSION["p"]=$_REQUEST["p"];
header("location:login.php");
?>