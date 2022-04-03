<?php

namespace App;

class InfQixFooService
{
    private int $inf = 8;
    private int $qix = 7;
    private int $foo = 3;

    public function action(int $number1, int $number2): bool
    {
        return $number1 % $number2 == 0;
    }

    public function checkAction(int $input): string
    {
        $inf = $this->inf;
        $qix = $this->qix;
        $foo = $this->foo;

        if ($this->action($input, $inf) && $this->action($input, $qix) && $this->action($input, $foo)) {
            return 'Inf; Qix; Foo';
        }

        if ($this->action($input, $inf) && $this->action($input, $qix)) {
            return 'Inf; Qix';
        }

        if ($this->action($input, $inf) && $this->action($input, $foo)) {
            return 'Inf; Foo';
        }

        if ($this->action($input, $qix) && $this->action($input, $foo)) {
            return 'Qix; Foo';
        }

        if ($this->action($input, $inf)) {
            return 'Inf';
        }

        if ($this->action($input, $qix)) {
            return 'Qix';
        }

        if ($this->action($input, $foo)) {
            return 'Foo';
        }

        return '';
    }


    public function checkOccurrence(int $input): string
    {
        $inf = $this->inf;
        $qix = $this->qix;
        $foo = $this->foo;

        $infQixFoo = [
            $inf => 'Inf',
            $qix => 'Qix',
            $foo => 'Foo'
        ];

        $result = [];

        $input = str_split($input);

        foreach ($input as $nr) {
            if(isset($infQixFoo[$nr])) {
                $result[] = $infQixFoo[$nr];
            }
        }

        if(count($result) == 0) {
            return '';
        }

        return implode('; ', $result);
    }

    public function checkSumOfNumbers(int $input): string
    {
        $inf = $this->inf;

        $input = str_split($input);

        if(array_sum($input) % $inf == 0) {
            return 'Inf';
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

        return $this->checkAction($input) . '; ' . $this->checkOccurrence($input) . $this->checkSumOfNumbers($input);
    }
}