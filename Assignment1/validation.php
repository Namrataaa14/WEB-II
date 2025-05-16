<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Fallback if field not set
    $userid = isset($_POST['userid']) ? $_POST['userid'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $country = isset($_POST['country']) ? $_POST['country'] : '';
    $zip = isset($_POST['zip']) ? $_POST['zip'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $language = isset($_POST['language']) ? $_POST['language'] : [];
    $about = isset($_POST['about']) ? $_POST['about'] : '';

    // Validations
    if (strlen($userid) < 5 || strlen($userid) > 12) {
        $errors[] = "User ID should be of length 5 to 12.";
    }

    if (strlen($password) < 7 || strlen($password) > 12) {
        $errors[] = "Password should be of length 7 to 12.";
    }

    if (!ctype_alpha($fname)) {
        $errors[] = "Firstname should only be alphabets.";
    }

    if (!empty($address) && !ctype_alnum(str_replace(' ', '', $address))) {
        $errors[] = "Address should have only alphanumeric characters.";
    }

    if (!ctype_digit($zip)) {
        $errors[] = "Zip Code should only be numeric.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email should be a valid email.";
    }

    if (empty($gender)) {
        $errors[] = "Please select your sex.";
    }

    if (empty($language)) {
        $errors[] = "Please select at least one language.";
    }

    // Output
    if (empty($errors)) {
        echo "<h2 style='color: green;'> Form submitted successfully!</h2>";
    } else {
        include 'form.php';
        echo "<h2 style='color: red;'>Please correct the following errors:</h2><ul style='color:red;'>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }
} else {
    header("Location: form.php");
    exit;
}
?>
