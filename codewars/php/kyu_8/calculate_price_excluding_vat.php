<?php

// https://www.codewars.com/kata/calculate-price-excluding-vat/


function excludingVatPrice($price)
{
    if (is_null($price)) {
        return -1;
    }
    return round($price / 1.15, 2);
}