<?php

/*
Tanım:
Metaphone fonksiyonu, bir kelimenin telaffuzunu temsil eden bir anahtar oluşturur. 
Bu, kelimelerin fonetik olarak eşleşip eşleşmediğini kontrol etmek için kullanılabilir.

Kullanım:
metaphone(string,length)
string: Girdi kelime.
length: İsteğe bağlı. Metaphone dönüşümünün uzunluğunu belirler. Varsayılan değer 4.
*/

$word1 = "example";
$word2 = "egzample";

$metaphone1 = metaphone($word1);
$metaphone2 = metaphone($word2);

echo "Metaphone of '$word1': $metaphone1\n";
echo "Metaphone of '$word2': $metaphone2\n";

if ($metaphone1 === $metaphone2) {
    echo "The words '$word1' and '$word2' sound similar.\n";
} else {
    echo "The words '$word1' and '$word2' do not sound similar.\n";
}

/* Çıktı:
Metaphone of 'example': EKSMPL
Metaphone of 'egzample': EKSMPL
The words 'example' and 'egzample' sound similar.
*/
