<?php
// Define the array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $str) {
    // Count vowels in the string
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $str);

    // Reverse string
    $reversedString = strrev($str);

    // Print the output
    echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
} 

