<?php

use PHPUnit\Framework\TestCase;
use src\FizzBuzz;

final class FizzBuzzTest extends TestCase
{
    function testFizz3(): void
    {
        $number = 3;
        $expected = "Fizz";

        $result = FizzBuzz::printFizzBuzz($number);
        $this->assertEquals($expected, $result);
    }

    function testFizz6(): void
    {
        $number = 6;
        $expected = "Fizz";

        $result = FizzBuzz::printFizzBuzz($number);
        $this->assertEquals($expected, $result);
    }

    function testBuzz5(): void
    {
        $number = 5;
        $expected = "Buzz";

        $result = FizzBuzz::printFizzBuzz($number);
        $this->assertEquals($expected, $result);
    }

    function testBuzz10(): void
    {
        $number = 10;
        $expected = "Buzz";

        $result = FizzBuzz::printFizzBuzz($number);
        $this->assertEquals($expected, $result);
    }

    function testFizzBuzz15(): void
    {
        $number = 15;
        $expected = "FizzBuzz";

        $result = FizzBuzz::printFizzBuzz($number);
        $this->assertEquals($expected, $result);
    }

    function testFizzBuzz30(): void
    {
        $number = 30;
        $expected = "FizzBuzz";

        $result = FizzBuzz::printFizzBuzz($number);
        $this->assertEquals($expected, $result);
    }

    function testNotFizzBuzz1(): void
    {
        $number = 1;
        $expected = 1;

        $result = FizzBuzz::printFizzBuzz($number);
        $this->assertEquals($expected, $result);
    }


}