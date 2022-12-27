<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include('NumericInput.php');
use NumericInput\NumericInput as NumericInput;

final class NumericInputTest extends TestCase
{
    public function testAdd(): void
    {
       
     $numericInput=new NumericInput();
     $numericInput->add(1);
     $numericInput->add(2);
     $numericInput->add(4);
     
     $outputExpected="124";
     $outputActual=$numericInput->getValue();
     $this->assertSame($outputExpected,$outputActual); 

    }
    public function testAddRejectNanCaracter(): void
    {
       
     $numericInput=new NumericInput();
     $numericInput->add(1);
     $numericInput->add(2);
     $this->expectException(InvalidArgumentException::class);
     $numericInput->add('k');
     
    }
  
}