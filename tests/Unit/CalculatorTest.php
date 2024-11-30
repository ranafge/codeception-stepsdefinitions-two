<?php

namespace Tests\Unit;

class CalculatorTest extends \Codeception\Test\Unit
{
    protected Calculator $calculator;
    protected function _before()
    {
        $this->calculator = new Calculator(); // Initialize the Calculator instance
    }

    public function testAddFunctionality()
    {
        $this->assertEquals(3, $this->calculator->add(1, 2)); // Test the add method
    }
    public function testSubFuncionality()
    {
        $this->assertEquals(0, $this->calculator->sub(2, 2));
    }
    public function testMultiplyFunctionality()
    {
        $this->assertEquals(5, $this->calculator->multiply(3, 1));
    }

    public function testZeroDivitionFunctionality()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Division by zero is not allowed.");
        $this->calculator->division(8, 0);
    }
    public function testDivision()
    {
        $this->assertEquals(4, $this->calculator->division(8, 2));
        $this->assertEquals(-4, $this->calculator->division(8, -2));
    }

    public function testDivisionByZero()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Division by zero is not allowed.");
        $this->calculator->division(8, 0);
    }
}
