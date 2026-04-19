<?php

/*
Tanım:
array_walk() işlevi, bir dizinin her bir elemanı için belirtilen bir işlevi çağırır.
Dikkat! Bu işlev, dizinin anahtarlarını değiştirmez.
Dikkat! Bu işlev, dizinin değerlerini değiştirebilir.

Kullanım:
array_walk(array, function, args)
array: Gerekli. İşlenecek dizi.
function: Gerekli. Her bir dizi elemanı için çağrılacak işlev.
args: İsteğe bağlı. İşlevin kullanacağı ek veri.
*/

function myfunction($value, $key, $sentenceData)
{
    echo "$key $sentenceData $value\n";
}

$colors = array("a" => "red", "b" => "green", "c" => "blue");

array_walk($colors, "myfunction", "has the value");
/* Çıktı:
a has the value red
b has the value green
c has the value blue
*/