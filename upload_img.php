
<form method="post" action="upload_img.php" enctype="multipart/form-data">
    <input type="file" name="p">
     <input type="submit" name="x">
    
</form>
<?php
if(isset($_REQUEST["x"]))
{
    $fn=$_FILES["p"]["name"];
    $fs="img/".$fn;
    $fl=$_FILES["p"]["tmp_name"];
    move_uploaded_file($fl,$fs);
    
}
?>