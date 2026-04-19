<?php

/*
Tanım:
similar_text() işlevi, iki dizge arasındaki benzerlik yüzdesini hesaplar.

Kullanım:
int similar_text ( string $first , string $second [, float &$percent ] )

Parametreler:
- $first: Karşılaştırılacak ilk dizge.
- $second: Karşılaştırılacak ikinci dizge.
- $percent: (İsteğe bağlı) Benzerlik yüzdesini döndürecek değişken.

Dönen Değer:
- İki dizge arasındaki ortak karakter sayısını döner. Eğer $percent parametresi belirtilmişse, benzerlik yüzdesi bu değişkene atanır.
*/

$first = "Hello, World!";
$second = "Helllo, Worlld!";

similar_text($first, $second, $percent);
echo "Benzerlik oranı: $percent%";
// Çıktı: Benzerlik oranı: 92.857142857143%