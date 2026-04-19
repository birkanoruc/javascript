<?php

/*
Tanım:
strrpos() işlevi, bir dizgede belirtilen karakterin son geçtiği konumu bulur.
Büyük/küçük harf duyarsız bir arama yapar.

Kullanım:
int strrpos ( string $haystack , mixed $needle [, int $offset = 0 ] )

Parametreler:
- $haystack: İçinde arama yapılacak olan dizge.
- $needle: Aranacak olan karakter veya alt dizge. Tek bir karakter veya bir dizge olabilir.
- $offset: (İsteğe bağlı) Aramaya başlanacak konum. Negatif bir değer verilirse, arama dizgenin sonundan başlar.

Dönen Değer:
Belirtilen karakterin son geçtiği konumun indeksini döner. Eğer karakter bulunamazsa FALSE döner.
*/

$haystack = "Hello, World!";
$needle = "o";

$result = strrpos($haystack, $needle);

echo $result . PHP_EOL; // Çıktı: 8