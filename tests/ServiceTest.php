<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Service;

class ServiceTest extends TestCase
{
    public function testIfMultipleOfThreeIsFoo(): void
    {
        $service = new Service();
        $this->assertSame('Foo', $service->checkNumber(6));
    }

    public function testIfMultipleOfFiveIsBar(): void
    {
        $service = new Service();
        $this->assertSame('Bar', $service->checkNumber(5));
    }

    public function testIfSeveralMultiplesIsFooBar(): void
    {
        $service = new Service();
        $this->assertSame('FooBar', $service->checkNumber(15));
    }

    public function testIfNoMultiplesReturnString(): void
    {
        $service = new Service();
        $this->assertSame('4', $service->checkNumber(4));
    }
}