<?php

/*
Tanım:
vfprint() işlevi, belirtilen format ve değişkenleri kullanarak bir dosyaya biçimlendirilmiş bir dize yazar.

Kullanım:
int vfprint(resource $handle, string $format, mixed ...$values)

Parametreler:
- $handle: Yazma işlemi yapılacak dosya tanıtıcısı.
- $format: Yazılacak dize için biçimlendirme şablonu.
- $values: Biçimlendirme şablonunda kullanılacak değişkenler.

Dönen Değer:
Yazılan karakter sayısını döner. Bir hata oluşursa FALSE döner.
*/

$file = "output.txt";
$handle = fopen($file, "w");

$name = "John Doe";
$age = 30;

$result = vfprintf($handle, "Name: %s, Age: %d\n", [$name, $age]);

if ($result === false) {
    echo "Dosyaya yazma başarısız oldu!";
    exit(1);
} else {
    echo "Dosyaya yazma başarılı: $result karakter yazıldı.";
    fclose($handle);
}
