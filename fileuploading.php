<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="" method="Post" enctype="multipart/form-data">
<input type="file" name="myfile"><br>
<input type="submit" name="submit" value="Upload">



</form>
</body>
</html>

<?php
//echo $_FILES['myfile'];

//print_r( $_FILES['myfile'] );

$filename= $_FILES['myfile']['name'] ;
$tempname= $_FILES['myfile']['tmp_name'] ;
$target = "FileHandling/Namrata/Ramon/" . $filename;

move_uploaded_file($tempname,$target);





?>