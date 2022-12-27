<?php
namespace Traccia1;
use InvalidArgumentException;

function multiply($inputArray)
{
    $outputArray = array();
    $inputArraySize = count($inputArray);
    
    if ($inputArraySize==0) {
      throw new InvalidArgumentException("The array cannot be empty");                  
    }
        
    for ($i = 0; $i < $inputArraySize; $i++) { // i posizione corrente
        $product = 1; // initialise prodotto 
        for ($j = 0; $j < $inputArraySize; $j++) {// j altre posizioni
            if ($i != $j) {
                $product = $product * $inputArray[$j];
            }
            if ($j == $inputArraySize - 1) {
                array_push($outputArray, $product);
            }
        }
    }
    return $outputArray;
}

