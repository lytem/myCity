<?php
namespace Traccia2;

use InvalidArgumentException;

function uniqueNames($array1,$array2){
     
     if ($array1== null||$array2==null) {
        throw new InvalidArgumentException("Array cannot be null");
    }
    return array_unique(array_merge($array1,$array2));  
    
}
