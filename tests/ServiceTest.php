<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Service;

class ServiceTest extends TestCase
{
    public function testIfMultipleOfThreeIsFoo(): void
    {
        $service = new Service();
        $this->assertSame('Foo', $service->checkIfMultiple(6));
    }

    public function testIfMultipleOfFiveIsBar(): void
    {
        $service = new Service();
        $this->assertSame('Foo', $service->checkIfMultiple(5));
    }

    public function testIfSeveralMultiplesIsFooBar(): void
    {
        $service = new Service();
        $this->assertSame('FooBar', $service->checkIfMultiple(15));
    }

    public function testIfNoMultiplesReturnString(): void
    {
        $service = new Service();
        $this->assertSame('4', $service->checkIfMultiple(4));
    }
}