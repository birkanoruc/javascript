<?php

/*
Tanım:
vprintf() işlevi, bir format dizesi ve bir dizi argüman alarak biçimlendirilmiş bir dizeyi çıktı olarak verir. 
Bu işlev, printf() işlevine benzer, ancak argümanları bir dizi olarak alır.

Kullanım:
int vprintf ( string $format , array $args )

Parametreler:
- $format: Biçimlendirme dizesi. Bu dize, metin ve dönüşüm belirticileri içerir.
- $args: Biçimlendirme dizesinde belirtilen dönüşüm belirticilerine karşılık gelen argümanları içeren bir dizi.

Dönen Değerler:
Biçimlendirilmiş dizeyi çıktı olarak verir ve yazılan karakter sayısını döner.
*/

$name = "John Doe";
$age = 30;

var_dump(vprintf("Name: %s, Age: %d\n", [$name, $age]));

/* Çıktı:
Name: John Doe, Age: 30
int(24)
*/