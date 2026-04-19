<?php

/*
Tanım:
prev() işlevi, bir dizinin göstericisini bir önceki elemana taşır ve bu elemanı döndürür.

Kullanım:
prev(array)
array: Gerekli. İşlenecek dizi.
*/

$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "\n";
echo next($people) . "\n";
echo prev($people);
