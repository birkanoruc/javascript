<?php

/*
Tanım:
strspn() işlevi, bir dizgenin başından itibaren belirtilen karakter kümesinden oluşan en uzun alt dizgenin uzunluğunu döndürür.

Kullanım:
int strspn ( string $subject , string $mask [, int $start [, int $length ]] )

Parametreler:
- $subject: İncelenecek dizge.
- $mask: Kabul edilen karakterlerin listesi.
- $start: (İsteğe bağlı) Başlangıç konumu. Varsayılan değer 0'dır.
- $length: (İsteğe bağlı) İncelenecek dizgenin uzunluğu. Varsayılan olarak dizgenin sonuna kadar.

Dönen Değer:
Belirtilen karakter kümesinden oluşan en uzun alt dizgenin uzunluğunu döndürür.
*/

$text = "12345abcde";
$mask = "0123456789";

$result = strspn($text, $mask);
echo "Sonuç: $result";  
// Çıktı: Sonuç: 5