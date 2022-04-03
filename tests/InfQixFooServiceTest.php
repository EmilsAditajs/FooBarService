<?php


declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\InfQixFooService;

class InfQixFooServiceTest extends TestCase
{
    public function testIfMultipleOfEightIsInf(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Inf', $service->checkNumber(16));
    }

    public function testIfMultipleOfSevenIsQix(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Qix', $service->checkNumber(14));
    }

    public function testIfMultipleOfThreeIsFoo(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Bar', $service->checkNumber(6));
    }

    public function testIfSeveralMultiplesIsInfQix(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Inf; Qix', $service->checkNumber(56));
    }

    public function testIfSeveralMultiplesIsInfFoo(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Inf; Foo', $service->checkNumber(24));
    }

    public function testIfSeveralMultiplesIsQixFoo(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Qix; Foo', $service->checkNumber(21));
    }

    public function testIfSeveralMultiplesIsInfQixFoo(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Inf; Qix; Foo', $service->checkNumber(504));
    }




    public function testIfOccurrenceOfEightIsInf(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Inf', $service->checkNumber(82));
    }

    public function testIfOccurrenceOfSevenIsQix(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Qix', $service->checkNumber(74));
    }

    public function testIfOccurrenceOfThreeIsFoo(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Foo', $service->checkNumber(31));
    }

    public function testIfSeveralOccurrencesIsInfQix(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Inf; Qix', $service->checkNumber(871));
    }

    public function testIfSeveralOccurrencesIsInfFoo(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Inf; Foo', $service->checkNumber(835));
    }

    public function testIfSeveralOccurrencesIsQixFoo(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Qix; Foo', $service->checkNumber(731));
    }

    public function testIfSeveralOccurrencesIsFooQixInf(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Foo; Qix; Inf', $service->checkNumber(1378));
    }




    public function testIfOccurrenceAndMultipleOfEightIsInfInf(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Inf; Inf', $service->checkNumber(80));
    }

    public function testIfOccurrenceAndMultipleOfSevenIsQixQix(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Qix; Qix', $service->checkNumber(70));
    }

    public function testIfOccurrenceAndMultipleOfThreeIsFooFoo(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Foo; Foo', $service->checkNumber(30));
    }

    public function testIfSeveralOccurrencesAndMultiplesIsInfQixInfQix(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Inf; Qix; Qix; Inf', $service->checkNumber(728));
    }

    public function testIfSeveralOccurrencesAndMultiplesIsInfFooInfFoo(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Inf; Foo; Foo; Inf', $service->checkNumber(384));
    }

    public function testIfSeveralOccurrencesAndMultiplesIsQixFooQixFoo(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Qix; Foo; Qix; Foo', $service->checkNumber(273));
    }

    public function testIfSeveralOccurrencesAndMultiplesIsInfQixFooInfQixFoo(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('Inf; Qix; Foo; Inf; Qix; Foo', $service->checkNumber(8736));
    }




    public function testIfNoTransformationsReturnString(): void
    {
        $service = new InfQixFooService();
        $this->assertSame('4', $service->checkNumber(4));
    }
}