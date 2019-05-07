<?php

// https://www.codewars.com/kata/exclamation-marks-series-number-3-remove-all-exclamation-marks-from-sentence-except-at-the-end/


function remove(string $s): string
{
    $result = '';
    $flag = False;
    for ($i = strlen($s) - 1; $i >= 0; $i--) {
        if ($flag) {
            if ($s[$i] != '!') {
                $result .= $s[$i];
            }
        } else {
            if ($s[$i] != '!') {
                $flag = True;
            }
            $result .= $s[$i];
        }
    }
    return strrev($result);
}
