<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

final class FunctionsTest extends TestCase
{
    /*public function testAddTwoPositiveIntegers(): void
    {
        $this->assertSame(6, addIntegers(3, 3));
    }

    public function testAddTwoNegativeIntegers(): void
    {
        $this->assertSame(-5, addIntegers(-2, -3));
    }

    public function testAddPositiveAndNegativeInteger(): void
    {
        $this->assertSame(1, addIntegers(3, -2));
    }

    public function testAddZeroToInteger(): void
    {
        $this->assertSame(1, addIntegers(1, 0));
    }*/

    public static function additionProvider(): array
    {
        // first, second, expected
        return [
            "two positive integers" => [2, 3, 5],
            "two negative integers" => [-2, -3, -5],
            "positive and negative integers" => [3, -2, 1],
            "adding zero" => [3, 0, 3],
        ];
    }

    #[DataProvider('additionProvider')]
    public function testAddIntegers(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, addIntegers($a, $b));
    }

    public function testAddingIsCommulative(): void
    {
        $this->assertSame(addIntegers(3, 2), addIntegers(3, 2));
    }
}
