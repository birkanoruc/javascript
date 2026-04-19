<?php

/*
Tanım:
strcmp() işlevi, iki dizgeyi karşılaştırır ve karşılaştırma sonucunu döndürür. 
Eğer dizgeler aynı ise 0, birinci dizge ikinci dizgeden küçükse negatif bir değer, 
birinci dizge ikinci dizgeden büyükse pozitif bir değer döner.

Büyük/küçük harf duyarlıdır.
Dikkat! strcasecmp() işlevi ile aynı işlevi yapar, ancak büyük harfleri küçük harflerle karşılaştırır.

Kullanım:
int strcmp ( string $dizge1 , string $dizge2 )

Parametreler:
- $dizge1: Karşılaştırılacak ilk dizge.
- $dizge2: Karşılaştırılacak ikinci dizge.

Dönen Değerler:
- 0: Eğer dizgeler aynı ise.
- Negatif bir değer: Eğer $dizge1, $dizge2'den küçükse.
- Pozitif bir değer: Eğer $dizge1, $dizge2'den büyükse.
*/

$dizge1 = "Hello";
$dizge2 = "World";

$result = strcmp($dizge1, $dizge2);

echo $result; // Çıktı: -1