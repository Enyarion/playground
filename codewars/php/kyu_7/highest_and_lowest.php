<?php

// https://www.codewars.com/kata/highest-and-lowest/


function highAndLow($numbers)
{
    $arr = array_map('intval', explode(' ', $numbers));
    return max($arr) . ' ' . min($arr);
}
