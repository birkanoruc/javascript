<?php

$html = [
    "<a href='https://www.example.com'>Text1</a>",
    "<a href='https://www.example.com'>Text2</a> <a href='https://www.example.com'>Text2.1</a>",
    "<a href='https://www.exampsle.com'>Text3</a> <a href='https://www.example.com'>Text3.1</a> <a href='https://www.example.com'>Text3.2</a>",
    "<a href='https://www.exassmple.com'>Text4</a> <a href='https://www.example.com'>Text4.1</a> <a href='https://www.example.com'>Text4.2</a> <a href='https://www.example.com'>Text4.3</a>"
];

$pattern = '/<a\s+href=[\'|\"]+(?<href>[^\'|\"]+)[\'|\"]+>(?<text>[^\<]+)<\/a>/';

foreach ($html as $link) {
    preg_match_all($pattern, $link, $matches, PREG_SET_ORDER);

    foreach ($matches as $match) {
        echo "A: " . $match[0] . "\n";
        echo "HREF: " . $match['href'] . "\n";
        echo "TEXT: " . $match['text'] . "\n";
        echo "\n";
    }
}
