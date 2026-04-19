<?php

/*
Tanım:
sha1 işlevi, bir dizgenin SHA-1 karma değerini hesaplar. SHA-1 (Secure Hash Algorithm 1), bir veri parçasının 160 bitlik (20 bayt) bir özetini üretir. Bu özet, veri bütünlüğünü sağlamak için kullanılır.

Kullanım:
string sha1(string $dizge, bool $raw = false)

Parametreler:
- $dizge: SHA-1 karma değeri hesaplanacak olan dizge.
- $raw: (isteğe bağlı) true olarak ayarlandığında, ham ikili biçimde 20 baytlık bir çıktı döner. Varsayılan olarak false'dur ve 40 karakter uzunluğunda onaltılık bir sayı döner.

Dönüş Değeri:
SHA-1 karma değeri hesaplanmış dizgeyi döner.
*/

$dizge = "Hello World!";
$sha1_karma = sha1($dizge);

echo $sha1_karma;
// Çıktı: 2ef7bde608ce5404e97d5f042f95f89f1c232871%