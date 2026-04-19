<?php

/*
Tanım: 
md5_file() işlevi,

Kullanım: 
md5_file(file,raw)
file: Gerekli. İşlenecek dosya.
raw: Opsiyonel. Varsayılan değeri false'dır. True olarak ayarlanırsa, işlev dosya içeriğini raw olarak dönüşür.
*/

$filename = "test.txt";

$md5file = md5_file($filename);

echo $md5file;
