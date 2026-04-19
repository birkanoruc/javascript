<?php

// Test: isValidAge() fonksiyonu verilen yaşın 18 ile 60 arasında olup olmadığını kontrol etmelidir.

function isValidAge(int $age): bool
{
    return $age >= 18 && $age <= 60;
}

// Test Case
assert(isValidAge(25) === true);
assert(isValidAge(17) === false);
assert(isValidAge(61) === false);
