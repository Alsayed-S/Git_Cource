<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
<input type="file" name="image" id="">
<input type="submit" value="upload">
    </form>
</body>
</html>
<?php
require_once "./uploadimage.php";
$res=uploadMyFile($_FILES['image'],['jpg','png'],'uploads/',5,$_GET['lang']);
echo $res;

?>