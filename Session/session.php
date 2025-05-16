<?php
session_start();
?>
<html>
<body>

<?php
$_SESSION["Name"]="Namrata";
$_SESSION["class"]= "webii";

echo"session variables are set";
?>
</body>

</html>