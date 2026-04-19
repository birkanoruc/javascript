<?php

$text = "
[https://www.example.com/~example-page~Example Page]
[https://www.example.com/another-page-Another Page]
[https://www.example.com/yet-another-page|Yet Another Page]
";

$pattern = "/(?<url>(?<=\[).*)[\~|\,|\-|\|](?<title>.*(?=\]))/";

preg_match_all($pattern, $text, $matches);

foreach ($matches['url'] as $index => $url) {
    echo "URL: " . $url . "\n";
    echo "Title: " . $matches['title'][$index] . "\n";
    echo "\n";
}
