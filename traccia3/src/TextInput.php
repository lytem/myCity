<?php
namespace TextInput;

class TextInput{

    protected $buffer;// variabile di classe

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