<?php

// https://www.codewars.com/kata/if-you-cant-sleep-just-count-sheep/


function countsheep($num)
{
    $result = '';
    for ($i = 1; $i <= $num; $i++) {
        $result .= $i . ' sheep...';
    }
    return $result;
}
