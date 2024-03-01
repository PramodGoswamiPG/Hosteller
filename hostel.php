<?php
$conn=mysqli_connect("localhost","id19591074_hostelnew","/RGuC#q~F4VeKOcD");
mysqli_select_db($conn,"id19591074_hostel2022");
$p1=$_REQUEST["h"];
$p2=$_REQUEST["mn"];
$p3=$_REQUEST["ad"];
$p4=$_REQUEST["l"];
$p5=$_REQUEST["f"];
$p6=$_REQUEST["hr"];
$p7=$_REQUEST["ht"];
$p8=$_FILES["p1"]["name"];
$p9=$_FILES["p2"]["name"];
$p10=$_FILES["p3"]["name"];


    $fn1=$_FILES["p1"]["name"];
    $fs1="img/".$fn1;
    $fl1=$_FILES["p1"]["tmp_name"];
    move_uploaded_file($fl1,$fs1);
    
    
    $fn2=$_FILES["p2"]["name"];
    $fs2="img/".$fn2;
    $fl2=$_FILES["p2"]["tmp_name"];
    move_uploaded_file($fl2,$fs2);
    
    
    $fn3=$_FILES["p3"]["name"];
    $fs3="img/".$fn3;
    $fl3=$_FILES["p3"]["tmp_name"];
    move_uploaded_file($fl3,$fs3);
    
mysqli_query($conn,"insert into cust1 values('$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10')");
?>
   <script>
    alert("Your hostel is succesesfully posted");
    window.location.href='https://sb2022.000webhostapp.com/Hosteller/index.html';
    </script>
<?php
?>