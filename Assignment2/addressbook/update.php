<?php
include 'db.php';
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $designation = $_POST['designation'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $emailid = $_POST['emailid'];

    $update = "UPDATE contacts SET firstname='$firstname', designation='$designation', address1='$address1',
    address2='$address2', city='$city', state='$state', emailid='$emailid' WHERE id=$id";

    if (mysqli_query($conn, $update)) {
        echo "Updated! <a href='index.php'>Back</a>";
    } else {
        echo "Error updating: " . mysqli_error($conn);
    }
} else {
    $result = mysqli_query($conn, "SELECT * FROM contacts WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container">
    <h2>Edit Contact</h2>
    <form method="POST">
        <input name="firstname" value="<?= $row['firstname'] ?>">
        <input name="designation" value="<?= $row['designation'] ?>">
        <input name="address1" value="<?= $row['address1'] ?>">
        <input name="address2" value="<?= $row['address2'] ?>">
        <input name="city" value="<?= $row['city'] ?>">
        <input name="state" value="<?= $row['state'] ?>">
        <input name="emailid" value="<?= $row['emailid'] ?>">
        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>
<?php } ?>
