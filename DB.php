<?php
// Include database connection
include 'connect.php';

$insert = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO simpleform (name, email) VALUES ('$name', '$email')";

    if (mysqli_query($conn, $sql)) {
        $insert = true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $conn->close();
}

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