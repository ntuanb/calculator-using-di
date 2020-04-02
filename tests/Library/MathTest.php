<?php

use PHPUnit\Framework\TestCase;

use Calculator\Library\Math;
use Psr\Log\NullLogger;

class MathTest extends TestCase
{
    public function testAddsSuccessfully()
    {
        $mockNullLogger = $this->createMock(NullLogger::class);

        $math = new Math($mockNullLogger, 1);

        $this->assertEquals($math->add(1, 2), 3);
    }

    public function testSubtractsSuccessfully()
    {
        $mockNullLogger = $this->createMock(NullLogger::class);

        $math = new Math($mockNullLogger, 1);

        $this->assertEquals($math->subtract(1, 2), -1);
    }

    public function testMultipliesSuccessfully()
    {
        $mockNullLogger = $this->createMock(NullLogger::class);

        $math = new Math($mockNullLogger, 1);

        $this->assertEquals($math->multiply(1, 2), 2);
    }

    public function testDividesSuccessfully()
    {
        $mockNullLogger = $this->createMock(NullLogger::class);

        $math = new Math($mockNullLogger, 1);

        $this->assertEquals($math->divide(1, 2), 0.5);
    }
}