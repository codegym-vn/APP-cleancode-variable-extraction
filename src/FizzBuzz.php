<?php

namespace src;

class FizzBuzz
{
    static function printFizzBuzz(int $number): string
    {
        if ($number % 3 == 0 && $number % 5 == 0) {
            return "FizzBuzz";
        } elseif ($number % 3 == 0) {
            return "Fizz";
        } elseif ($number % 5 == 0) {
            return "Buzz";
        } else {
            return $number . "";
        }
    }
}