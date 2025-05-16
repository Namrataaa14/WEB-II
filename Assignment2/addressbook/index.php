<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Address Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

    <h2>Add New Contact</h2>
    <form action="insert.php" method="POST">
        <input name="firstname" placeholder="First Name" required>
        <input name="designation" placeholder="Designation">
        <input name="address1" placeholder="Address Line 1">
        <input name="address2" placeholder="Address Line 2">
        <input name="city" placeholder="City">
        <input name="state" placeholder="State">
        <input name="emailid" type="email" placeholder="Email" required>
        <button type="submit">Add Contact</button>
    </form>

    <h2>Search by Email</h2>
    <form action="search.php" method="GET">
        <input name="emailid" type="email" placeholder="Enter Email">
        <button type="submit">Search</button>
    </form>

    <h2>All Contacts</h2>
    <?php
    $result = mysqli_query($conn, "SELECT * FROM contacts");
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='card'>
            <strong>{$row['firstname']}</strong> | {$row['emailid']}
            <a href='update.php?id={$row['id']}'>Edit</a> |
            <a href='delete.php?id={$row['id']}'>Delete</a>
        </div>";
    }
    ?>

</div>
</body>
</html>
