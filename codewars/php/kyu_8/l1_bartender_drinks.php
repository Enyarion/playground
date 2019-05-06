<?php

// https://www.codewars.com/kata/l1-bartender-drinks/


function get_drink_by_profession(string $s): string
{
    $variants = array(
        strtolower("Jabroni") => "Patron Tequila",
        strtolower("School Counselor") => "Anything with Alcohol",
        strtolower("Programmer") => "Hipster Craft Beer",
        strtolower("Bike Gang Member") => "Moonshine",
        strtolower("Politician") => "Your tax dollars",
        strtolower("Rapper") => "Cristal",
    );
    $default_value = "Beer";
    return array_key_exists(strtolower($s), $variants)
        ? $variants[strtolower($s)]
        : $default_value;
}
