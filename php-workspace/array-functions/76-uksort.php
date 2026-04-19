<?php

/*
Tanım:
uksort() işlevi, kullanıcı tanımlı bir karşılaştırma fonksiyonu kullanarak bir diziyi anahtarlara göre sıralar.
Dikkat! Bu işlev, sıralama işlemi sırasında bir geri çağırma işlevi kullanır.

Kullanım:
uksort(array, myfunction)
array: Sıralanacak dizi.
myfunction: Sıralama işlemi sırasında kullanılacak geri çağırma işlevi.
*/

function myfunction($a, $b)
{
    if ($a == $b) return 0;
    return ($a < $b) ? -1 : 1;
}

$arr = array("a" => 4, "b" => 2, "c" => 8, "d" => 6);
uksort($arr, "myfunction");

foreach ($arr as $key => $value) {
    echo "[" . $key . "] => " . $value;
    echo "\n";
}
/* Çıktı:
[a] => 4
[b] => 2
[c] => 8
[d] => 6
*/