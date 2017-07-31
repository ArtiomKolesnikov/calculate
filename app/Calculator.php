<?php
/**
 * Created by PhpStorm.
 * User: Артём
 * Date: 30.07.2017
 * Time: 23:00
 */

namespace App;

use PHPUnit_Framework_TestCase;

class Calculator
{

    public static function multiplication($num1, $num2)
    {
        return $num1 * $num2;
    }

    public static function addition($num1, $num2)
    {
        return $num1 + $num2;
    }
}

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $this->assertNotNull(Calculator::multiplication(null,45));
    }

    public function testAddition()
    {
        $this->assertNotNull(Calculator::multiplication(null,75));
    }

}