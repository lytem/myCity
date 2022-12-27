<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include ("Traccia1.php");
use function Traccia1\multiply as multiply;

final class Traccia1Test extends TestCase
{
    public function testMultiply(): void
    {
       $inputArray=array(1,2,3);
       $actualOutput=multiply($inputArray);
       $expectedOutput=array(6,3,2);
       $this->assertSame($expectedOutput,$actualOutput);
                      
    }
    public function testMultiplyRejestEmptyArray(): void
    {
        $inputArray=array();
        $this->expectException(\InvalidArgumentException::class);    
        multiply($inputArray);     
    }
 }