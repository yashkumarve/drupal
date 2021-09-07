<?php
require 'Calculator.php';
 
use PHPUnit\Framework\TestCase;
 
class CalculatorTests extends TestCase
{
    private $calculator;
 
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown(): void
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
 
    public function testSubtract()
    {
        $result = $this->calculator->subtract(5, 3);
        $this->assertEquals(2, $result);
    }
 
    public function testMultiply()
    {
        $result = $this->calculator->multiply(8, 5);
        $this->assertEquals(40, $result);
    }
}