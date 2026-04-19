<?php

/*
Tanım:
stristr() işlevi, bir dizgede belirtilen bir alt dizgeyi arar ve bu alt dizgeyi içeren dizgenin tamamını veya alt dizgeden sonrasını döndürür. 
Arama işlemi büyük/küçük harf duyarsızdır.

Kullanım:
string stristr ( string $haystack , mixed $needle [, bool $before_needle = false ] )

Parametreler:
- $haystack: İçinde arama yapılacak olan dizge.
- $needle: Aranacak olan alt dizge. Eğer needle bir sayı ise, bu sayı bir karakterin ASCII değeri olarak kabul edilir.
- $before_needle: (İsteğe bağlı) true olarak ayarlanırsa, needle'dan önceki kısmı döndürür. Varsayılan değeri false'tur.

Dönen Değer:
Aranan alt dizge bulunursa, alt dizgeyi içeren dizgenin tamamını veya alt dizgeden sonrasını döndürür. Eğer before_needle true ise, alt dizgeden önceki kısmı döndürür. Alt dizge bulunamazsa false döner.
*/

$haystack = "Hello, World!";
$needle = "o";

$result = stristr($haystack, $needle);
echo $result;
// Çıktı: o, World!