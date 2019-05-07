<?php

//  https://www.codewars.com/kata/vowel-count/


function getCount($str) {
    $result = 0;
    foreach (['a', 'e', 'i', 'o', 'u'] as $needle) {
        $result += substr_count($str, $needle);
    }
    return $result;
}
