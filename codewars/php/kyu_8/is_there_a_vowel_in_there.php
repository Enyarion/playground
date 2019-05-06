<?php

// https://www.codewars.com/kata/is-there-a-vowel-in-there/


function isVow(array $a)
{
    $codes2vowels = array(
        ord("a") => "a",
        ord("e") => "e",
        ord("i") => "i",
        ord("o") => "o",
        ord("u") => "u"
    );
    foreach ($a as &$value) {
        if (array_key_exists($value, $codes2vowels)) {
            $value = $codes2vowels[$value];
        }
    }
    return $a;
}
