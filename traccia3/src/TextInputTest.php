<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include('TextInput.php');
use TextInput\TextInput as TextInput;

final class TextInputTest extends TestCase
{
    public function testAdd(): void
    {
       
     $textInput=new TextInput();
     $textInput->add('h');
     $textInput->add('e');
     $textInput->add('l');
     $textInput->add('l');
     $textInput->add('o');
     $outputExpected="hello";
     $outputActual=$textInput->getValue();
     $this->assertSame($outputExpected,$outputActual); 

    }
  
}