<?php

declare(strict_types=1);

namespace App;

enum FizzBuzzEnum: int
{
    case FIZZ = 3;
    case BUZZ = 5;
    case FIZZ_BUZZ = 15;

    public static function isFizz(int $number): bool
    {
        return $number % FizzBuzzEnum::FIZZ->value === 0;
    }
    public static function isBuzz(int $number): bool
    {
        return $number % self::BUZZ->value === 0;
    }
    public static function isFizzBuzz(int $number): bool
    {
        return $number % self::FIZZ_BUZZ->value === 0;
    }
}
