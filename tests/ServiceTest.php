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

    public function testIfMultipleOfSevenIsQix(): void
    {
        $service = new Service();
        $this->assertSame('Qix', $service->checkNumber(14));
    }

    public function testIfSeveralMultiplesIsFooBar(): void
    {
        $service = new Service();
        $this->assertSame('FooBar', $service->checkNumber(15));
    }

    public function testIfSeveralMultiplesIsBarQix(): void
    {
        $service = new Service();
        $this->assertSame('BarQix', $service->checkNumber(35));
    }

    public function testIfSeveralMultiplesIsFooQix(): void
    {
        $service = new Service();
        $this->assertSame('FooQix', $service->checkNumber(21));
    }

    public function testIfSeveralMultiplesIsFooBarQix(): void
    {
        $service = new Service();
        $this->assertSame('FooBarQix', $service->checkNumber(105));
    }

    public function testIfNoMultiplesReturnString(): void
    {
        $service = new Service();
        $this->assertSame('4', $service->checkNumber(4));
    }
}