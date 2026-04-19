<?php

/*
Tanım:
count() işlevi, bir dizinin eleman sayısını döndürür.
Dikkat! Bu işlev, çok boyutlu dizilerde sadece birinci seviyedeki elemanları sayar.

Kullanım:
count(array, mode)
array: Gerekli. İşlenecek dizi.
mode: İsteğe bağlı. İşlem modu. Varsayılan değeri 0'dır. 1 değeri verilirse, işlev, çok boyutlu dizilerdeki tüm elemanları sayar.
*/

$cars = array(
    "Volvo" => array(
        "XC60",
        "XC90"
    ),
    "BMW" => array(
        "X3",
        "X5"
    ),
    "Toyota" => array(
        "Highlander"
    )
);

echo "Normal count: " . count($cars) . "\n";
// Çıktı: Normal count: 3

echo "Recursive count: " . count($cars, 1);
// Çıktı: Recursive count: 7