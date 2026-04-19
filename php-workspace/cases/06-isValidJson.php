<?php

// Test: isValidJson() fonksiyonu verilen string’in geçerli bir JSON olup olmadığını doğrulamalıdır.

function isValidJson(string $data): bool
{
    json_decode($data);
    return json_last_error() === JSON_ERROR_NONE;
}

// Test Case
assert(isValidJson('{"name":"John"}') === true);
assert(isValidJson('{name:"John"}') === false);
assert(isValidJson('') === false);
