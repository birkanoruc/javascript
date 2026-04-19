<?php


$datas = [
    "Name: John Doe",
    "Age: 30",
    "Country: USA",
    "City: New York",
    "Phone: 1234567890",
    "Email: johndoe@example.com",
    "Website: https://www.example.com",
    "GitHub: johndoe",
    "LinkedIn: johndoe",
];

$pattern = "/(?<key>^[a-zA-Z]+): (?<value>[a-zA-Z0-9]+)/";

foreach ($datas as $data) {
    if (preg_match($pattern, $data, $matches)) {
        echo "Data: " . $matches[0] . "\n";
        echo "Key: " . $matches["key"] . "\n";
        echo "Value: " . $matches["value"] . "\n";
        echo "\n";
    }
}
