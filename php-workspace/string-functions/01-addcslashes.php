<?php

/*
Tanım: 
addcslashes() işlevi, bir dizenin belirtilen karakterlerini ters bölü işareti ile kaçınarak ekler.

Kullanım:
addcslashes(string, characters)
string: Gerekli. İşlenecek dize.
characters: Gerekli. Kaçınılacak karakterler.
*/

$str = "Hello World!";

echo addcslashes($str, 'W');
// Çıktı: Hello \W\orld\!