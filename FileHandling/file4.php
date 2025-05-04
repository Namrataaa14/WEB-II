<?php

$file = fopen("abc.txt", "a") or die("Unable to open file!");
fwrite($file, "Hello World\n");


fclose($file); // Close the file opened in append mode

$file = fopen("abc.txt", "r") or die("Unable to open file!"); // Reopen in read mode
$filesize = filesize("abc.txt");
$content = fread($file, $filesize);
echo "The file size is " . $filesize;
echo "<br>";
echo $content;

fclose($file);

?>