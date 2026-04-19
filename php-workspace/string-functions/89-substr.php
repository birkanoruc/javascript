<?php

/*
Tanım:
Belirtilen bir dizgenin bir alt dizgesini döndürür.

Kullanım:
string substr ( string $string , int $start [, int $length ] )

Parametreler:
- $string: Alt dizgesi alınacak olan orijinal dizge.
- $start: Alt dizgenin başlangıç konumu. Pozitif bir değer, dizgenin başından itibaren konumu belirtir. Negatif bir değer, dizgenin sonundan itibaren konumu belirtir.
- $length (isteğe bağlı): Alt dizgenin uzunluğu. Pozitif bir değer, başlangıç konumundan itibaren uzunluğu belirtir. Negatif bir değer, dizgenin sonundan itibaren uzunluğu belirtir. Belirtilmezse, alt dizge başlangıç konumundan dizgenin sonuna kadar uzanır.

Dönen Değer:
Belirtilen başlangıç konumundan ve isteğe bağlı olarak belirtilen uzunlukta bir alt dizge döner.
*/

$dizge = "Hello, World!";
$alt_dizge = substr($dizge, 5, 5);
echo $alt_dizge;
// Çıktı: , Wor