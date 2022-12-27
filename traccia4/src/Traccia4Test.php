<?php
 declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include('Traccia4.php');
use function Traccia4\checkLastDigit as checkLastDigit;
final class Traccia4Test extends TestCase
{
    public function testcheckLastDigit(): void
    {
        $number1=2;
        $number2=12;        
        $outputExpected=true;
        $outputActual=checkLastDigit($number1,$number2);

        $this->assertSame($outputExpected,$outputActual);
    }
    public function testcheckLastDigit1(): void
    {
        $number1=24;
        $number2=12;        
        $outputExpected=false;
        $outputActual=checkLastDigit($number1,$number2);

        $this->assertSame($outputExpected,$outputActual);
    }
    public function testException(): void
    {
        $number1="ly";
        $number2=12;  
        $this->expectException(InvalidArgumentException::class);
        checkLastDigit($number1,$number2);
    }

}