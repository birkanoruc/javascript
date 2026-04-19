<?php

// Test: isValidEmail() fonksiyonu geçerli bir email olup olmadığını kontrol etmelidir.

function isValidEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Test Case
assert(isValidEmail("test@example.com") === true);
assert(isValidEmail("invalid-email") === false);
assert(isValidEmail("test@.com") === false);
