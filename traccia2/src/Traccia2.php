<?php
namespace Traccia2;

use InvalidArgumentException;

function uniqueNames($array1,$array2){
     $output=array();

     if ($array1== null||$array2==null) {
        throw new InvalidArgumentException("Array cannot be null");
        
     }
     $output=$array1;// initialise output with array1
    foreach ($array2 as $value2) {
        $ispresent=false;
        foreach ($output as  $value) {
            if ($value2==$value ) {
                $ispresent=true;
                break;
            }
        }
        if($ispresent==false){
            array_push($output,$value2);
        }
       
    }
    return $output;
}
