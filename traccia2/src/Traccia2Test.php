<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include('Traccia2.php');
use function Traccia2\uniqueNames as uniqueNames;

final class Traccia2Test extends TestCase
{
    public function testTraccia2(): void
    {
        $array1 = array("eliane","nicolas","pierre");
        $array2 = array("nicolas","eric");
        
        $outputExpected=array("eliane","nicolas","eric","pierre");
        $outputActuel=uniqueNames($array1,$array2);
    
        $this->assertCount(count($outputExpected),$outputActuel);
        foreach ($outputExpected as $value) {
            $this->assertContains($value,$outputActuel);
        }  
    }
    public function testUniqNamesRejectArray1Null(): void
    {
        $array1 = null;
        $array2 = array("nicolas","eric");
        $this->expectException(InvalidArgumentException::class);
        uniqueNames($array1,$array2);
    }
    public function testUniqNamesRejectArray2Null(): void
    {
        $array1 = array("eliane","eloise");
        $array2 = null;
        $this->expectException(InvalidArgumentException::class);
        uniqueNames($array1,$array2);
    }
    public function testUniqNamesRejectAllArray1Null(): void
    {
        $array1 = null;
        $array2 = null;
        $this->expectException(InvalidArgumentException::class);
        uniqueNames($array1,$array2);
    }
}


