<?php

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(FizzBuzz::class)]
class FizzBuzzTest extends TestCase
{
    private FizzBuzz $sut;

    public function setUp(): void
    {
        $this->sut = new FizzBuzz(150);
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