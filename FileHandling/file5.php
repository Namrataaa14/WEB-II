<?php
// end of file code
$files = fopen("omg.txt", "w") or die("Unable to open file!");
fwrite($files, "Hello World\n");

// use FEOF
$fileRead = fopen("xyz.txt", "r") or die("Unable to open file!");
    echo $fileRead;

    $content = fread($fileRead, filesize("xyz.txt"));
    while (!feof($fileRead)) {
        echo fgets($fileRead) . "<br>";
        echo $content . "<br>";
    }
    echo "<br>";



?>