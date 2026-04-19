<?php

/*
Tanım:
addslashes() işlevi, bir dizenin belirli karakterlerini ters bölü işareti ile kaçınarak ekler.

Kullanım:
addslashes(string)
string: Gerekli. İşlenecek dize.
*/

$str = 'What does "yolo" mean?';

echo addslashes($str);
// Çıktı: What does \"yolo\" mean?