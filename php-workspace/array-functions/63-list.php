<?php

/*
Tanım:
list() işlevi, bir diziden değerleri değişkenlere atar.

Kullanım:
list(var1, var2, var3, ...)
var1: Gerekli. Dizi elemanlarının atanacağı değişken.
var2, ...: İsteğe bağlı. Dizi elemanlarının atanacağı diğer değişkenler.
*/

$colors = array("red", "green", "blue");

list($a, $b, $c) = $colors;

echo $a . "\n";
echo $b . "\n";
echo $c . "\n";
/* Çıktı:
red
green
blue
*/
