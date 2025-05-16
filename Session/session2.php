<?php 
session_start();
?>

<html>
<body>
    <?php 
    echo $_SESSION["Name"]; echo "<br>";
    echo $_SESSION["class"];
    ?>
 
</body>
</html>