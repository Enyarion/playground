<?php

# https://www.codewars.com/kata/get-the-middle-character/


function getMiddle($text)
{
    if (strlen($text) % 2) {
        return substr($text, intdiv(strlen($text), 2), 1);
    }
    return substr($text, intdiv(strlen($text), 2) - 1, 2);
}
