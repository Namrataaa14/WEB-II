<?php
    if(isset($_POST["submit"])){

    

    $name = $_POST["name"];



if (empty($name))   {
    echo"name is required";
    
}
else {
    echo"hello," .htmlspecialchars($name);
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    Name:<input type="text" name="name"><br><br>

    Email:<input type="email" name="email"><br><br>
    Phone:<input type="number" name="phone"><br><br>
    <button id="sub" > Submit </button><br><br>




    if empty($email){
        echo"email is required";
    }else if(){
        !

    }
    





</form>
   


</body>
</html>