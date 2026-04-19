<?php

// Test: add() fonksiyonunun doğru sonucu döndürmesi gerekir.

function add(int $a, int $b): int
{
    return $a + $b;
}

// Test Case
assert(add(2, 3) === 5);
assert(add(-1, 1) === 0);
assert(add(0, 0) === 0);
