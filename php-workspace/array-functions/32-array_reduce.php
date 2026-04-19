<?php

/*
Tanım ve Kullanım
array_reduce() işlevi, bir diziyi bir değere indirger.
array_reduce(array, callback, initial)
array: Girdi dizisi.
callback: Her adımda çağrılacak işlev.
initial: İlk değer.
*/

$numbers = array(1, 2, 3, 4, 5);

/**
 * @var int $carry
 * @var int $item
 * @return int
 * $carry: Bir önceki adımdan dönen değer.
 * $item: Dizinin o anki elemanı.
 */
$sum = array_reduce($numbers, function ($carry, $item) {
    return $carry + $item;
}, 0);

echo $sum; // Çıktı: 15