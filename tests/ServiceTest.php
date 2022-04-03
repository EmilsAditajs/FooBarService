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
        $this->assertSame('Bar', $service->checkNumber(10));
    }

    public function testIfMultipleOfSevenIsQix(): void
    {
        $service = new Service();
        $this->assertSame('Qix', $service->checkNumber(14));
    }

    public function testIfSeveralMultiplesIsFooBar(): void
    {
        $service = new Service();
        $this->assertSame('FooBar', $service->checkNumber(60));
    }

    public function testIfSeveralMultiplesIsBarQix(): void
    {
        $service = new Service();
        $this->assertSame('BarQix', $service->checkNumber(140));
    }

    public function testIfSeveralMultiplesIsFooQix(): void
    {
        $service = new Service();
        $this->assertSame('FooQix', $service->checkNumber(21));
    }

    public function testIfSeveralMultiplesIsFooBarQix(): void
    {
        $service = new Service();
        $this->assertSame('FooBarQix', $service->checkNumber(210));
    }




    public function testIfOccurrenceOfThreeIsFoo(): void
    {
        $service = new Service();
        $this->assertSame('Foo', $service->checkNumber(31));
    }

    public function testIfOccurrenceOfFiveIsBar(): void
    {
        $service = new Service();
        $this->assertSame('Bar', $service->checkNumber(52));
    }

    public function testIfOccurrenceOfSevenIsQix(): void
    {
        $service = new Service();
        $this->assertSame('Qix', $service->checkNumber(71));
    }

    public function testIfSeveralOccurrencesIsFooBar(): void
    {
        $service = new Service();
        $this->assertSame('FooBar', $service->checkNumber(352));
    }

    public function testIfSeveralOccurrencesIsBarQix(): void
    {
        $service = new Service();
        $this->assertSame('BarQix', $service->checkNumber(572));
    }

    public function testIfSeveralOccurrencesIsFooQix(): void
    {
        $service = new Service();
        $this->assertSame('FooQix', $service->checkNumber(374));
    }

    public function testIfSeveralOccurrencesIsFooBarQix(): void
    {
        $service = new Service();
        $this->assertSame('FooBarQix', $service->checkNumber(3572));
    }




    public function testIfOccurrenceAndMultipleOfThreeIsFooFoo(): void
    {
        $service = new Service();
        $this->assertSame('FooFoo', $service->checkNumber(33));
    }

    public function testIfOccurrenceAndMultipleOfFiveIsBarBar(): void
    {
        $service = new Service();
        $this->assertSame('BarBar', $service->checkNumber(50));
    }

    public function testIfOccurrenceAndMultipleOfSevenIsQixQix(): void
    {
        $service = new Service();
        $this->assertSame('QixQix', $service->checkNumber(77));
    }

    public function testIfSeveralOccurrencesAndMultiplesIsFooBarFooBar(): void
    {
        $service = new Service();
        $this->assertSame('FooBarFooBar', $service->checkNumber(135));
    }

    public function testIfSeveralOccurrencesAndMultiplesIsBarQixBarQix(): void
    {
        $service = new Service();
        $this->assertSame('BarQixBarQix', $service->checkNumber(175));
    }

    public function testIfSeveralOccurrencesAndMultiplesIsFooQixFooQix(): void
    {
        $service = new Service();
        $this->assertSame('FooQixFooQix', $service->checkNumber(378));
    }

    public function testIfSeveralOccurrencesAndMultiplesIsFooBarQixFooBarQix(): void
    {
        $service = new Service();
        $this->assertSame('FooBarQixFooBarQix', $service->checkNumber(735));
    }




    public function testIfNoTransformationsReturnString(): void
    {
        $service = new Service();
        $this->assertSame('4', $service->checkNumber(4));
    }
}