<?php

/*
Tanım:
Bu dosya, PHP'de string işlevlerini incelemek için kullanılır. Özellikle, metinleri belirli bir genişlikte sarmak için kullanılan `wordwrap` işlevini içerir.

Kullanım:
string wordwrap ( string $str [, int $width = 75 [, string $break = "\n" [, bool $cut = false ]]] )

Parametreler:
- $str: Sarılacak olan giriş metni.
- $width: (Opsiyonel) Satır genişliği. Varsayılan değer 75'tir.
- $break: (Opsiyonel) Satır sonu karakteri. Varsayılan değer "\n" (yeni satır) karakteridir.
- $cut: (Opsiyonel) Eğer true ise, kelimeler belirtilen genişlikte kesilir. Varsayılan değer false'tur.

Dönüş Değeri:
- Sarılmış metni içeren bir string döner.
*/

$text = "This is a sample text for word wrapping. It should be wrapped at a specific width.";

var_dump(wordwrap($text, 20));

/* Çıktı:
string(82) "This is a sample
text for word
wrapping. It should
be wrapped at a
specific width."
*/