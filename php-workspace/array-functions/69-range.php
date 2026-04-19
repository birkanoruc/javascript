<?php

/*
Tanım:
range() işlevi, belirtilen aralıktaki sayıları içeren bir diziyi döndürür.

Kullanım:
range(start, end, step)
start: Gerekli. Dizinin başlangıç değeri.
end: Gerekli. Dizinin bitiş değeri.
step: İsteğe bağlı. Dizinin artış miktarı. Varsayılan değeri 1'dir.
*/

$numbers = range(1, 10, 2);

print_r($numbers);
/* Çıktı:
Array
(
    [0] => 1
    [1] => 3
    [2] => 5
    [3] => 7
    [4] => 9
)
*/