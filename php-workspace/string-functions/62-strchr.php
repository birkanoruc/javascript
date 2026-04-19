<?php

/*
Tanım:
strchr() işlevi, bir dizgede belirtilen karakterin ilk geçtiği yerden itibaren dizgenin geri kalanını döndürür. Bu işlev, strstr() işlevinin bir takma adıdır.

Kullanım:
string strchr ( string $haystack , mixed $needle [, bool $before_needle = false ] )

Parametreler:
- $haystack: İçinde arama yapılacak olan dizge.
- $needle: Aranacak karakter veya dizge. Eğer bir sayı belirtilirse, bu sayı bir karaktere dönüştürülür.
- $before_needle: (İsteğe bağlı) true olarak ayarlanırsa, needle karakterinden önceki kısmı döndürür.

Dönen Değer:
Belirtilen karakterin ilk geçtiği yerden itibaren dizgenin geri kalanını döndürür. Eğer karakter bulunamazsa FALSE döner.
*/

$haystack = "Hello, World!";
$needle = "o";

$result = strchr($haystack, $needle);

echo $result . PHP_EOL; // Çıktı: o, World!

$beforeResult = strchr($haystack, $needle, true);

echo $beforeResult; // Çıktı: Hell