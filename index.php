<?php

require 'vendor/autoload.php';

 use App\FooBarQixService;
 use App\InfQixFooService;

 $fooBarQix = new FooBarQixService();
 $infQixFoo = new InfQixFooService();

 echo $fooBarQix->checkNumber(1234567890).PHP_EOL;
 echo $infQixFoo->checkNumber(1234567890).PHP_EOL;