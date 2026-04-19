<?php

/*
Tanım:
substr_count() işlevi, bir dizgede belirli bir alt dizgenin kaç kez geçtiğini sayar.

Kullanım:
int substr_count ( string $haystack , string $needle [, int $offset = 0 [, int $length ]] )

Parametreler:
- $haystack: İçinde arama yapılacak olan ana dizge.
- $needle: Sayılacak olan alt dizge.
- $offset: (İsteğe bağlı) Aramaya başlanacak dizge konumu. Negatif bir değer verilirse, arama dizgenin sonundan başlar.
- $length: (İsteğe bağlı) Aramanın yapılacağı dizge uzunluğu. Negatif bir değer verilirse, arama dizgenin sonundan başlar.

Dönen Değer:
Belirtilen alt dizgenin ana dizgede kaç kez geçtiğini belirten bir tamsayı değeri döner.
*/

$haystack = "Hello, World! Hello, World!";
$needle = "Hello";

echo substr_count($haystack, $needle);
// Çıktı: 2