<?php

namespace Traccia4;

use InvalidArgumentException;

use function PHPUnit\Framework\isNan;

function checkLastDigit($number1, $number2)
{
    $isvalid = false;

    if (!is_numeric($number1)||!is_numeric($number2)) {
        throw new InvalidArgumentException('Input must be number');
    }
    
    if ($number1*$number2>0 && $number1>0 && ($number1-$number2)%10==0) {
        $isvalid=true;
    }
    return $isvalid;
}
