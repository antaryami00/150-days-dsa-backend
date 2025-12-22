<?php

$str = "hello";

// Traverse string
for ($i = 0; $i < strlen($str); $i++) {
    echo $str[$i] . PHP_EOL;
}

$firstName = "John";
$lastName = "Doe";

// Joining three strings together
$fullName = $firstName . " " . $lastName;

echo $fullName; // Output: John Doe



$userInput = "   johN dOE   ";

// 1. Remove accidental spaces
$cleanInput = trim($userInput);

// 2. Make it all lowercase
$lower = strtolower($cleanInput);

// 3. Capitalize the first letter of each word
$formatted = ucwords($lower);

echo "Welcome, " . $formatted . "!"; 
// Output: Welcome, John Doe!