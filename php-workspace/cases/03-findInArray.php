<?php

// Test: findInArray() verilen elemanın dizide olup olmadığını kontrol etmelidir.

function findInArray(array $arr, mixed $value): bool
{
    return in_array($value, $arr, true);
}

// Test Case
assert(findInArray([1, 2, 3], 2) === true);
assert(findInArray(["a", "b", "c"], "d") === false);
assert(findInArray([], "x") === false);
