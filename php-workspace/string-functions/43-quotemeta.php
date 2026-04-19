<?php

/*
Tanım:
quotemeta() işlevi, bir dizgedeki özel karakterleri ters eğik çizgi (\) ile kaçış dizisi haline getirir.

Kullanım:
quotemeta(string $input): string

Dönen Değer:
- Özel karakterleri kaçış dizisiyle işlenmiş bir dizge döndürür.

Özel Karakterler:
- `. \ + * ? [ ^ ] ( ) { } = ! < > | : -` gibi karakterler kaçış dizisiyle işlenir.

Ne İçin Kullanılır?
- Düzenli ifadeler (regex) veya özel karakterleri içeren metinleri güvenli hale getirmek için kullanılır.

Örnek Kullanım:
*/

$originalText = "Merhaba. Bu (özel) karakterleri kaçış dizisi ile koruyalım? +*";
$escapedText = quotemeta($originalText);

echo "Orijinal Metin: $originalText\n";
echo "Kaçış Dizisi Eklenmiş Metin: $escapedText\n";

/*
Çıktı:
Orijinal Metin: Merhaba. Bu (özel) karakterleri kaçış dizisi ile koruyalım? +*
Kaçış Dizisi Eklenmiş Metin: Merhaba\. Bu \(özel\) karakterleri kaçış dizisi ile koruyalım\? \+\*
*/