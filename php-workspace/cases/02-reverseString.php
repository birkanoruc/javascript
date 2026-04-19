<?php

// Test: reverseString() fonksiyonu verilen metni tersine çevirmelidir.

function reverseString(string $text): string
{
    return strrev($text);
}

// Test Case
assert(reverseString("hello") === "olleh");
assert(reverseString("") === "");
assert(reverseString("123") === "321");
