<?php

/*

Tanım ve Kullanım
array_fill() işlevi, belirtilen bir değerle belirtilen bir aralıkta bir dizi oluşturur.
array_fill(start_index, num, value)
start_index: Dizinin başlangıç anahtarı.
num: Dizinin kaç eleman içereceği.
value: Diziye atanacak değer.
*/

$colors = array_fill(5, 6, "red");
print_r($colors);
// Çıktı: Array ( [5] => red [6] => red [7] => red [8] => red [9] => red [10] => red )
