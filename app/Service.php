<?php

namespace App;

class Service
{
    private int $foo = 3;
    private int $bar = 5;
    private int $qix = 7;

    public function action(int $number1, int $number2): bool
    {
        return $number1 % $number2 == 0;
    }

    public function checkNumber(int $input): string
    {
        $foo = $this->foo;
        $bar = $this->bar;
        $qix = $this->qix;

        if ($this->action($input, $foo) && $this->action($input, $bar) && $this->action($input, $qix)) {
            return 'FooBarQix';
        }

        if ($this->action($input, $foo) && $this->action($input, $bar)) {
            return 'FooBar';
        }

        if ($this->action($input, $foo) && $this->action($input, $qix)) {
            return 'FooQix';
        }

        if ($this->action($input, $bar) && $this->action($input, $qix)) {
            return 'BarQix';
        }

        if ($this->action($input, $foo)) {
            return 'Foo';
        }

        if ($this->action($input, $bar)) {
            return 'Bar';
        }

        if ($this->action($input, $qix)) {
            return 'Qix';
        }

        return $input;
    }
}