<?php

/*
Tanım:
strripos() işlevi, bir dizgede belirtilen bir alt dizgenin son oluşumunun konumunu bulur. Büyük/küçük harf duyarsızdır.

Kullanım:
int strripos ( string $haystack , string $needle [, int $offset = 0 ] )

Parametreler:
- $haystack: İçinde arama yapılacak olan ana dizge.
- $needle: Aranacak olan alt dizge. Eğer needle bir karakterden fazla değilse, bu işlev needle'ın ASCII değerini kullanır.
- $offset: Aramaya başlanacak konum. Negatif bir değer verilirse, arama dizgenin sonundan başlar.

Dönen Değerler:
Başarı durumunda alt dizgenin son oluşumunun konumunu, needle bulunamazsa FALSE döner.
*/

$haystack = "Hello, World!";
$needle = "o";

$result = strripos($haystack, $needle);

echo $result . PHP_EOL; // Çıktı: 8
