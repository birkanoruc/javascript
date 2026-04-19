<?php

// Test: isPalindrome() fonksiyonu bir kelimenin palindrom olup olmadığını kontrol etmelidir.

function isPalindrome(string $word): bool
{
    $word = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $word));
    return $word === strrev($word);
}

// Test Case
assert(isPalindrome("racecar") === true);
assert(isPalindrome("") === true);
assert(isPalindrome("hello") === false);
assert(isPalindrome("A man, a plan, a canal, Panama") === true);
