<?php


$resumeDir = "resumes/";
$photoDir = "photos/";

if (!is_dir($resumeDir)) {
    mkdir($resumeDir, 0777, true);
}
if (!is_dir($photoDir)) {
    mkdir($photoDir, 0777, true);
}

if (isset($_FILES['resume']) && is_uploaded_file($_FILES['resume']['tmp_name'])) {
    $resume = $_FILES['resume'];
    $resumeName = basename($resume['name']);
    $resumePath = $resumeDir . $resumeName;
    $resumeType = strtolower(pathinfo($resumePath, PATHINFO_EXTENSION));
    $resumeSize = $resume['size'];

    if (file_exists($resumePath)) {
        echo "Resume file already exists.<br>";
    } elseif (!in_array($resumeType, ['pdf', 'doc'])) {
        echo "Only PDF or DOC allowed for resume.<br>";
    } elseif ($resumeSize > 512000) {
        echo "Resume file must be less than 500KB.<br>";
    } else {
        move_uploaded_file($resume['tmp_name'], $resumePath);
        echo "Resume uploaded successfully.<br>";
    }
}




if (isset($_FILES['photo']) && is_uploaded_file($_FILES['photo']['tmp_name'])) {
    $photo = $_FILES['photo'];
    $photoName = basename($photo['name']);
    $photoPath = $photoDir . $photoName;
    $photoType = strtolower(pathinfo($photoPath, PATHINFO_EXTENSION));
    $photoSize = $photo['size'];

    if (file_exists($photoPath)) {
        echo "Photo file already exists.<br>";
    } elseif (!in_array($photoType, ['jpg', 'jpeg'])) {
        echo "Only JPG or JPEG allowed for photo.<br>";
    } elseif ($photoSize > 1048576) {
        echo "Photo file must be less than 1MB.<br>";
    } else {
        move_uploaded_file($photo['tmp_name'], $photoPath);
        echo "Photo uploaded successfully.<br>";
    }
}
?>
