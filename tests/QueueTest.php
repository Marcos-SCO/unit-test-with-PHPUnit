<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Depends;

final class QueueTest extends TestCase
{
    private Queue $queue;

    // called before each test method
    protected function setUp(): void
    {
        $this->queue = new Queue;
    }

    // Runs after each test method
    protected function tearDown(): void
    {
        unset($this->queue);
    }

    // Producer test
    public function testNewQueueIsEmpty(): void
    {
        // $queue = new Queue;

        $this->assertSame(0, $this->queue->getSize());

        // return $queue;
    }

    // #[Depends('testNewQueueIsEmpty')]
    // Dependent consumer test
    public function testPushAddsItem(): void
    {
        // $queue = new Queue;

        $this->queue->push('an item');

        $this->assertSame(1, $this->queue->getSize());

        // return $queue;
    }

    // #[Depends('testPushAddsItem')]
    public function testPopRemoveAndReturnsItem(): void
    {
        // $queue = new Queue;

        $this->queue->push('an item');

        $this->assertSame('an item', $this->queue->pop());
        $this->assertSame(0, $this->queue->getSize());
    }

    public function testAnItemIsRemovedFromTheFrontOfTheQueue(): void
    {
        $this->queue->push('first');
        $this->queue->push('second');

        $this->assertSame('first', $this->queue->pop());
    }

    public function testPopThrowsExceptionWhenQueueIsEmpty(): void
    {
        // Needs to be before the call that causes the exception
        $this->expectException(\UnderflowException::class);
        $this->expectExceptionMessage('Queue is empty');

        $this->queue->pop();
    }
}
