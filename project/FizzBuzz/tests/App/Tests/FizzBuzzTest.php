<?php

declare(strict_types=1);

namespace App\Tests;

use App\FizzBuzz;
use App\FizzBuzzEnum;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(FizzBuzz::class)]
#[UsesClass(FizzBuzzEnum::class)]
class FizzBuzzTest extends TestCase
{
    private FizzBuzz $sut;

    public function setUp(): void
    {
        $this->sut = new FizzBuzz(150);
    }

    public function testItConstructed(): void
    {
        $this->assertSame(150, $this->sut->getLimit());
    }

    public function testIChangeLimit(): void
    {
        $this->sut->changeLimit(3);

        $this->assertSame(3, $this->sut->getLimit());
    }

    public function testItFizz(): void
    {
        $expect = "12Fizz";
        $this->sut->changeLimit(3);

        $result = $this->sut->run();

        $this->assertSame($expect, $result);
    }

    public function testItBuzz(): void
    {
        $expect = "12Fizz4Buzz";
        $this->sut->changeLimit(5);

        $result = $this->sut->run();

        $this->assertSame($expect, $result);
    }

    public function testItFizzBuzz(): void
    {
        $expect = "12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz";
        $this->sut->changeLimit(15);

        $result = $this->sut->run();

        $this->assertSame($expect, $result);
    }
}
