<?php

/*
Tanım:
strchr() işlevi, bir dizgede belirtilen karakterin ilk geçtiği yerden itibaren dizgenin geri kalanını döndürür.

Kullanım:
string strchr ( string $haystack , mixed $needle [, bool $before_needle = false ] )

Parametreler:
- $haystack: İçinde arama yapılacak olan dizge.
- $needle: Aranacak karakter veya dizge.
- $before_needle (isteğe bağlı): true olarak ayarlanırsa, needle karakterinden önceki kısmı döndürür.

Dönen Değer:
Belirtilen karakterden itibaren dizgenin geri kalan kısmını döndürür. Eğer karakter bulunamazsa, false döner.
*/

$haystack = "Hello, World!";
$needle = "o";

$result = strchr($haystack, $needle);

echo $result . PHP_EOL; // Çıktı: o, World!