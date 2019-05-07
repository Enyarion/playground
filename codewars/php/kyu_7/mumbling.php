<?php

// https://www.codewars.com/kata/mumbling/


function accum($s)
{
    $result = [];
    foreach (str_split($s) as $key => $value) {
        array_push($result, strtoupper($value) . str_repeat(strtolower($value), $key));
    }
    return implode("-", $result);
}
