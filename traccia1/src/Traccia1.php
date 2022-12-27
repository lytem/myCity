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
        
    for ($i = 0; $i < $inputArraySize; $i++) {
        $product = 1;
        $inputArrayCopy=$inputArray; // copy array original
        array_splice($inputArrayCopy,$i,1); // remove element position i
        $product=array_product($inputArrayCopy); // multiply element array 
        array_push($outputArray,$product);
      
    }
    return $outputArray;
}

