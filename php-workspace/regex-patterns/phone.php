<?php

$numbers = [
    "010-123-4567",
    "+44 123 456 7890",
    "123-456-7890",
    "123 456 7890",
    "1234567890",
    "(+44) 123 456 7890",
    "(+44) 123-456-7890",
    "(+44) 123 456 7890 x123",
    "1234567890x123",
    "123 456 7890 x123",
    "123-456-7890 x123",
    "1234567890 x123 x456",
    "123 456 7890 x123 x456",
    "123-456-7890 x123 x456",
    "+44 123 456 7890 x123 x456",
    "+44 123-456-7890 x123 x456",
];

$pattern = "/(?<area>\+\d{1,2})?[ -]?\(?(?<operator>\d{3})\)?[ -]?(?<main>\d{3})[ -]?(?<number>\d{4})/";

foreach ($numbers as $number) {
    if (preg_match($pattern, $number, $matches)) {
        echo "Phone number: " . $matches[0] . "\n";
        echo "Area code: " . $matches["area"] . "\n";
        echo "Operator code: " . $matches["operator"] . "\n";
        echo "Main number: " . $matches["main"] . "\n";
        echo "Number: " . $matches["number"] . "\n";
        echo "\n";
    }
}
