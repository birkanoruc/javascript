<?php

/*
Tanım:
strtok() işlevi, bir dizgeyi belirli bir ayraç kullanarak parçalara ayırır ve bu parçaları sırasıyla döndürür.

Kullanım:
string strtok ( string $str , string $token )
string strtok ( string $token )

Parametreler:
- $str: Parçalanacak olan dizge. İlk çağrıda belirtilmelidir.
- $token: Dizgeyi parçalara ayırmak için kullanılacak olan ayraç karakterleri.

Dönen Değer:
- Başarı durumunda bir sonraki token (parça) döner, başarısızlık durumunda false döner.
*/

$text = "Hello, World!";
$delimiter = ", "; // Virgül ve boşluk (, ) karakterleri ayırıyor.

$token = strtok($text, $delimiter);
while ($token !== false) {
    echo $token . "\n";
    $token = strtok($delimiter);
}

/* Çıktı:
Hello
World!
*/