<?php

// Test: isValidDate() fonksiyonu verilen tarihin geçerli olup olmadığını doğrulamalıdır.

function isValidDate(string $date, string $format = 'Y-m-d'): bool
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}

// Test Case
assert(isValidDate("2024-02-05") === true);
assert(isValidDate("2024-13-05") === false);
assert(isValidDate("05-02-2024", "d-m-Y") === true);
