<?php

/*
Tanım:
crypt() işlevi, bir dizenin MD5 veya SHA-256 algoritmasını kullanarak şifrelenmiş bir sürümünü döndürür.

Kullanım:
crypt(string, salt)
string: Gerekli. Şifrelenmesi gereken dize.
salt: İsteğe bağlı. Şifreleme işlemi için kullanılacak salt. Bu parametre belirtilmezse, PHP, rastgele bir salt oluşturur.

Not: Bu işlev, PHP 5.6.0 sürümünden itibaren DES ve Blowfish algoritmalarını desteklememektedir.
*/

$password = "123456";

$salt = '$6$rounds=5000$usesomesillystringforsalt$'; // SHA-512 için özel salt

$hashed = crypt("123456", $salt); // Varsayılan şifreleme

echo $hashed;
// Çıktı: $6$rounds=5000$usesomesillystri$5WxXV00Jv1lKssvR375aHSbVfBNbxuKpQx0oQSArCRfoC4IDPBd55jdlRyNa/zsrYE6EJKIQd6sNKKxhyHOne0

echo "\n";

echo (crypt($password, $hashed) === $hashed) ? "Şifre doğru!" : "Şifre yanlış!";
// Şifre doğru!