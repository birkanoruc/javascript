<?php

// Test: isPrime() fonksiyonu sayının asal olup olmadığını belirlemelidir.

function isPrime(int $n): bool
{
    if ($n <= 1) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) return false;
    }
    return true;
}

// Test Case
assert(isPrime(2) === true);
assert(isPrime(10) === false);
assert(isPrime(17) === true);
