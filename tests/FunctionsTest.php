<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FunctionsTest extends TestCase
{
    public function testAddTwoPositiveIntegers(): void
    {
        $this->assertSame(6, addIntegers(2, 3));
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
    }

    public function testAddingIsCommulative(): void
    {
        $this->assertSame(addIntegers(3, 2), addIntegers(3, 2));
    }
}
