<?php

/**
 * Created by PhpStorm.
 * User: Артём
 * Date: 29.07.2017
 * Time: 15:06
 */

use \App\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $this->assertEquals(4, Calculator::multiplication(2,2));
    }
    
}