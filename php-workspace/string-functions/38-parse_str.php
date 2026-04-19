<?php

/*
Tanım:
parse_str işlevi, bir sorgu dizesini ayrıştırarak değişkenlere atar.

Kullanım:
parse_str(string $str, array &$arr): void
string $str: zorunlu. Ayrıştırılacak sorgu dize.
array &$arr: geçici. Ayrıştırılmış değişkenlerin saklanacağı dizi.
*/

$queryString = "name=John&age=25&city=NewYork";

parse_str($queryString, $output);

echo "Name: " . $output['name'] . "\n";
echo "Age: " . $output['age'] . "\n";
echo "City: " . $output['city'] . "\n";

/*
Name: John
Age: 25
City: NewYork
*/