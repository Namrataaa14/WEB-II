<?php
session_start(); // Start the session

// Part I: Create a cookie and check if cookies are enabled
setcookie("test_cookie", "cookie_value", time() + 3600); // Cookie expires in 1 hour
$cookieStatus = "Unknown";

// Check for presence of any cookies or specifically the test cookie
if (count($_COOKIE) > 0 || isset($_COOKIE['test_cookie'])) {
    $cookieStatus = "Cookies are enabled.";
} else {
    $cookieStatus = "Cookies are disabled or not set.";
}

// Store form-submitted data in the session
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["email"] = $_POST["email"];
}

// Part II: Delete the test cookie by setting its expiration in the past
setcookie("test_cookie", "", time() - 3600); // Expire 1 hour ago
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Status</title>
</head>
<body>
    <h3>Cookie Check:</h3>
    <p><?php echo $cookieStatus; ?></p>

    <h3>User Form</h3>
    <form method="POST">
        <label>Name: <input type="text" name="name" required></label><br><br>
        <label>Email: <input type="email" name="email" required></label><br><br>
        <button type="submit">Submit</button>
    </form>

    <h3>Session Info:</h3>
    <p>Name: <?php echo $_SESSION["name"] ?? 'N/A'; ?></p>
    <p>Email: <?php echo $_SESSION["email"] ?? 'N/A'; ?></p>
</body>
</html>
