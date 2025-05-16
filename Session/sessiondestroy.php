<?php 
session_start();
?>

<html>
    <body>
        <?php 
        //remove all session variables
        session_unset();
//destroy the session
        session_destroy();

        echo"session variables are cleared and seen session is destroyed";
        ?>
    </body>
</html>