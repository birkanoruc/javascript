<?php

/*

Not: pos() işlevi current() işlevi ile aynı işlevi görür. PHP genel olarak pos() işlevi yerine current() işlevini kullanmanızı önerir. 

Tanım:
pos() işlevi, bir dizinin göstericisinin gösterdiği elemanı döndürür.
Dikkat! Bu işlev, çok boyutlu dizilerde sadece birinci seviyedeki elemanları döndürür.

Kullanım:
pos(array)
array: Gerekli. İşlenecek dizi.
*/

$colors = array("red", "green", "blue");

echo pos($colors);

// Çıktı: red
