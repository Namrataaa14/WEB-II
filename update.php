<?php
include 'connection.php';
$insert = false;


$new_email = "namrata@gmail.com";
$new_name = "namrata";

$sql = "UPDATE simpleform
set email='$new_email' ,name='$new_name' where id='1' ";



//update
// $sql="update users 
// set password='$new_email' ,user='$user' where id='$id' 1' ";






$conn->close();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple Form Insert</title>
</head>

<body>

    <h1>Simple PHP Form Insertion</h1>

    <?php
    if ($insert) {
        echo "<p style='color: green;'>Record inserted successfully!</p>";
    }
    ?>

    <form method="post" action="">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <button type="submit">Submit</button>
    </form>

</body>

</html>