<?php

$files = fopen("xyz.txt", "w") or die("Unable to open file!");
fwrite($files, "Hello World\n");

$fileOverride=fopen("oop.txt", "w") or die("Unable to open file!");

fwrite($fileOverride, "Hello another World\n");


$fileRead = fopen("xyz.txt", "r") or die("Unable to open file!");
// echo $fileRead;
echo "<br>";

$anotherFileRead = fopen("oop.txt", "r") or die("Unable to open file!");


echo fgets($fileRead);
echo "<br>";

echo fgets($anotherFileRead);
echo "<br>";

// $filesize = filesize("xyz.txt");
// $content = fwrite($files,$filesize);


// echo fgets($files);




?>