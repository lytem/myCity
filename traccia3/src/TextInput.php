<?php
namespace TextInput;

class TextInput{

    protected $buffer;

    function __construct(){
        $this->buffer="";
    }
    public function add($c){
       $this->buffer =$this->buffer . $c;
    }    
    public function getValue(){
        return $this->buffer;
    }    
    
}