<?php

function genrateExcerpt(string $text,int $maxLength=50,string $suffix='...'):string
{
    if (strlen($text) <= $maxLength) {
        $excerpt = $text;
    } else {
        $excerpt = substr($text, 0, $maxLength).$suffix;
    }
    return $excerpt;
}