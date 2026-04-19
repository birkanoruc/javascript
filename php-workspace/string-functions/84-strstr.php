<?php

/*
Tanım:
strstr() işlevi, bir dizgede belirtilen bir alt dizgenin ilk geçtiği yerden itibaren kalan kısmını döndürür.

Kullanım:
string strstr ( string $haystack , mixed $needle [, bool $before_needle = false ] )

Parametreler:
- $haystack: İçinde arama yapılacak olan ana dizge.
- $needle: Aranacak olan alt dizge. Eğer needle bir karakter dizgesi ise, bu karakter dizgesinin ilk geçtiği yerden itibaren kalan kısım döndürülür.
- $before_needle: (İsteğe bağlı) Eğer true olarak belirtilirse, needle'ın ilk geçtiği yerden önceki kısmı döndürür.

Dönen Değer:
Belirtilen alt dizgenin ilk geçtiği yerden itibaren kalan kısmı döndürür. Eğer alt dizge bulunamazsa false döner.
*/

$haystack = "Hello, World!";
$needle = "o";

$result = strstr($haystack, $needle);
echo $result; // Çıktı: , World!