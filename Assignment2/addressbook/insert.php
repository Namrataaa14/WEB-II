<?php
include 'db.php';

$firstname = $_POST['firstname'];
$designation = $_POST['designation'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$emailid = $_POST['emailid'];

$query = "INSERT INTO contacts (firstname, designation, address1, address2, city, state, emailid)
VALUES ('$firstname', '$designation', '$address1', '$address2', '$city', '$state', '$emailid')";

if (mysqli_query($conn, $query)) {
    echo "Contact added. <a href='index.php'>Back</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
