<?php

/*
Tanım:
sha1_file() işlevi, belirtilen dosyanın içeriğinin SHA-1 özetini hesaplar ve döndürür.

Kullanım:
string sha1_file ( string $filename [, bool $binary = false ] )

Parametreler:
- $filename: SHA-1 özetinin hesaplanacağı dosyanın yolu.
- $binary: (isteğe bağlı) true olarak ayarlanırsa, ikili ham biçimde özet döndürülür. Varsayılan olarak false'dur ve özet onaltılık (hexadecimal) biçimde döndürülür.

Dönen Değer:
Başarılı olursa dosyanın SHA-1 özetini içeren bir string, aksi takdirde false döner.
*/

$filename = "test.txt";

if (file_exists($filename)) {
    $sha1 = sha1_file($filename);
    echo "SHA-1 özeti: $sha1" . PHP_EOL;
} else {
    echo "Dosya bulunamadı: $filename" . PHP_EOL;
}

/* Çıktı:
SHA-1 özeti: 2ef7bde608ce5404e97d5f042f95f89f1c232871
*/