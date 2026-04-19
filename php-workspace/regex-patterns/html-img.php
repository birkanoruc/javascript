<?php

$html = [
    "<img src='https://www.example.com/image1.jpg' alt='Image 1' />",
    "<img src='https://www.example.com/image2.jpg' alt='Image 2' /> <img src='https://www.example.com/image2.1.jpg' alt='Image 2.1' />",
    "<img src='https://www.example.com/image3.jpg' alt='Image 3' /> <img src='https://www.example.com/image3.1.jpg' alt='Image 3.1' /> <img src='https://www.example.com/image3.2.jpg' alt='Image 3.2' />",
    "<img src='https://www.example.com/image4.jpg' alt='Image 4' /> <img src='https://www.example.com/image4.1.jpg' alt='Image 4.1' /> <img src='https://www.example.com/image4.2.jpg' alt='Image 4.2' /> <img src='https://www.example.com/image4.3.jpg' alt='Image 4.3' />"
];

$pattern = "/<img\s+src=[\'|\"]+(?<src>[^\'|\"]+)[\'|\"]+\s+alt=[\'|\"](?<alt>[^\'|\"]+)[\'|\"]\s*\/?>/";

foreach ($html as $img) {
    preg_match_all($pattern, $img, $matches, PREG_SET_ORDER);

    foreach ($matches as $match) {
        echo "IMG: " . $match[0] . "\n";
        echo "SRC: " . $match['src'] . "\n";
        echo "ALT: " . $match['alt'] . "\n";
        echo "\n";
    }
}
