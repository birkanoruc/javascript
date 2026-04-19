<?php

// Test: isValidIP() fonksiyonu verilen IP adresinin geçerli olup olmadığını kontrol etmelidir.

function isValidIP(string $ip): bool
{
    return filter_var($ip, FILTER_VALIDATE_IP) !== false;
}

// Test Case
assert(isValidIP("192.168.1.1") === true);
assert(isValidIP("256.256.256.256") === false);
assert(isValidIP("::1") === true); // IPv6