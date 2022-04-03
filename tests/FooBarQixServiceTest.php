<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\FooBarQixService;

class FooBarQixServiceTest extends TestCase
{
    public function testIfMultipleOfThreeIsFoo(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Foo', $service->checkNumber(6));
    }

    public function testIfMultipleOfFiveIsBar(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Bar', $service->checkNumber(10));
    }

    public function testIfMultipleOfSevenIsQix(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Qix', $service->checkNumber(14));
    }

    public function testIfSeveralMultiplesIsFooBar(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Foo, Bar', $service->checkNumber(60));
    }

    public function testIfSeveralMultiplesIsBarQix(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Bar, Qix', $service->checkNumber(140));
    }

    public function testIfSeveralMultiplesIsFooQix(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Foo, Qix', $service->checkNumber(21));
    }

    public function testIfSeveralMultiplesIsFooBarQix(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Foo, Bar, Qix', $service->checkNumber(210));
    }




    public function testIfOccurrenceOfThreeIsFoo(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Foo', $service->checkNumber(31));
    }

    public function testIfOccurrenceOfFiveIsBar(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Bar', $service->checkNumber(52));
    }

    public function testIfOccurrenceOfSevenIsQix(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Qix', $service->checkNumber(71));
    }

    public function testIfSeveralOccurrencesIsFooBar(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Foo, Bar', $service->checkNumber(352));
    }

    public function testIfSeveralOccurrencesIsBarQix(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Bar, Qix', $service->checkNumber(572));
    }

    public function testIfSeveralOccurrencesIsFooQix(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Foo, Qix', $service->checkNumber(374));
    }

    public function testIfSeveralOccurrencesIsFooBarQix(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Foo, Bar, Qix', $service->checkNumber(3572));
    }




    public function testIfOccurrenceAndMultipleOfThreeIsFooFoo(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Foo, Foo', $service->checkNumber(33));
    }

    public function testIfOccurrenceAndMultipleOfFiveIsBarBar(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Bar, Bar', $service->checkNumber(50));
    }

    public function testIfOccurrenceAndMultipleOfSevenIsQixQix(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Qix, Qix', $service->checkNumber(77));
    }

    public function testIfSeveralOccurrencesAndMultiplesIsFooBarFooBar(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Foo, Bar, Foo, Bar', $service->checkNumber(135));
    }

    public function testIfSeveralOccurrencesAndMultiplesIsBarQixBarQix(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Bar, Qix, Bar, Qix', $service->checkNumber(175));
    }

    public function testIfSeveralOccurrencesAndMultiplesIsFooQixFooQix(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Foo, Qix, Foo, Qix', $service->checkNumber(378));
    }

    public function testIfSeveralOccurrencesAndMultiplesIsFooBarQixFooBarQix(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('Foo, Bar, Qix, Foo, Bar, Qix', $service->checkNumber(735));
    }




    public function testIfNoTransformationsReturnString(): void
    {
        $service = new FooBarQixService();
        $this->assertSame('4', $service->checkNumber(4));
    }
}