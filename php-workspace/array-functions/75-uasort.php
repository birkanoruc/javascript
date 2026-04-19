<?php

/*
Tanım:
uasort() işlevi, bir diziyi değerlerine göre sıralar ve sıralama işlemi sırasında bir geri çağırma işlevi kullanır. Bu işlev, sıralama işlemi sırasında dizinin anahtarlarını korur.
Dikkat! Bu işlev, sıralama işlemi sırasında dizinin anahtarlarını korur.
Dikkat! Bu işlev, sıralama işlemi sırasında bir geri çağırma işlevi kullanır.
*/

function myfunction($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

uasort($age, "myfunction");

print_r($age);
/* Çıktı:
Array
(
    [Peter] => 35
    [Ben] => 37
    [Joe] => 43
)
*/