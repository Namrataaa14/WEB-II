<?php
include ("connection.php");

$sql="SELECT * FROM users WHERE Name='Ramon' ";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)> 0){
    while($row=mysqli_fetch_assoc($result)){

        echo "Email"."<br>" . $row["Email"]. "<br>";
        echo "Password"."<br>". $row["Password"]."<br>";
    }
}

else{
    echo "0 RESULT";
}
mysqli_close($conn);


//$sql=SELECT S.N ,Users FROM users where id>5;



?>






