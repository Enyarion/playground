<?php

// https://www.codewars.com/kata/abbreviate-a-two-word-name/


function abbrevName($name)
{
    return strtoupper(explode(" ", $name)[0][0])
        . '.' .
        strtoupper(explode(" ", $name)[1][0]);
}
