<?php

function sirala(iterable $elemanlar): void
{
    foreach ($elemanlar as $eleman) {
        echo $eleman . " ";
    }
}
sirala([1, 2, 3]);
