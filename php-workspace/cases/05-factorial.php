<?php

// Test: factorial() fonksiyonu doğru sonucu döndürmelidir.

function factorial(int $n): int
{
    if ($n < 0) return -1;
    return $n === 0 ? 1 : $n * factorial($n - 1);
}

// Test Case
assert(factorial(0) === 1);
assert(factorial(5) === 120);
assert(factorial(3) === 6);
