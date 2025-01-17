<?php

declare(strict_types=1);

namespace App\Tests;

use App\FizzBuzzEnum;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(FizzBuzzEnum::class)]
class FizzBuzzEnumTest extends TestCase
{
    public function testIsFizz(): void
    {
        $result = FizzBuzzEnum::isFizz(3);

        $this->assertTrue($result);
    }

    public function testIsNotFizz(): void
    {
        $result = FizzBuzzEnum::isFizz(1);

        $this->assertFalse($result);
    }
    public function testIBuzz(): void
    {
        $result = FizzBuzzEnum::isBuzz(5);

        $this->assertTrue($result);
    }

    public function testIsNotBuzz(): void
    {
        $result = FizzBuzzEnum::isBuzz(1);

        $this->assertFalse($result);
    }

    public function testIsFizzBuzz(): void
    {
        $result = FizzBuzzEnum::isFizzBuzz(15);

        $this->assertTrue($result);
    }

    public function testIsNotFizzBuzz(): void
    {
        $result = FizzBuzzEnum::isFizzBuzz(1);

        $this->assertFalse($result);
    }
}
