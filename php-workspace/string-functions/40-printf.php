<?php

/*
Tanım:
printf() işlevi, belirtilen biçimlendirme kurallarına göre bir dize oluşturur ve çıktıyı ekrana yazdırır.

Kullanım:
printf(format, arg1, arg2, ...)

Dönen değer:
Başarıyla yazdırılan karakter sayısını döndürür.

Biçimlendirme Yer Tutanları:
%d - Ondalık sayı (integer)
%f - Ondalık sayı (float)
%s - Metin (string)
%c - Tek bir karakter
%x - Küçük harfli onaltılık (hexadecimal) sayı
%X - Büyük harfli onaltılık (hexadecimal) sayı
%o - Sekizlik (octal) sayı
%b - İkilik (binary) sayı
%e - Bilimsel gösterim (küçük harf, örn: 1.2e+2)
%E - Bilimsel gösterim (büyük harf, örn: 1.2E+2)
%% - Yüzde işareti ("%")

Özel Biçimlendirme:
- %.2f : Ondalık sayıyı 2 basamaklı gösterir.
- %03d : Sayıyı en az 3 basamaklı gösterir, gerekirse başına sıfır ekler.
- %-10s : Metni sola hizalar ve 10 karakter genişliğinde gösterir.
- %+d : Sayı pozitifse "+" işareti ekler.
*/

$num = 42;
$floatNum = 3.14159;
$str = "PHP";

// Kullanım Örnekleri
printf("Tam sayı: %d\n", $num);
// Çıktı: Tam sayı: 42

printf("Ondalık sayı: %.2f\n", $floatNum);
// Çıktı: Ondalık sayı: 3.14

printf("Metin: %s\n", $str);
// Çıktı: Metin: PHP

printf("Metin 1: %s, Metin2: %s\n", "Merhaba", "Dünya!");
// Çıktı: Metin 1: Merhaba, Metin2: Dünya!

printf("Hexadecimal: %x\n", $num);
// Çıktı: Hexadecimal: 2a

printf("Binary: %b\n", $num);
// Çıktı: Binary: 101010

printf("Pozitif sayı ile işaret: %+d\n", $num);
// Çıktı: Pozitif sayı ile işaret: +42

printf("Sola hizalı metin: %-10s Bitti!\n", $str);
// Çıktı: Sola hizalı metin: PHP       Bitti!