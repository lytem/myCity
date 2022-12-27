<?php
namespace NumericInput;

use InvalidArgumentException;
include('TextInput.php');
use TextInput\TextInput;

class NumericInput extends TextInput{

    function __construct()
    {
        parent::__construct();
    }

    public function add($c){

        if (is_numeric($c)) {
            parent::add($c);
        }
        else{
            throw new InvalidArgumentException("Input must be number");
        }
        
    }
}