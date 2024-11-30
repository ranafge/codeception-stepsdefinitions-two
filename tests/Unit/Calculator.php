<?php

namespace Tests\Unit;

use Facebook\WebDriver\Exception\InvalidArgumentException;

class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }
    public function sub($a, $b)
    {
        return $a - $b;
    }
    public function multiply($a, $b)
    {
        return $a * $b;
    }
    public function division($a, $b)
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Division by zero is not allowed.");
        }
        return $a / $b;
    }

    public function reversedAString($string)
    {
        $reverseString = "";
        for ($i = strlen($string) - 1; $i >= 0; $i--) {
            $reverseString .= $string[$i];
        }
        return $reverseString;
    }

    public function isPrime($number) {
        if($number <= 1) {
            return False;
        }
        for ($i = 2; $i<=sqrt($number); $i++) {
            if($number % $i == 0 ){
                return False;
            }
        }
        return True;

    }

    public function fibonacciSerise($n) {
        $fiboSeries = [0,1];
        for( $i=2; $i<$n; $i++) {
            $fiboSeries[] = $fiboSeries[$i-1] + $fiboSeries[$i-2];
        }
        return $fiboSeries;
    }
    public function is_even($n) {
        return $n % 2 == 0 ? 'even': "odd";
    }

    function factorial($n) {
        if ($n == 0) {
            return 1;
        };
        return $n * $this->factorial($n - 1);
    }

    public function is_palindrom($str) {
        $revString = strrev($str);
        return $str == $revString;
    }
    public function sumOfDigits($n) {
        $sum = 0;

        while ($n > 0) {
            $sum += $n % 10;
            $n = (int)($n / 10);
        }
    }
    
}

$newCal = new Calculator();

echo "ADD " . $newCal->add(22, 22);


echo "reverse string of 'hello' is : " . $newCal->reversedAString('hello');
echo "prime is : " . $newCal->isPrime(10);
echo "fac ". $newCal->factorial(3);
echo "This echo for change github action";
