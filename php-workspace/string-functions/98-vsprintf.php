<?php

/*
Tanım:
vsprintf() işlevi, bir dizi argümanı kullanarak bir biçimlendirilmiş dize döndürür. sprintf() işlevine benzer, ancak argümanları bir dizi olarak alır.

Kullanım:
string vsprintf ( string $format , array $args )

Parametreler:
- $format: Biçimlendirme dizesi. Bu dize, yer tutucular (örn. %s, %d) içerebilir.
- $args: Biçimlendirme dizesindeki yer tutucuların yerine geçecek değerleri içeren bir dizi.

Dönen Değer:
Biçimlendirilmiş dize.
*/

$name = "John Doe";
$age = 30;

var_dump(vsprintf("Name: %s, Age: %d\n", [$name, $age]));

/* Çıktı:
Name: John Doe, Age: 30
*/