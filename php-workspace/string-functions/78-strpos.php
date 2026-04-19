<?php

/*
Tanım:
strpos() işlevi, bir dizgede belirtilen bir alt dizgenin ilk geçtiği konumu bulur. 
Eğer alt dizge bulunamazsa FALSE döner.

Kullanım:
int strpos ( string $haystack , mixed $needle [, int $offset = 0 ] )

Parametreler:
- $haystack: İçinde arama yapılacak olan ana dizge.
- $needle: Aranacak olan alt dizge. Tek bir karakter veya bir dizi olabilir.
- $offset: (Opsiyonel) Aramaya başlanacak dizge konumu. Negatif bir değer verilirse, arama dizgenin sonundan başlar.

Dönen Değer:
- Alt dizgenin ilk geçtiği konumun tamsayı değeri veya bulunamazsa FALSE.
*/

$haystack = "Hello, World!";
$needle = "o";

$result = strpos($haystack, $needle);

echo $result . PHP_EOL; // Çıktı: 4