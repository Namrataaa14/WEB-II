<?php
// Step 1: Write 100 random numbers to a file
$file = fopen("numbers.txt", "w");
for ($i = 0; $i < 100; $i++) {
    fwrite($file, rand(1, 10) . " ");
}
fclose($file);

// Step 2: Read numbers from the file
$text = file_get_contents("numbers.txt");
$allNumbers = explode(" ", trim($text));
$numberCount = [];

// Step 3: Read 10 numbers at a time and count them
for ($i = 0; $i < count($allNumbers); $i += 10) {
    $tenNumbers = array_slice($allNumbers, $i, 10);
    foreach ($tenNumbers as $oneNumber) {
        if ($oneNumber !== "") {
            if (isset($numberCount[$oneNumber])) {
                $numberCount[$oneNumber]++;
            } else {
                $numberCount[$oneNumber] = 1;
            }
        }
    }
}

// Step 4: Show numbers that appear odd number of times
echo "Numbers that appear odd number of times:\n";
foreach ($numberCount as $number => $times) {
    if ($times % 2 != 0) {
        echo "$number appears $times times\n";
    }
}
?>
