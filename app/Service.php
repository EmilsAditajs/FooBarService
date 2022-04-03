<?php

namespace App;

class Service
{
    private int $foo = 3;
    private int $bar = 5;

    private function action(int $number1, int $number2): bool
    {
        return $number1 % $number2 == 0;
    }

    public function checkNumber(int $input): string
    {
        if($this->action($input, $this->foo) && $this->action($input, $this->bar)) {
            return 'FooBar';
        }

        if($this->action($input, $this->foo)) {
            return 'Foo';
        }

        if($this->action($input, $this->bar)) {
            return 'Bar';
        }

        return $input;
    }
}