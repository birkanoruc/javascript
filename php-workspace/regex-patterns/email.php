<?php

$text = "iletisim@birkanoruc.com.tr adresinden güzel bir email aldim. peki bu .com uzantılı email adreslerinden çektiğimiz nedir be kardeşim. onunla beraber delphixdfd@gmail.com diye ayri bir ergen zamanlarimda aldigim email adresi de mevcut :D";

$pattern = "/(?<username>\w+)@(?<domain>\w+)\.(?<extension>[a-zA-Z]{2,})(?:\.(?<extensionTwo>[a-zA-Z]{2,}))?/";

preg_match_all($pattern, $text, $matches, PREG_SET_ORDER);

foreach ($matches as $match) {
    echo "Email: " . $match[0] . "\n";
    echo "Username: " . $match['username'] . "\n";
    echo "Domain: " . $match['domain'] . "\n";
    echo "Extension: " . $match['extension'] . "\n";
    if (isset($match['extensionTwo'])) echo "Extension Two: " . $match['extensionTwo'] . "\n";
    echo "\n";
}
