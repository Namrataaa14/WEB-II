<?php
// Set a cookie with username and roll number, valid for 3 days
$username = "Namrata";
$roll = "BCA2079F01";
$cookieValue = $username . "|" . $roll;
setcookie("user_info", $cookieValue, time() + (3 * 24 * 60 * 60), "/"); // 3 days

// Check if the cookie is set
$cookieMessage = isset($_COOKIE["user_info"])
    ? "Cookie is set: " . $_COOKIE["user_info"]
    : "Cookie is not set.";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Demo</title>
</head>
<body>

    <h3>Cookie Status</h3>
    <p><?php echo $cookieMessage; ?></p>

    <h3>User Form</h3>
    <form method="post">
        <label>Name: <input type="text" name="name" required></label><br><br>
        <label>Email:
            <input type="email" name="email"
                value="<?php
                    // Autofill email using cookie data if set
                    if (isset($_COOKIE["user_info"])) {
                        $parts = explode("|", $_COOKIE["user_info"]);
                        echo strtolower(trim($parts[0])) . "@college.edu.np";
                    }
                ?>"
                required>
        </label><br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    // Show submitted data if form is posted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "<h3>Submitted Data</h3>";
        echo "Name: " . htmlspecialchars($_POST["name"]) . "<br>";
        echo "Email: " . htmlspecialchars($_POST["email"]);
    }
    ?>

</body>
</html>
