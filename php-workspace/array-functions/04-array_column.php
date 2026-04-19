<?php
/*
Tanım:
array_column() işlevi, çok boyutlu bir diziden belirli bir sütunu döndürür.

Kullanım:
array_column(array, column_key, index_key)
array: Girdi dizisi.
column_key: Döndürülecek sütunun anahtarı.
index_key: Döndürülen dizinin anahtarlarının kullanılacağı sütunun anahtarı. Bu parametre belirtilmezse, dizinin anahtarları sayısal olarak otomatik belirlenecektir.
*/

$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

$first_names = array_column($records, 'first_name', 'id');
print_r($first_names);
/* Çıktı: 
Array
(
    [0] => John
    [1] => Sally
    [2] => Jane
    [3] => Peter
)
*/

$last_names = array_column($records, 'last_name');
print_r($last_names);
/* Çıktı:
Array
(
    [0] => Doe
    [1] => Smith
    [2] => Jones
    [3] => Doe
)
*/