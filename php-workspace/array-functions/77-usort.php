<?php

/*
Tanım:
usort() işlevi, kullanıcı tanımlı bir karşılaştırma fonksiyonu kullanarak bir diziyi değerlere göre sıralar.
Bu işlev, bir diziyi sıralamak için bir kullanıcı tanımlı işlev kullanır.

Kullanım:
usort(array, myfunction)
array: Sıralanacak dizi.
myfunction: Sıralama işlemi sırasında kullanılacak geri çağırma işlevi.
*/

function myfunction($a, $b)
{
    if ($a == $b) return 0;
    return ($a < $b) ? -1 : 1;
}

$a = array(4, 2, 8, 6);
usort($a, "myfunction");

foreach ($a as $key => $value) {
    echo "[" . $key . "] => " . $value;
    echo "\n";
}
/* Çıktı:
[0] => 2
[1] => 4
[2] => 6
[3] => 8
*/