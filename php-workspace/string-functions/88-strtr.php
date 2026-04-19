<?php

/*
Tanım:
strtr() işlevi, bir dizgedeki belirli karakterleri veya alt dizgeleri başka karakterler veya alt dizgelerle değiştirir.

Kullanım:
string strtr(string $dizge, string $eski_karakterler, string $yeni_karakterler)
veya
string strtr(string $dizge, array $degistirme_cifti)

Parametreler:
- $dizge: Değişiklik yapılacak olan giriş dizgesi.
- $eski_karakterler: Değiştirilecek karakterleri içeren dizge.
- $yeni_karakterler: Eski karakterlerin yerine geçecek karakterleri içeren dizge.
- $degistirme_cifti: Değiştirilecek alt dizgeler ve onların yerine geçecek alt dizgeleri içeren bir dizi.

Dönüş Değeri:
Değişikliklerin uygulandığı yeni dizgeyi döner.
*/

$dizge = "Hello, World!";
$eski_karakterler = "l,o";
$yeni_karakterler = "i,u";

$degistirilmis_dizge = strtr($dizge, $eski_karakterler, $yeni_karakterler);
echo $degistirilmis_dizge;
// Çıktı: Heiiu, Wurid!