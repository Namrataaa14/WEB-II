<?php
include 'db.php';
$email = $_GET['emailid'];

$result = mysqli_query($conn, "SELECT * FROM contacts WHERE emailid='$email'");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "<h2>Result for: $email</h2>";
    echo "<div class='card'>
        <p>Name: {$row['firstname']}</p>
        <p>Designation: {$row['designation']}</p>
        <p>Address: {$row['address1']}, {$row['address2']}</p>
        <p>City/State: {$row['city']} / {$row['state']}</p>
    </div>";
} else {
    echo "No result found. <a href='index.php'>Back</a>";
}
?>
