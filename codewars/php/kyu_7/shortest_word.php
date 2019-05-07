<?php

// https://www.codewars.com/kata/shortest-word/


function findShort($str) {
    return min(array_map('strlen', explode(' ', $str)));
}
