<?php

namespace App;

final class FizzBuzz
{
    private const int FIZZ_VALUE = 3;
    private const int BUZZ_VALUE = 5;

    private const int FiZZBUZZ_DENOMINATOR = 15;

    public function __construct(private int $limit)
    {

    }

    public function changeLimit(int $limit): void
    {
        $this->limit = $limit;
    }

    private function getFizzBuzzString(int $number): string
    {
        if ($this->isFizzBuzz($number)) {
            return "FizzBuzz";
        }

        if ($this->isFizz($number)) {
            return "Fizz";
        }

        if ($this->isBuzz($number)) {
            return "Buzz";
        }

        return (string) $number;
    }

    public function run(): string
    {
        $result = "";
        for ($i = 1; $i <= $this->limit; $i++) {
            $result .=  $this->getFizzBuzzString($i);
        }

        return $result;
    }

    private function isFizz(int $number): bool
    {
        return $number % self::FIZZ_VALUE === 0;
    }
    private function isBuzz(int $number): bool
    {
        return $number % self::BUZZ_VALUE === 0;
    }
    private function isFizzBuzz(int $number): bool
    {
        return $number % self::FiZZBUZZ_DENOMINATOR === 0;
    }
}
