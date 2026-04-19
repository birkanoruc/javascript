<?php

/*
Not: count() işlevi ile aynı işlevi görür. PHP genel olarak sizeof() işlevi yerine count() işlevi kullanımını önerir.

Tanım:
sizeof() işlevi, bir dizinin eleman sayısını döndürür.

Kullanım:
sizeof(array, mode)
array: Gerekli. İşlenecek dizi.
mode: Opsiyonel. Varsayılan değeri 0'dır. 1 olarak ayarlanırsa, işlev çok boyutlu dizilerdeki tüm elemanları sayar.
*/

$colors = array("red", "green", "blue");

echo sizeof($colors);
// Çıktı: 3