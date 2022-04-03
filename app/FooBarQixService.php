<?php

namespace App;

class FooBarQixService
{
    private int $foo = 3;
    private int $bar = 5;
    private int $qix = 7;

    public function action(int $number1, int $number2): bool
    {
        return $number1 % $number2 == 0;
    }

    public function checkAction(int $input): string
    {
        $foo = $this->foo;
        $bar = $this->bar;
        $qix = $this->qix;

        if ($this->action($input, $foo) && $this->action($input, $bar) && $this->action($input, $qix)) {
            return 'Foo, Bar, Qix';
        }

        if ($this->action($input, $foo) && $this->action($input, $bar)) {
            return 'Foo, Bar';
        }

        if ($this->action($input, $foo) && $this->action($input, $qix)) {
            return 'Foo, Qix';
        }

        if ($this->action($input, $bar) && $this->action($input, $qix)) {
            return 'Bar, Qix';
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

        return '';
    }


    public function checkOccurrence(int $input): string
    {
        $foo = $this->foo;
        $bar = $this->bar;
        $qix = $this->qix;

        if (str_contains($input, $foo) && str_contains($input, $bar) && str_contains($input, $qix)) {
            return 'Foo, Bar, Qix';
        }

        if (str_contains($input, $foo) && str_contains($input, $bar)) {
            return 'Foo, Bar';
        }

        if (str_contains($input, $foo) && str_contains($input, $qix)) {
            return 'Foo, Qix';
        }

        if (str_contains($input, $bar) && str_contains($input, $qix)) {
            return 'Bar, Qix';
        }
        if (str_contains($input, $foo)) {
            return 'Foo';
        }

        if (str_contains($input, $bar)) {
            return 'Bar';
        }

        if (str_contains($input, $qix)) {
            return 'Qix';
        }

        return '';
    }

    public function checkNumber(int $input): string
    {
        if($this->checkAction($input) . $this->checkOccurrence($input) == '') {
            return $input;
        }

        if($this->checkAction($input) == '') {
            return $this->checkOccurrence($input);
        }

        if($this->checkOccurrence($input) == '') {
            return $this->checkAction($input);
        }

        return $this->checkAction($input) . ', ' . $this->checkOccurrence($input);
    }
}