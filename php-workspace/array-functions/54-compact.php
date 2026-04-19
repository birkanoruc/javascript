<?php

/*
Tanım:
compact() işlevi, belirtilen değişkenlerin adlarını kullanarak bir dizi oluşturur.
Dikkat! Bu işlev, değişkenlerin değerlerini dikkate almaz.

Kullanım:
compact(var1, var2, ...)
var1: Gerekli. Diziye dahil edilecek değişken adı.
var2, ...: İsteğe bağlı. Diziye dahil edilecek diğer değişken adları.
*/

$name = "John";

$age = 25;

$city = "New York";

$result = compact("name", "age", "city");

print_r($result);
/* Çıktı:
Array
(
    [name] => John
    [age] => 25
    [city] => New York
)
*/