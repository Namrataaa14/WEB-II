<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data
    $to = "ramontiwari086@gmail.com"; // Replace with actual receiver email
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $from = $_POST["email"];
    $headers = "From: $from";

    // Send mail
    if (mail($to, $subject, $message, $headers)) {
        $status = "Email sent successfully!";
    } else {
        $status = "Failed to send email.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Mail Demo</title>
</head>
<body>

<h2>Send Email (PHP Native mail())</h2>

<?php if (!empty($status)) echo "<p>$status</p>"; ?>

<form method="POST">
    <label>Your Email:
        <input type="email" name="email" required>
    </label><br><br>
    <label>Subject:
        <input type="text" name="subject" required>
    </label><br><br>
    <label>Message:<br>
        <textarea name="message" rows="5" cols="40" required></textarea>
    </label><br><br>
    <button type="submit">Send</button>
</form>

</body>
</html>
