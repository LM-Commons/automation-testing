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
        $this->assertEquals('foo', $auto->getName());
    }
}
