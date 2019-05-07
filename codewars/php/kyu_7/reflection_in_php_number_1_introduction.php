<?php

// https://www.codewars.com/kata/reflection-in-php-number-1-introduction/


function get_info($fn)
{
    $refFunc = new ReflectionFunction($fn);
    return array(
        $refFunc->getNumberOfParameters(),
        $refFunc->getNumberOfRequiredParameters(),
        $refFunc->hasReturnType(),
        $refFunc->isClosure(),
        $refFunc->isInternal(),
        $refFunc->isUserDefined(),
    );
}
