<?php

// https://www.codewars.com/kata/beginner-reduce-but-grow/


function grow($a)
{
    return array_reduce($a, function ($carry, $item) {
        return $carry * $item;
    }, 1);
}
