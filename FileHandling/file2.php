<?php

$files = fopen("abc.txt", "r") or die("Unable to open file!");
echo $files;
echo "<br>";

echo fgetc($files);
echo "<br>";

echo fgets($files);
echo "<br>";


$filesize = filesize("abc.txt");
$content = fread($files, $filesize);

echo "The file size is " . $filesize;
echo "<br>";

echo $content;
echo "<br>";

fclose($files);




?>