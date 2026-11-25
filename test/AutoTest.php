<?php

declare(strict_types=1);

namespace AutomationTest;

use Automation\Auto;
use PHPUnit\Framework\TestCase;

class AutoTest extends TestCase
{
    public function testConstructor(): void
    {
        $auto = new Auto('foo');
        $this->assertSame('foo', $auto->getName());
    }

    public function testSetName(): void
    {
        $auto = new Auto('foo');
        $auto->setName('bar');
        $this->assertSame('bar', $auto->getName());
    }
}
