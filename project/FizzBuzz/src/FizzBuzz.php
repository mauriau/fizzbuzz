<?php

declare(strict_types=1);

namespace App;

final class FizzBuzz
{
    public function __construct(private int $limit)
    {
    }

    public function changeLimit(int $limit): void
    {
        $this->limit = $limit;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function run(): string
    {
        $result = "";
        for ($i = 1; $i <= $this->limit; ++$i) {
            $result .=  $this->getFizzBuzzString($i);
        }

        return $result;
    }

    private function getFizzBuzzString(int $number): string
    {
        if (FizzBuzzEnum::isFizzBuzz($number)) {
            return "FizzBuzz";
        }

        if (FizzBuzzEnum::isFizz($number)) {
            return "Fizz";
        }

        if (FizzBuzzEnum::isBuzz($number)) {
            return "Buzz";
        }

        return (string) $number;
    }
}
