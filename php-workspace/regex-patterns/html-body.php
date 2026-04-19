<?php

$html = "<body>
    <h1>Heading 1</h1>
    <p>Paragraph 1</p>
    <h2>Heading 2</h2>
    <p>Paragraph 2</p>
    <h3>Heading 3</h3>
    <p>Paragraph 3</p>
    <h4>Heading 4</h4>
    <p>Paragraph 4</p>
    <h5>Heading 5</h5>
    <p>Paragraph 5</p>
    <h6>Heading 6</h6>
    <p>Paragraph 6</p>
    <a href='https://www.example.com'>Link 1</a>
    <img src='https://www.example.com/image.jpg' alt='Image 1' />
</body>";

$pattern = "/(?<body>(?<=<body>)[\w|\W]*(?=<\/body>))/";

if (preg_match($pattern, $html, $matches)) {
    echo "Body: " . $matches["body"] . "\n";
}
