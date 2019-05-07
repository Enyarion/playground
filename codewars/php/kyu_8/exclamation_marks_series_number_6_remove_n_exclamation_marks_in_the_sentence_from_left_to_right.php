<?php

// https://www.codewars.com/kata/exclamation-marks-series-number-6-remove-n-exclamation-marks-in-the-sentence-from-left-to-right/


function remove(string $s, int $n): string
{
    $result = '';
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] == '!' && $n > 0) {
            $n--;
        } else {
            $result .= $s[$i];
        }
    }
    return $result;
}
